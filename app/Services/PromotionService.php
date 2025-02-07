<?php

namespace App\Services;

use App\Services\Interfaces\PromotionServiceInterface;
use App\Repositories\Interfaces\PromotionRepositoryInterface as PromotionRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use APP\Enums\PromotionEnum\PromotionEnum;

/**
 * Class PromotionService
 * @package App\Services
 */
class PromotionService implements PromotionServiceInterface
{
    protected $promotionRepository;
    

    public function __construct(
        PromotionRepository $promotionRepository
    ){
        $this->promotionRepository = $promotionRepository;
    }

    

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = $request->integer('publish');
        $perPage = $request->integer('perpage');
        $promotions = $this->promotionRepository->pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage,
            ['path' => 'promotion/index'], 
        );
        
      
        
        return $promotions;
    }

    public function create($request,$languageId){
        DB::beginTransaction();
        try{

            $payload = $request->only(
             'name',
            'code',
            'description',
             'method',
            'startDate',
            'endDate',
            'neverEndDate'
              );
              
              $payload['maxDiscountValue'] = convert_price($request->input('product_and_quantity.maxDiscountValue'));
              $payload['discountValue'] =convert_price($request->input('product_and_quantity.discountValue')) ;
              $payload['discountType'] = $request->input('product_and_quantity.discountType');
              $payload['startDate'] =Carbon::createFromFormat('d/m/Y H:i' ,$payload['startDate']);
              if(is_null($payload['discountType'])){
                $payload['discountType'] = '';
              }
              if(isset( $payload['endDate'])){
                $payload['endDate'] =Carbon::createFromFormat('d/m/Y H:i' ,$payload['endDate']);
              }
              $payload['code'] =(empty($payload['code'])) ? time() :$payload['code'];


           switch ($payload['method']) {
            case 'order_amount_range':
              $payload['discountInfomation'] =  $this->orderByRange($request);
                break;
                case'product_and_quantity':
                    $payload['discountInfomation'] =$this->productAndQuantity($request);
                    // $promotion = $this->promotionRepository->create($payload);
               
                    // if($promotion->id > 0){
                    //    $this->createPromotionProductVariant($promotion,$request);
                    // }
                    break;
           }
  
              $promotion = $this->promotionRepository->create($payload);
          
                    if($promotion->id > 0){
            
                        $this->handleRelation($request,$promotion); 
                   

                       }
              
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }
    public function update($id, $request,$languageId){
        DB::beginTransaction();
        try{

          
            $payload = $request->only('name',
            'code',
            'description',
             'method',
            'startDate',
            'endDate',
            'neverEndDate',
              );
              $payload['maxDiscountValue'] = $request->input('product_and_quantity.maxDiscountValue');
              $payload['discountValue'] =convert_price($request->input('product_and_quantity.discountValue')) ;
              $payload['discountType'] = $request->input('product_and_quantity.discountType');
              

              $payload['startDate'] =Carbon::createFromFormat('d/m/Y H:i' ,$payload['startDate']);

      
              if(isset( $payload['endDate'])){
                $payload['endDate'] =Carbon::createFromFormat('d/m/Y H:i' ,$payload['endDate']);
              }
              $payload['code'] =(empty($payload['code'])) ? time() :$payload['code'];
               switch ($payload['method']) {
                case 'order_amount_range':
                  $payload['discountInfomation'] =  $this->orderByRange($request);
                    break;
                    case'product_and_quantity':
                        $payload['discountInfomation'] =$this->productAndQuantity($request);
                        
                        break;
               }
               $promotion = $this->promotionRepository->update($id,$payload);
              $this->handleRelation($request,$promotion,'update');
          
          
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }
    private function handleRelation($request ,$promotion, $method = 'create'){
        if($request->input('method') === 'product_and_quantity'){
            $object = $request->input('object');
            $payload = [];
            foreach($object['id'] as $key=>$val){
     
                $payload[] =[
                    'product_id' =>$val,
                  
                    'variant_uuid' =>$object
                    ['variant_uuid'][$key],
                    
                    'model'=>$request->input('module_type')
                ];
            }
            if($method == 'update'){
            $promotion->products()->detach();
            }
         


   
    $promotion->products()->sync($payload);
        }
    }
   private function createPromotionProductVariant($promotion,$request){
   

   }
  private function handleSourceAndCondition($request){
    $data =  [

        'source'=>[
            'status' =>$request->input('source'),
            'data'=>$request->input('sourceValue'),
        ],
        'apply'=>[
            'status'=>$request->input('applyValue'),
            'data'=>$request->input('applyValue'),
          
        ]
        ];

            foreach($data['apply']['data'] as $key =>$val){
                $data['apply']['condition'][$val] = $request->input($val);
            }

return $data;
  }
    private function orderByRange($request){
      $data['info'] =$request->input('promotion_order_amount_range');
      
     
     return $data + $this->handleSourceAndCondition($request);
     }



     private function productAndQuantity($request){ 
           
            $data['info'] =$request->input('product_and_quantity');
       
            $data['info']['model'] = $request->input('module_type');
            $data['info']['object'] = $request->input('object');
            return $data + $this->handleSourceAndCondition($request);
     }
    
 

    public function destroy($id){
        DB::beginTransaction();
        try{
            $promotion = $this->promotionRepository->delete($id);

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
            $promotion = $this->promotionRepository->update($post['modelId'], $payload);

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
            $flag = $this->promotionRepository->updateByWhereIn('id', $post['id'], $payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function convertBirthdayDate($birthday = ''){
        $carbonDate = Carbon::createFromFormat('Y-m-d', $birthday);
        $birthday = $carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }
    public function saveTranslate($request , $languageId){
        DB::beginTransaction();
        try{
            $temp = [];
            $translateId = $request->input('translateId');
            $promotion = $this->promotionRepository->findById($request->input('promotionId'));
            $temp =$promotion->description;
            $temp[$translateId] = $request->input('translate_description');
            $payload['description'] = $temp;
             $this->promotionRepository->update($promotion->id,$payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }
    private function paginateSelect(){
        return [
            'id', 
            'name', 
            'code',
            'discountInfomation',
            'method',
            'startDate',
            'endDate',
            'publish',
            'order'
      
          
        ];
    }


}
