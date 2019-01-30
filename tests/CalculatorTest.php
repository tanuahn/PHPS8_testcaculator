<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculate()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operand = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operand);
        $this->assertEquals($expected, $result);
    }



}