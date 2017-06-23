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
}
