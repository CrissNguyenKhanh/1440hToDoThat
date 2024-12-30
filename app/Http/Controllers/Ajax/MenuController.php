<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\MenuRepositoryInterface  as MenuRepository;
use App\Services\Interfaces\MenuCatalogueServiceInterface  as menuCatalogueService;
use App\Services\Interfaces\MenuServiceInterface  as menuService;


use App\Models\Language;
use App\Http\Requests\StoreMenuCatalogueRequest;


class MenuController extends Controller
{
    protected $menuRepository;
    protected $menuCatalogueService;
    protected $menuService;
    protected $language;



    

    public function __construct(
       MenuRepository $menuRepository,
       MenuCatalogueService $menuCatalogueService,
       MenuService $menuService

    ){
        $this->menuRepository = $menuRepository;
        $this->menuCatalogueService = $menuCatalogueService;
        $this->menuService = $menuService;
        $this->middleware(function($request, $next){
            $locale = app()->getLocale(); // vn en cn
            $language = Language::where('canonical', $locale)->first();
            $this->language = $language->id;
            return $next($request);
        });

  
    }
    public function createCatalogue(StoreMenuCatalogueRequest $request){
        $menuCatalogues = $this->menuCatalogueService->create($request);
        if ( $menuCatalogues!== FALSE) {
            return response()->json([
                'code' => 0,
                'message' => 'Tạo nhóm menu thành công!',
                'data'=>$menuCatalogues
            ]);
        }
        
        return response()->json([
            'code' => 1,
            'message' => 'Có vấn đề xảy ra, hãy thử lại!'
        ]);

    }
    public function drag(Request $request){
          $post = json_decode($request->string('json') ,TRUE);
          $menuCatalogueId = $request->integer('menu_catalogue_id');
          $flag = $this->menuService->dragUpdate($post,$menuCatalogueId,$this->language);

    }

}
