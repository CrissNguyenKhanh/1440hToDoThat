<?php

namespace App\Services;

use App\Services\Interfaces\CustomerCatalogueServiceInterface;
use App\Repositories\Interfaces\CustomerCatalogueRepositoryInterface as CustomerCatalogueRepository;
use App\Repositories\Interfaces\CustomerRepositoryInterface as CustomerRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Class CustomerCatalogueService
 * @package App\Services
 */
class CustomerCatalogueService implements CustomerCatalogueServiceInterface
{
    protected $customerCatalogueRepository;
    protected $customerRepository;
    

    public function __construct(
        CustomerCatalogueRepository $customerCatalogueRepository,
        CustomerRepository $customerRepository
    ){
        $this->customerCatalogueRepository = $customerCatalogueRepository;
        $this->customerRepository = $customerRepository;
    }

    

    public function paginate($request){
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
            'publish' => $request->integer('publish')
        ];
        $perPage = $request->integer('perpage');
        $customerCatalogues = $this->customerCatalogueRepository->pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage, 
            ['path' => 'customer/catalogue/index'], 
            ['id', 'DESC'],  
            [],
            ['customers']
        );
        return $customerCatalogues;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            $customer = $this->customerCatalogueRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }


    public function update($id, $request){
        DB::beginTransaction();
        try{

            $payload = $request->except(['_token','send']);
            $customer = $this->customerCatalogueRepository->update($id, $payload);
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
            $customer = $this->customerCatalogueRepository->delete($id);

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
            $customer = $this->customerCatalogueRepository->update($post['modelId'], $payload);
            $this->changecustomerStatus($post, $payload[$post['field']]);

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
            $flag = $this->customerCatalogueRepository->updateByWhereIn('id', $post['id'], $payload);
            $this->changecustomerStatus($post, $post['value']);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }
    

    private function changeUserStatus($post, $value){
        DB::beginTransaction();
        try{
            $array = [];
            if(isset($post['modelId'])){
                $array[] = $post['modelId'];
            }else{
                $array = $post['id'];
            }
            $payload[$post['field']] = $value;
            $this->userRepository->updateByWhereIn('user_catalogue_id', $array, $payload);
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
            'description',
            'publish',

        ];
    }


}
