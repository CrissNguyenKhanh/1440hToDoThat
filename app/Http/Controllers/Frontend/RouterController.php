<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\RouterRepositoryInterface  as RouterRepository;


use APP\Enums\SlideEnum;




use Auth;
use Illuminate\Support\Facades\App;

class RouterController extends FrontendController

{
 protected $language;
 protected $routerRepository;
 protected $router;



  
    public function __construct(
      RouterRepository $routerRepository
    
    

    ){
     $this->routerRepository = $routerRepository;
  
     parent::__construct();


    }
  
 public function index(string $canonical = ''  ,Request $request){
  $this->getROuter($canonical);
 
   

   if(!is_null($this->router) && !empty($this->router)){
    $method = 'index';
     echo app($this->router->controllers)->{$method}($this->router->module_id,$request);
    
   }

 }
 public function page(string $canonical = '',$page = 1,Request $request){
  $this->getROuter($canonical);
  $page = (!isset($page)) ? 1 : $page;
 
  
  if(!is_null($this->router) && !empty($this->router)){
   $method = 'index';
    echo app($this->router->controllers)->{$method}($this->router->module_id,$request,$page);
   
  }
 
}
public function getROuter($canonical){
  $this->router=  $this->routerRepository->findByCondition(
    [
      ['canonical' ,'=' ,$canonical],
      ['language_id' ,'=' ,$this->language]
    ]
    );
}



}
