<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\LanguageRepositoryInterface as LanguageRepository;



class DashboardController extends Controller
{
    protected $language;
  
    public function __construct(
       
    ){
        $this->middleware(function($request, $next){
            $locale = app()->getLocale();   
            $language = Language::where('canonical', $locale)->first();
            $this->language = $language->id;
            return $next($request);
        });
    }

    public function changeStatus(Request $request){
        $post = $request->input();
        $serviceInterfaceNamespace = '\App\Services\\' . ucfirst($post['model']) . 'Service';
        if (class_exists($serviceInterfaceNamespace)) {
            $serviceInstance = app($serviceInterfaceNamespace);
        }
        $flag = $serviceInstance->updateStatus($post);

        return response()->json(['flag' => $flag]); 
        
    }

    public function changeStatusAll(Request $request){
        $post = $request->input();
        $serviceInterfaceNamespace = '\App\Services\\' . ucfirst($post['model']) . 'Service';
        if (class_exists($serviceInterfaceNamespace)) {
            $serviceInstance = app($serviceInterfaceNamespace);
        }
        $flag = $serviceInstance->updateStatusAll($post);
        return response()->json(['flag' => $flag]); 

    }
    public function getMenu(Request $request){
        $model = $request->input('model');
        $page =($request->input('page')) ?? 1;

        $keyword = ($request->string('keyword') ?? null);
      
        $serviceInterfaceNamespace = '\App\Repositories\\' . ucfirst($model) . 'Repository';
        if (class_exists($serviceInterfaceNamespace)) {
            $serviceInstance = app($serviceInterfaceNamespace);
        }
      $Arguments = $this->paginationArgument($model,$keyword);
   
      $object = $serviceInstance->pagination(...array_values($Arguments));

        return response()->json($object); 
           
    }
    private function paginationArgument(string $model = '',string $keyword): array
    {
        // Convert model name to snake case
        $model = Str::snake($model);
    
        // Initialize base join array
        $join = [
            [$model . '_language as tb2', 'tb2.' . $model . '_id', '=', $model . 's.id'],
        ];
    
        // If the model is not related to _catalogue, join with the catalogue table
        if (strpos($model, '_catalogue') === false) {
            $join[] = [$model . '_catalogue_' . $model . ' as tb3', $model . 's.id', '=', 'tb3.' . $model . '_id'];
        }
          $condition = [
            'where' => [
                ['tb2.language_id', '=', $this->language],  // Language filter

            ],
          
            ];
            if(!is_null($keyword)){
                $condition['keyword']=addslashes($keyword);
            }

        return [ 
            'select' => ['id', 'name','canonical'],  // Fields to select
            'condition' => $condition,
            'perpage' => 20,  // Records per page
            'paginationConfig' => [
                'path' => $model . '.index',  // Pagination path
                'groupBy' => ['id', 'name'],  // Group by fields
            ],
            'orderBy' => [$model . 's.id', 'DESC'],  // Sorting configuration
            'join' => $join,  // Join configuration
            'relations' => [],  // Relations to be defined if necessary
       
        ];
    }
    public function findModelObject(Request $request){
        $get = $request->input();
        $alias = Str::snake($get['model']).'_language';
        $class= loadClass($get['model']);
        $object = $class->findWidgetItem([
          ['name','LIKE','%'.$get['keyword'].'%'],
         

        ],$this->language, $alias);
        return response()->json($object); 
       
    }
 public function findPromotionObject(Request $request){
  $get= $request->input();
  $model = $get['option']['model'];
  $keyword = $get['search'];
  $alias = Str::snake($model).'_language';
  $class= loadClass($model);
  $object = $class->findWidgetItem([
    ['name','LIKE','%'.$keyword.'%'],
   

  ],$this->language, $alias);
  $temp= [];
  if ( count($object)) {
      foreach ($object as $val) {
          $temp[] = [
              'id' => $val->id,
              'text' => $val->languages->first()->pivot->name,
          ];
      }
  }
  return response()->json(array('items' =>$temp));

 }
 public function getPromotionConditionValue(Request $request){
    try {
        $get=$request->input();
        switch ($get['value']) {
            case 'staff_take_care_customer':
                $class= loadClass('User');
                $object= $class->all()->toArray(); 
                break;
           case 'customer_group':
            $class= loadClass('CustomerCatalogue');
            $object= $class->all()->toArray(); 
                
            break;
            case 'customer_gender':
                $object= __('module.gender'); 
    
            break;
           case 'customer_birthday':
            $object= __('module.day'); 
    
            break;
          
        }
        $temp =[];
          if(!is_null($object) && count($object)){
       foreach ($object as $key => $val) {
               $temp[] =[
                'id'=>$val['id'],
                'text'=>$val['name']
               ];
       }
          }
        return response()->json([
            'data'=>$temp,
            'error'=>false,
         
             
        ]);

    } catch(\Exception $e ){
       
        echo $e->getMessage();die();
        return response()->json([
        
            'error'=>true,
            'messages' =>$e->getMessage()
             
        ]);
    }

  
 
 }
    
}
