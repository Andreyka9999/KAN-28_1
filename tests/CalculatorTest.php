<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

/*
    This is a simple test of calculator functionality using the PHPUnit framework. 
*/
class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        /* Test for adding two number. "asserEquals" is a buildin function in PHPUnit framework. 
           The $calculator variable calls methods from the Calculator class, such as, add(), substract(), multiply(), divide().
           The first number 5 in assertEquals(5,) is the expected value. 
           This is what you expect to get as a result of calling the add() method with arguments 2 and 3.
        */
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(-1, $calculator->add(2, -3));
    }

    // Test for substracting two numbers.
    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->substract(3, 2));
        $this->assertEquals(5, $calculator->substract(2, -3));
    }

    // Test for multiplying two numbers.
    public function testMultiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
        $this->assertEquals(-6, $calculator->multiply(2, -3));
    }

    // Test for dividing two numbers.
    public function testDivide()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->divide(6, 3));
        $this->assertEquals("Cannot divide by zero", $calculator->divide(6, 0));
    }
    
}