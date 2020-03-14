<?php
namespace Wiloke\core\Database;

class Connection
{
    /**
     * @param $aConfig
     *
     * @return \mysqli
     * @throws \Exception
     */
    public static function make($aConfig)
    {
        $oMysqli = new \mysqli(
            $aConfig['host'],
            $aConfig['username'],
            $aConfig['password'],
            $aConfig['database']
        );
        
        if ($oMysqli->connect_errno) {
            throw new \Exception($oMysqli->connect_error);
        }
        
        return $oMysqli;
    }
}
