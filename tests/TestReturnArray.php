<?php

class TestReturnArray extends \PHPUnit\Framework\TestCase
{
    public function testIsArray()
    {
        $oReturnArray = new ReturnArray();
        
        $this->assertIsArray($oReturnArray->response());
    }
}
