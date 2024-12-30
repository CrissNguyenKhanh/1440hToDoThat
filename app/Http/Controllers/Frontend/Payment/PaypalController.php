<?php

namespace App\Http\Controllers\Frontend\Payment;
use App\Http\Controllers\FrontendController;
use App\Services\CartService;
use Illuminate\Http\Request;
use Cart;
use Srmklive\PayPal\Services\PayPal as PayPalClient;



class PaypalController extends FrontendController
{ 
    protected $language;
    protected $cartService;

    public function __construct(
        cartService $cartService
    ){
        $this->cartService = $cartService;
        parent::__construct();
    }
    public function create(Request $request){
        $flag = $this->cartService->create($request,$this->language);
        $cart = Cart::instance('shopping')->content();
       return response()->json([
        'cart'=>$cart,
        'messages'=>"Thêm sản phẩm vào giỏ hàng thành công",
        'code'=> ($flag) ? 10 : 11,

        
       ]);
        
    }
    public function success(Request $request)
    {

         $provider = new PayPalClient;
    
   
            $provider->setApiCredentials(config('paypal'));
    
            $paypalToken = $provider->getAccessToken();
            $provider->setAccessToken($paypalToken);
    
            $response = $provider->capturePaymentOrder($request->token);
              
  
            if(isset($response['status']) && $response['status'] == 'COMPLETED'){
                $payload['payment'] ='paid';
                $payload['confirm'] ='confirm';
            }

        
      
       
    }
    
   public function cancel(){
    
   }
}
