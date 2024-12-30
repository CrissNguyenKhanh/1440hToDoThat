<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SlideRepositoryInterface  as SlideRepository;
use App\Services\Interfaces\WidgetServiceInterface  as WidgetService;
use App\Services\Interfaces\SlideServiceInterface  as SlideService;
use APP\Enums\SlideEnum;




use Auth;
use Illuminate\Support\Facades\App;

class HomeController extends FrontendController

{
 protected $language;
 
 protected $slideRepository;
 protected $widgetService;
 protected $slideService;


  
    public function __construct(
    SlideRepository $slideRepository,
    WidgetService $widgetService,
    SlideService $slideService
    
    

    ){
      $this->slideRepository = $slideRepository;
      $this->widgetService = $widgetService;
      $this->slideService = $slideService;


     parent::__construct();
   

    }
    public function hangtrung(){
      return view('frontend.component.hangtrung');
    
        }
    public function phutung(){
      return view('frontend.component.phutung');
    
        }
    public function hangsang(){
      return view('frontend.component.hangsang');
    
        }
    public function productlamvip(){
      return view('frontend.component.productlamvip');
    
        }
    public function sapramat(){
  return view('frontend.component.sapramat');

    }

public function  productOfNguyen(){


  return view('frontend.component.productnguyenhome');

}
 public function  productlam(){

   
  return view('frontend.component.productLam');



 }
 

 public function index(){
 

  
  
   $config = $this->config();
  
   $widget= $this->widgetService->getWidget([
        ['keyword'=>'category','countObject' =>true],
        ['keyword'=>'news','children' =>true],
        ['keyword'=>'category-highlight'],
        ['keyword'=>'category-home','children' =>true,'promotion'=>TRUE,'object'=>true],
        ['keyword'=>'bestseller'],

   ],$this->language);

  $slides = $this->slideService->getSlide(['banner' ,'main-slide'],$this->language);
  $language = $this->language;
  $system = $this->system;


  $seo = [
    'meta_title' =>$system['seo_meta_title'],
    'meta_keyword' =>$system['seo_meta_keyword'],
    'meta_description' =>$system['seo_meta_description'],
    'meta_images' =>$system['seo_meta_images'],
    'canonical' => config('app.url')

  ];

 
// dd($slides);
  
  //  $slides = $this->slideRepository->findByCondition(...$this->slideAgrument());
  
  //  $slides->slideItems = $slides->item[$this->language];

  
    return view('frontend.homepage.home.index',compact(
    'config',
    'slides',
    'widget',
    'seo',
    'system'

     ));


 }
 private function slideAgrument(){
  return [
    'condition'=>[
      config('apps.general.defaultPublish'),
      ['keyword' ,'=','main-slide']
    ]
    ];
 }
 private function config(){
    return [
      'language' =>$this->language
    ];
 }

}
