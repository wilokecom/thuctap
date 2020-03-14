<?php
namespace WilokeTest\controllers;

use PHPUnit\Framework\TestCase;
use Wiloke\controllers\ResponseValue;

class ReturnArrayTest extends TestCase
{
    public function testResponseArray()
    {
        $oReturnArray = new ResponseValue();
        $this->assertIsArray($oReturnArray->returnArray());
    }
}
