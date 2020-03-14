<?php
namespace Wiloke\controllers;

use Wiloke\core\App;

class PagesController
{
    public function home()
    {
        $aUsers = App::get('query')->selectAll('users');
        
        view("home", [
            'aUsers' => $aUsers
        ]);
    }
    
    public function contact()
    {
//        view("contact");
    }
    
    public function login()
    {
   
    }
    
    public function register()
    {
//        view("register");
    }
}


//$oInstance = new PagesController();
//$oInstance->home();
