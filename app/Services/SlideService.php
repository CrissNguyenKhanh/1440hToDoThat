<?php

namespace App\Services;

use App\Services\Interfaces\SlideServiceInterface;
use App\Repositories\Interfaces\SlideRepositoryInterface as SlideRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Class SlideService
 * @package App\Services
 */
class SlideService extends BaseService implements SlideServiceInterface
{
    protected $SlideRepository;
    

    public function __construct(
        SlideRepository $SlideRepository
    ){
        $this->SlideRepository = $SlideRepository;
    }

    

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = $request->integer('publish');
        $perPage = $request->integer('perpage');
        $Slides = $this->SlideRepository->pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage,
            ['path' => 'Slide/index'], 
        );
        
        // dd($Slides);

        
        return $Slides;
    }

    public function create($request,$languageId){
        DB::beginTransaction();
        try{

            $payload = $request->only(['_token','name' ,'keyword' ,'setting' ,'short_code' ]);
            $payload['item'] =$this->handleSlideItem($request , $languageId);
            $slide = $this->SlideRepository->create($payload);

            
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }


    public function update($id, $request , $languageId){
        DB::beginTransaction();
        try{
            $slide = $this->SlideRepository->findById($id);
            $slideItem = $slide->item;
            unset($slideItem[$languageId]);  
            $payload = $request->only(['_token','name' ,'keyword' ,'setting' ,'short_code' ]);
            $payload['item'] = $this->handleSlideItem($request,$languageId) + $slideItem;
            $Slide = $this->SlideRepository->update($id, $payload);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try{
            $Slide = $this->SlideRepository->delete($id);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function updateStatus($post = []){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = (($post['value'] == 1)?2:1);
            $Slide = $this->SlideRepository->update($post['modelId'], $payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function updateStatusAll($post){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = $post['value'];
            $flag = $this->SlideRepository->updateByWhereIn('id', $post['id'], $payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function handleSlideItem($request, $languageId){
        $slide = $request->input('slide');
        $temp = [];
     foreach($slide['image'] as $key=>$val){
        $temp[$languageId][] = [
            'image'=>$val,
            'name' =>$slide['name'][$key],
            'description' =>$slide['description'][$key],
            'canonical' =>$slide['canonical'][$key],
            'alt'=>$slide['alt'][$key],
            'window' =>(isset($slide['window'][$key])) ? $slide['window'][$key] : '',
        ];
     }
     return $temp;
    }
    public function convertSlideArray(array $slide = []):array{
         $temp = [];
         $fields =['image' ,'description' ,'window','canonical','name','alt'];
         foreach($slide as $key => $val){
                foreach($fields as $field){
                    $temp[$field][] = $val[$field];
                }
         }
         return $temp;
    }
    private function paginateSelect(){
        return [
            'id',
            'name',
            'keyword', 
            'item', 
            'publish',
        ];
    }
public function getSlide($array =[],$language = 21){
 $slides = $this->SlideRepository->findByCondition(...$this->getSlideAgrument($array));
 $temp = [];
 foreach($slides as $key=>$val){
    $temp[$val->keyword]['item']= $val->item[$language];
    $temp[$val->keyword]['setting']= $val->setting;

 }
 return $temp;

}
private function getSlideAgrument($array){
    return [
        'condition' =>[
            config('apps.general.defaultPublish')
        ],
        'flag' =>true,
        'relation'=>[],
        'orderBy' =>['id' ,'desc'],
        'param' =>[
                'whereIn' =>$array,
                'whereInField' =>'keyword'
            ],
         

 ];
}
}