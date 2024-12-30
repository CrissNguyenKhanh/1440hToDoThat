<?php

namespace App\Services;

use App\Services\Interfaces\OrderServiceInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use App\Repositories\Interfaces\ProductVariantRepositoryInterface  as ProductVariantRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface  as ProductRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Class OrderService
 * @package App\Services
 */
class OrderService extends BaseService implements OrderServiceInterface
{
    protected $orderRepository;
    protected $productRepository;
    protected $productVariantRepository;
    

    public function __construct(
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        ProductVariantRepository $productVariantRepository,

        
    ){
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->productVariantRepository = $productVariantRepository;

    }

    

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = $request->integer('publish');
        foreach(__('cart') as $key =>$val){
            $condition['dropdown'][$key] =$request->string($key);
         }
         $condition['created_at'] = $request->input('created_at');
 

    //   $join = [
    //     ['order_product as tb2' ,'tb2.order_id' , '=' ,'orders.id']
    //   ];
       
        
        $perPage = $request->integer('perpage');
        $orders = $this->orderRepository->Pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage,
            ['path' => 'order/index'], 
            ['id','desc'],
           
        );
        


        
        return $orders;
    }

    
    public function getOrderItemImage($order){
    
        foreach ($order->products as $key => $val) {
               $uuid = $val->pivot->uuid;
               if(!is_null($uuid)){
                $variant = $this->productVariantRepository->findByCondition([
                   ['uuid','=',$uuid]
               ]);
               $variantImage = explode(',' ,$variant->album)[0] ?? null;
               $val->image=$variantImage;
        } 
        }
        return $order;
    }
    public function update($request){
        DB::beginTransaction();
        try{
            $id = $request->input('id');
            $payload =$request->input('payload');
           
            $this->orderRepository->update($id,$payload);

           
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }
    public function ajaxOrderChart($request){
        $type = $request->input('chartType');
      
        switch ($type) {
            case 1:
                $year = now()->year;
               $response =convertRevenueChartData($this->orderRepository->revenueByYear($year));
                break;
           case 7:
            $response = convertRevenueChartData($this->orderRepository->revenueY7Day(),'daily_revenue','date','ngày');
             break;
            case 30:
                $currentYear = now()->year;
                $currentMonth = now()->month;
                $dayInMonth = Carbon::createFromDate($currentYear,$currentMonth,1)->daysInMonth;
                $allDays = range(1,$dayInMonth);
                $temp = $this->orderRepository->revenueCurrentMonth($currentMonth ,$currentYear );

                $label = [];
                $data = [];

                 $temp2 = array_map(function($day) use ($temp ,&$label ,&$data){
                   $found = collect($temp)->first(function($record) use ($day) {
                         return $record['day'] == $day;
                   });
                      
              
                   $label[] ='Ngày '.$day;
                   $data[]  =  $found ? $found['daily_revenue'] : 0;
           


                 },$allDays);
                
                $response = [
                    'label' =>$label,
                    'data'=>$data
                ];
            
                     
               break;

        }
    
      return $response;
    }



    public function statistic(){
       $month = now()->month;
       $year = now()->year;
       $previousMonth = ($month ==1 ) ? 12 : $month -1;
       $previousYear  = ($month ==1  ) ? $year-1 :$year;
       $orderCurrentMonth = $this->orderRepository->getOrderByTime($month ,$year);
       $orderPreviousMonth = $this->orderRepository->getOrderByTime($previousMonth,$previousYear);
   
    return [
        'orderCurrentMonth' =>$orderCurrentMonth,
        'orderPreviousMonth'=>$orderPreviousMonth,
        'grow'=>growth($orderCurrentMonth ,$orderPreviousMonth),
        'totalOrders'=>$this->orderRepository->getTotalOrders(),
        'cancelOrders'=>$this->orderRepository->getCancelOrders(),
        'revenueOrders' =>$this->orderRepository->revenueOrders(),
        'revenueChart' =>convertRevenueChartData($this->orderRepository->revenueByYear($year))

    ];
    }
    private function paginateSelect(){
        return [
            'id',
          'code',
        'fullname',

        'phone',
        'email',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'description',
        'promotion',
        'cart',
        'customer_id',
        'guess_cookie',
        'method',
        'confirm',
        'payment',
        'delivery',
        'shipping',
        'created_at',
      
        ];
    }


}
