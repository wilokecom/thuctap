<?php

namespace WilokeTest\validation;

use PHPUnit\Framework\TestCase;
use Wiloke\controllers\ResponseValue;

class ReturnTestBoolean extends TestCase
{
    public function testIsBoolean()
    {
        $oInit = new ResponseValue();
        
        $this->assertTrue($oInit->returnBoolean());
    }
}
