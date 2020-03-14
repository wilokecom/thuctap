<?php
namespace WilokeTest\controllers;

use PHPUnit\Framework\TestCase;
use Wiloke\controllers\ReturnArray;

class ReturnArrayTest extends TestCase
{
    public function testResponseArray()
    {
        $oReturnArray = new ReturnArray();
        $this->assertTrue($oReturnArray->response());
    }
}
