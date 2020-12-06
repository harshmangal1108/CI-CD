<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnEqual()
    {
        require 'functions.php';
    
        $this->assertEquals(4,add(2,2));
        $this->assertEquals(9,add(7,2));

    }
    public function testAddReturnNotEqual()
    {
        $this->assertNotEquals(5,add(2,2));
    }
}
