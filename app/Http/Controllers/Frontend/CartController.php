<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ProvinceRepositoryInterface  as ProvinceRepository;
use App\Repositories\Interfaces\PromotionRepositoryInterface  as PromotionRepository;
use App\Http\Requests\StoreCartRequest;
use App\Repositories\Interfaces\OrderRepositoryInterface  as OrderRepository;


use APP\Enums\SlideEnum;
use Cart;
use App\Services\CartService;
use App\Mail\OrderMail;
use App\Classes\Paypal;




use Auth;
use Illuminate\Support\Facades\App;

class CartController extends FrontendController

{
 protected $language;

 protected $provinceRepository;
 protected $promotionRepository;
 protected $orderRepository;
 protected $cartService;
 protected $Paypal;



  
    public function __construct(
  
      ProvinceRepository $provinceRepository,
      PromotionRepository $promotionRepository,
      OrderRepository $orderRepository,
      Paypal $Paypal,
  
      cartService $cartService,
    
    

    ){
      $this->provinceRepository = $provinceRepository;
      $this->promotionRepository = $promotionRepository;
      $this->orderRepository = $orderRepository;
      $this->Paypal = $Paypal;

      $this->cartService = $cartService;
 


     parent::__construct();


    }
 public function checkout(){

   $provinces = $this->provinceRepository->all();
   $carts = Cart::instance('shopping')->content();
   $carts = $this->cartService->remakeCart($carts);

   $cartConfig = $this->cartConfig();
   // $carts = Cart::instance('shopping')->destroy();
  $cartCaculate = $this->cartService->reCaculateCart();

  $cartPromotion = $this->cartService->cartPromotion($cartCaculate['cartTotal']);

 
$seo = [
   'meta_title' =>'trang thanh toán đơn hàng',
   'meta_keyword' =>'',
   'meta_description' =>'',
   'meta_images' =>'',
   'canonical' => write_url('thanh-toan',true,true),

 ];
  
 $system = $this->system;
 $config = $this->config();


   return view('frontend.cart.index',compact(
   'config',
   'seo',
   'system',
   'provinces',
   'carts',
   'cartConfig',
   'cartPromotion',
   'cartCaculate'
    ));
  

 }
 public function store(StoreCartRequest $request){
  $system = $this->system;
 $code =  $this->cartService->order($request,$system);


  if($code['flag']){
    // $response = $this->paymentMethod($code);

    // if($response['errorCode'] == 0 ){
    //   return redirect()->away($response['url']);
    // }
    return redirect()->route('cart.success',['code'=>$code['order']->code])->with('success','Đặt hàng thành công');
}
return redirect()->route('cart.checkout')->with('error','Đặt hàng không thành công. Hãy thử lại');
 }
 public function cartConfig(){
   return [
      'cartTotal' => Cart::instance('shopping')->total()
   ];
 }
 




 public function success($code){


 
   $order = $this->orderRepository->findByCondition([
    ['code','=',$code ]
   ],false,['products']);





 $seo = [
  'meta_title' =>'trang thanh toán đơn hàng thành công',
  'meta_keyword' =>'',
  'meta_description' =>'',
  'meta_images' =>'',
  'canonical' => write_url('cart/success',true,true),

];
 
$system = $this->system;
$config = $this->config();

  return view('frontend.cart.success',compact(
  'config',
  'seo',
  'system',
  'order'
  
   ));
 }

 public function paymentMethod($order = null){
  $class= $order['order']->method;

  $response =$this->{$class}->payment($order['order']);
  
  
 
  return $response;
 }
 private function config(){
   return [
      'language' => $this->language,
      'css' => [
         'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
     ],
      'js' =>[
         'backend/library/location.js',
         'frontend/core/library/cart.js',
         'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',

      ]
   ];
 }

}
