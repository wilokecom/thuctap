<?php

class JsonEncodeTest extends \PHPUnit\Framework\TestCase
{
    public function testEncode()
    {
        $string = [
            "block" => [
                "test" => "\/dadad/dadad\/''"
            ]
        ];
        
        $encode = addslashes(json_encode($string, JSON_UNESCAPED_SLASHES));
        echo $encode;die;
//        var_export(json_encode(["dadad\\"]));die;
        $this->assertIsArray(json_decode($encode, true));
    }
}
