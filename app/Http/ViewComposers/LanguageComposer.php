<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Interfaces\LanguageRepositoryInterface  as LanguageRepository;

class LanguageComposer
{
    protected $language;
    public function __construct(
        LanguageRepository $languageRepository
      ,$language
      ){
        $this->languageRepository = $languageRepository;
        $this->language = $language;
  
  
      }

    /**
     * Register services.
     */
    public function compose(View $view): void
    { 
       $languages = $this->languageRepository->findByCondition( ...$this->agrument());
         
      
        $view->with('languages',$languages);
    }
    private function agrument(){
        
        return [
            'condition' =>[
                config('apps.general.defaultPublish')
            ],
            'flag'=>true,
            'relation'=>[ ],
            'orderBy'=>['current','desc']
            ];
    }
    

    /**
     * Bootstrap services.
     */
  
}
