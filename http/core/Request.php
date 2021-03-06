<?php
namespace Wiloke\core;

class Request
{
    public static function uri()
    {
        return trim(str_replace(
            App::get('general')['baseUri'],
            '',
            
            parse_url(
                $_SERVER['REQUEST_URI'],
                PHP_URL_PATH
            )
        ),
            '/'
        );
    }
    
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
