<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 22/06/17
 * Time: 17:52
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    /** @var  Math */
    protected $math;
    
    public function setUp()
    {
        $this->math = new Math();
    }

    public function testEmptyNumber()
    {
        $this->assertSame((float) 0, $this->math->getNumber());
    }

    public function testSumNumber()
    {
        $this->math->sum(2);
        $this->assertSame((float) 2, $this->math->getNumber());
    }

    public function testSubstractNumber()
    {
        $this->math->sum(2);
        $this->math->substract(1);
        $this->assertSame((float) 1, $this->math->getNumber());
    }

    public function testDivideNumber()
    {
        $this->math->sum(6);
        $this->math->divide(2);
        $this->assertSame((float) 3, $this->math->getNumber());
    }

    public function testMultiplyNumber()
    {
        $this->math->sum(5);
        $this->math->multiply(4);
        $this->assertSame((float) 20, $this->math->getNumber());
    }
}
