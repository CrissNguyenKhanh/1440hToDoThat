<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\SourceServiceInterface  as SourceService;
use App\Repositories\Interfaces\SourceRepositoryInterface as SourceRepository;
use App\Repositories\Interfaces\LanguageRepositoryInterface as LanguageRepository;


use App\Http\Requests\Source\StoreSourceRequest;
use App\Http\Requests\Source\UpdateSourceRequest;

use App\Models\Language;

class SourceController extends Controller
{
    protected $sourceService;
    protected $sourceRepository;
    protected $language;
    protected $languageRepository;


    public function __construct(
       SourceService $sourceService,
       SourceRepository $sourceRepository,
        LanguageRepository $languageRepository

    ){
        $this->sourceService = $sourceService;
        $this->sourceRepository = $sourceRepository;
        $this->languageRepository = $languageRepository;

        $this->middleware(function($request, $next){
            $locale = app()->getLocale(); // vn en cn
            $language = Language::where('canonical', $locale)->first();
            $this->language = $language->id;
            return $next($request);
           
        });
    }

    public function index(Request $request){
        // $this->authorize('modules', 'source.index');
        $sources = $this->sourceService->paginate($request);
      
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'Source'
        ];
        $config['seo'] = __('messages.source');
        $template = 'backend.source.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'sources'
        ));
    }

    public function create(){
        // $this->authorize('modules', 'source.create');
        $config = $this->config();
        $config['seo'] = __('messages.source');
        $config['method'] = 'create';
        $template = 'backend.source.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
        ));
    }

    public function store(StoresourceRequest $request){
        if($this->sourceService->create($request,$this->language)){
            return redirect()->route('source.index')->with('success','Thêm mới bản ghi thành công');
        }
        return redirect()->route('source.index')->with('error','Thêm mới bản ghi không thành công. Hãy thử lại');
    }
    private function menuItemAgrument(array $whereIn = []){
        $language  = $this->language;
         return [
            'condition' =>[],
            'flag' =>true,
            'relation' =>[
           'languages'=>function($query) use ($language){
                  $query->where('language_id' ,$language);
            }
            ],
            'orderBy' =>['id' ,'desc'],
            'param' =>[
                'whereIn' =>$whereIn,
                'whereInField' =>'id'
            ]
            ];
    }
    public function edit($id){
        // $this->authorize('modules', 'source.update');
        $source = $this->sourceRepository->findById($id);
        $modelClass = loadClass($source->model);
        $source->description = $source->description[$this->language];

        $sourceItem = convertArrayByKey($modelClass->findByCondition(
            ...array_values($this->menuItemAgrument($source->model_id))
   
           ),['id' ,'name.languages','image']);
        $config = $this->config();
        $config['seo'] = __('messages.source');
        $config['method'] = 'edit';
        $template = 'backend.source.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'source',
            'sourceItem'
        ));
    }

    public function update($id, UpdatesourceRequest $request){
        if($this->sourceService->update($id, $request,$this->language)){
            return redirect()->route('source.index')->with('success','Cập nhật bản ghi thành công');
        }
        return redirect()->route('source.index')->with('error','Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function delete($id){
        // $this->authorize('modules', 'source.destroy');
        $config['seo'] = __('messages.source');
        $source = $this->sourceRepository->findById($id);
        $template = 'backend.source.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'source',
            'config',
        ));
    }

    public function destroy($id){
        if($this->sourceService->destroy($id)){
            return redirect()->route('source.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('source.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
    }

  public function translate($languageId , $sourceId){
    
    $this->authorize('modules', 'source.translate');

    $source = $this->sourceRepository->findById($sourceId);
    $source->jsonDescription = $source->description;
    $source->description=$source->description[$this->language];
     
    $sourceTranslate = new \stdClass;
    $sourceTranslate->description = ($source->jsonDescription[$languageId]) ?? '';
  

    $translate = $this->languageRepository->findById($languageId);
       


        $config = $this->config();
        $config['seo'] = __('messages.source');
        $config['method'] = 'create';
        $template = 'backend.source.translate';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'source',
            'translate',
            'sourceTranslate'
        ));
    }
    public function saveTranslate(Request $request){
        if($this->sourceService->saveTranslate($request,$this->language)){
            return redirect()->route('source.index')->with('success','Tạo bản dịch thành công');
        }
        return redirect()->route('source.index')->with('error','Tạo bản dịch không thành công. Hãy thử lại');
    }
    private function config(){
        return [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/plugins/ckfinder_2/ckfinder.js',
                'backend/library/finder.js',
                'backend/library/source.js',
                'backend/plugins/ckeditor/ckeditor.js',

                
            ]
        ];
    }

}
