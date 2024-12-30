<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;

use APP\Enums\SlideEnum;
use App\Repositories\Interfaces\ProductCatalogueRepositoryInterface  as ProductCatalogueRepository;
use App\Services\Interfaces\ProductServiceInterface  as ProductService;
use App\Models\System;
use App\Services\Interfaces\ProductCatalogueServiceInterface  as ProductCatalogueService;




use Auth;
use Illuminate\Support\Facades\App;

class ProductCatalogueController extends FrontendController

{
 protected $language;
 protected $system;

 protected $productCatalogueRepository;
 protected $productService;

 protected $productCatalogueService;

  
    public function __construct(
    
        ProductCatalogueRepository $productCatalogueRepository,
        ProductService $productService,

        ProductCatalogueService $productCatalogueService


    ){
     
        $this->productCatalogueRepository = $productCatalogueRepository;
        $this->productCatalogueService = $productCatalogueService;
        $this->productService = $productService;

     parent::__construct();


    }
 public function index($id,$request,$page = 1){

   $productCatalogue = $this->productCatalogueRepository->getProductCatalogueById($id,$this->language);
   $products= $this->productService->paginate(
    $request,
    $this->language,
    $productCatalogue,
    $page,
 ['path' =>$productCatalogue->canonical] 
);
  $productId = $products->pluck('id')->toArray();
  if(count($productId) && !is_null($productId)){
    $products = $this->productService->combineProductAndPromotion($productId,$products);

  }

     $config = $this->config();
    $system = $this->system;

    $breadCrumb = $this->productCatalogueRepository->breadCrumb(
        $productCatalogue,$this->language
    );   

    $seo = seo($productCatalogue,$page);

   
     return view('frontend.product.Catalogue.index',compact(
        'config',
        'seo',
        'system',
        'productCatalogue',
        'breadCrumb',
        'products'
    
         ));
        }

        private function config(){
            return [
                'language' => $this->language
            ];
         }
        
}
