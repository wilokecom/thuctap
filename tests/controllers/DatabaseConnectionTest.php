<?php

namespace WilokeTest\controllers;

use PHPUnit\Framework\TestCase;
use Wiloke\core\Database\Connection;

class DatabaseConnectionTest extends TestCase
{
    public function testConnection()
    {
        try {
            $aConnection = Connection::make([
                'host'     => '127.0.0.1',
                'username' => 'root',
                'password' => '',
                'database' => 'myapp_test1'
            ]);
            
            $this->assertTrue(true);
        } catch (\Exception $e) {
            $this->assertFalse(true);
        }
    }
}
