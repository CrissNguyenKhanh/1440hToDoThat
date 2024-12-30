<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\OrderServiceInterface  as OrderService;
use App\Services\Interfaces\CustomerServiceInterface  as CustomerService;



class DashboardController extends Controller
{
    protected $orderService;
    protected $customerService;


    public function __construct(

        OrderService $orderService,
        CustomerService $customerService,


    ){
        $this->orderService = $orderService;
        $this->customerService = $customerService;


    }

    public function index(){
        
    $orderStatics  = $this->orderService->statistic();   
    $customerStatistic = $this->customerService->statistic();
 
        $config = $this->config();
        $template = 'backend.dashboard.home.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'orderStatics',
            'customerStatistic'
        ));

    }
    
    
    private function config(){
        return [
            'js' => [
           'backend/js/plugins/chartJs/Chart.min.js',
           'backend/library/dashboard.js'

              
            ]
        ];
    }

}
