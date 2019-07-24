<?php

namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * @dataProvider providerSuma
     */
    public function testSuma($a, $b, $esperado)
    {
        $calc   = new \App\Util\Calculadora();
        $r      = $calc->sumar($a, $b);
        $this->assertEquals($esperado, $r);
    }
    
    public function providerSuma() {
        return [
            [1, 2, 3],
            [3, 3, 6],
            [2, 2, 5],
            [1, 7, 8],
        ];
    }
}
