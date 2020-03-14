<?php

class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        
        return $stack;
    }
    
    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        
        $this->assertIsArray($stack);
        
        return $stack;
    }
}
