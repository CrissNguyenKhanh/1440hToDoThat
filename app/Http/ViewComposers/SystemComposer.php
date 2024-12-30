<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Interfaces\SystemRepositoryInterface  as SystemRepository;

class SystemComposer
{
    protected $language;
    public function __construct(
        SystemRepository $systemRepository
      ,$language
      ){
        $this->systemRepository = $systemRepository;
        $this->language = $language;
  
  
      }

    /**
     * Register services.
     */
    public function compose(View $view): void
    {
        $system =$this->systemRepository->findByCondition(
            [
               ['language_id' ,'=' ,$this->language]
            ],TRUE
           );
           $systemArray = convert_array($system,'keyword','content');
          
        
        $view->with('system',$systemArray);
    }

    /**
     * Bootstrap services.
     */
  
}
