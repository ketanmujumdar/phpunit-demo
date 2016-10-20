<?php

include_once('hello-world.php');

class helloWorldTest extends PHPUnit_Framework_TestCase {
    
    private $helloWorld ="";
    
    public function setup(){
        $this->helloWorld = new helloWorld();
    }

    public function testAdd(){
        
        
        
        $this->assertEquals($this->helloWorld->add(2,2), 4);
        $this->assertEquals($this->helloWorld->add(2,3), 5);
        $this->assertEquals($this->helloWorld->add(6,3), 9);
    }
    

    public function testFactorOf()
    {
        $this->assertEquals(array(), $this->helloWorld->factorOf(1));
        $this->assertEquals(array(2), $this->helloWorld->factorOf(2));
        $this->assertEquals(array(3), $this->helloWorld->factorOf(3));
        $this->assertEquals(array(2,2), $this->helloWorld->factorOf(4));
        $this->assertEquals(array(5), $this->helloWorld->factorOf(5));
        $this->assertEquals(array(2,3), $this->helloWorld->factorOf(6));
        $this->assertEquals(array(7), $this->helloWorld->factorOf(7));
        $this->assertEquals(array(2,2,2), $this->helloWorld->factorOf(8));
        $this->assertEquals(array(3,3), $this->helloWorld->factorOf(9));
        $this->assertEquals(array(3,3,5,5,7,11,13,13), $this->helloWorld->factorOf(3*3*5*5*7*11*13*13));
    }
}