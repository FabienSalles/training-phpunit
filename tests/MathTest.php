<?php

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class MathTest extends TestCase
{
    /** @var  Math */
    protected $math;

    public function setUp(): void
    {
        $this->math = new Math();
    }

    public function testEmptyNumber(): void
    {
        $this->assertSame((float) 0, $this->math->getNumber());
    }

    /**
     * @dataProvider sumProvider
     */
    public function testSumNumber(float $firstNum, float $secondNum, float $result): void
    {
        $this->math->sum($firstNum);
        $this->math->sum($secondNum);
        $this->assertSame($result, $this->math->getNumber());
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
        $this->math->sum(2);
        $this->math->substract(1);
        $this->assertSame((float) 1, $this->math->getNumber());
    }

    public function testDivideNumber(): void
    {
        $this->math->sum(6);
        $this->math->divide(2);
        $this->assertSame((float) 3, $this->math->getNumber());
    }

    public function testMultiplyNumber(): void
    {
        $this->math->sum(5);
        $this->math->multiply(4);
        $this->assertSame((float) 20, $this->math->getNumber());
    }
}
