<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturn()
    {
        require 'functions.php';
    
        $this->assertEquals(4,add(2,2));
        $this->assertEquals(9,add(7,2));

    }

}