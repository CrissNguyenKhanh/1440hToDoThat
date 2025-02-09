<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SystemRepositoryInterface  as SystemRepository;

use Auth;
use App\Models\Language;
use App\Models\System;


class FrontendController extends Controller
{


  protected $language;
  protected $system;
  protected $systemRepository;
    public function __construct(
        // SystemRepository $systemRepository
    ){
        $this->setLanguage();
         $this->setSystem();
               
       
   


    }
   public function setLanguage(){
  
          $locale = app()->getLocale();
            
            $language = Language::where('canonical', $locale)->first();
            if ($language) {
                $this->language = $language->id;
            } else {
                $this->language = 20; 
            }
       
    
   }
   public function setSystem(){

    $this->system = convert_array(System::where('language_id' , $this->language)->get(),'keyword' ,'content');

   }
  
}

