<?php

require_once __DIR__ . '/calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSoma()
    {
        $this->assertEquals(4, soma(2,2));
    }

    public function testSubtracao()
    {
        $this->assertEquals(2, subtracao(4,2));
    }

    public function testMultiplicacao()
    {
        $this->assertEquals(6, multiplicacao(2,3));
    }

    public function testDivisao()
    {
        $this->assertEquals(2, divisao(4,2));
    }

    public function testNumeroNegativo()
    {
        $this->assertEquals(-2, soma(-1,-1));
    }
}