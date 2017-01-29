<?php
use PHPUnit\Framework\TestCase;

/**
 * @covers Calculator
 */

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->calculator = new Calculator;
    }

    public function testPlus(){
        $this->assertEquals($this->calculator->calculate(2, '+', 1), 3);
    }

    public function testMinus(){
        $this->assertEquals($this->calculator->calculate(2, '-', 1), 1);
    }

    public function testDivision(){
        $this->assertEquals($this->calculator->calculate(4, ':', 2), 2);
    }

    public function testMultiply(){
        $this->assertEquals($this->calculator->calculate(3, 'x', 2), 6);
    }

    public function testPower(){
        $this->assertEquals($this->calculator->calculate(3, '^', 3), 27);
    }
}
