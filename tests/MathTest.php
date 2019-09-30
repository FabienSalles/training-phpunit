<?php

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class MathTest extends TestCase
{
    public function testEmptyNumber(): void
    {
        $math = new Math();
        $this->assertSame((float) 0, $math->getNumber());
    }

    /**
     * @dataProvider sumProvider
     */
    public function testSumNumber(float $firstNum, float $secondNum, float $result): void
    {
        $math = new Math($firstNum);
        $math->sum($secondNum);
        $this->assertSame($result, $math->getNumber());
    }

    public function sumProvider()
    {
        return [
            [1, 2, 3],
            [2.50, 4.50, 7],
            [10.88, 20.12, 31]
        ];
    }

    public function testSubstractNumber(): void
    {
        $math = new Math(2);
        $math->substract(1);
        $this->assertSame((float) 1, $math->getNumber());
    }

    public function testDivideNumber(): void
    {
        $math = new Math(6);
        $math->divide(2);
        $this->assertSame((float) 3, $math->getNumber());
    }

    public function testMultiplyNumber(): void
    {
        $math = new Math(5);
        $math->multiply(4);
        $this->assertSame((float) 20, $math->getNumber());
    }

    public function testProductCartPriceWithFloatingPrecision(): void
    {
        $math = new Math(80.1);
        $math->sum(10.1);
        $math->sum(9.8);

        $this->assertSame((float) 100, $math->getNumber());
    }
}
