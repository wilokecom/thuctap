<?php
use Wiloke\core\App;

class UserController
{
    public function register()
    {
        view("register");
    }
    
    public function addUser()
    {
        App::get('query')->insert("users", $_POST);
        redirect("/");
    }
}
