<?php

class Connection
{
    public static function make($aConfig)
    {
        $oMysqli = new mysqli(
            $aConfig['host'],
            $aConfig['username'],
            $aConfig['password'],
            $aConfig['database']
        );
        
        if ($oMysqli->connect_errno) {
            echo $oMysqli->connect_error;
            die;
        }
        
        return $oMysqli;
    }
}
