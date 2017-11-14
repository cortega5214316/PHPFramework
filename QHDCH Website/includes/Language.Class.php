<?php
     //**** This is the QHDC Language Class Declaration
	 
require_once("config.php");

class Language
   {
         
         private $language;
         private $phrases;
							  
      public function __construct() 
        {
            $this->$language = 
            $this->load_phrases($this->lang_id());
        }

      public function lang_id() 
        {
              //determine page language
               $lang_id= isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
            
              //set the language cookie and update cookie expiration date
                if(!isset($_COOKIE['lang'])) 
                    {
                      $expiration_date=time()+3600*24*365;
                      setcookie('lang',$lang_id,$expiration_date,'/');
                    }
            
             return $lang_id;
        }

      public function change_lang($lang_id) 
         {
            $this->language = $lang_id;
             setcookie('lang',$lang_id,$expiration_date,'/');  
         }

				
	  
   }

?>