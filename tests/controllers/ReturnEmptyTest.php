<?php
namespace WilokeTest\controllers;

use PHPUnit\Framework\TestCase;
use Wiloke\controllers\ResponseValue;

class ReturnEmptyTest extends TestCase
{
    public function testResponseArray()
    {
        $oReturnArray = new ResponseValue();
        $this->assertEmpty($oReturnArray->returnEmpty());
    }
}
