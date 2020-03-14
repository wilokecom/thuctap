<?php

class App
{
    private static $aRegistry;
    
    /**
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        self::$aRegistry[$key] = $value;
    }
    
    /**
     * @param $key
     *
     * @return bool
     */
    public static function get($key)
    {
        return array_key_exists($key, self::$aRegistry) ? self::$aRegistry[$key] : false;
    }
}
