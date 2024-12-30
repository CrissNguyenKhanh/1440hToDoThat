<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;

use APP\Enums\SlideEnum;
use App\Repositories\Interfaces\ProductCatalogueRepositoryInterface  as ProductCatalogueRepository;
use App\Services\Interfaces\ProductServiceInterface  as ProductService;
use App\Models\System;
use App\Services\Interfaces\ProductCatalogueServiceInterface  as ProductCatalogueService;
use App\Repositories\Interfaces\ProductRepositoryInterface  as ProductRepository;




use Auth;
use Illuminate\Support\Facades\App;

class ProductController extends FrontendController

{
 protected $language;
 protected $system;

 protected $productCatalogueRepository;
 protected $productRepository;

 protected $productService;

 protected $productCatalogueService;

  
    public function __construct(
    
        ProductCatalogueRepository $productCatalogueRepository,
        ProductRepository $productRepository,

        ProductService $productService,

        ProductCatalogueService $productCatalogueService


    ){
     
        $this->productCatalogueRepository = $productCatalogueRepository;
        $this->productRepository = $productRepository;
        
        $this->productCatalogueService = $productCatalogueService;
        $this->productService = $productService;

     parent::__construct();


    }
 public function index($id,$request){
 $language=$this->language;
 
  $product = $this->productRepository->getProductById($id,$this->language);
  $product = $this->productService->combineProductAndPromotion([$id],$product,true);

   $productCatalogue = $this->productCatalogueRepository->getProductCatalogueById(($product->product_catalogue_id),$this->language);
  
   $product->attributes = $this->productService->getAttribute($product,$this->language);

   $breadCrumb = $this->productCatalogueRepository->breadCrumb(
    $productCatalogue,$this->language
);  
   $category =recursive($this->productCatalogueRepository->all([
    'languages' =>function($query) use($language){
    $query->where('language_id' ,$language);        
}

 ]
 ,categorySelectRaw('product')));





     $config = $this->config();
    $system = $this->system;
    $seo = seo($product);

   
     return view('frontend.product.product.index',compact(
        'config',
        'seo',
        'system',
        'productCatalogue',
        'breadCrumb',
        'product',
        'category',

    
         ));
        }
  private function categorySelectRaw (){
    
  }
        private function config(){
            return [
                'language' => $this->language,
                'js' =>[
                    'frontend/core/library/cart.js',
                    'frontend/core/library/product.js'

                ]
            ];
         }
        
}