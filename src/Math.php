<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 22/06/17
 * Time: 17:48
 */

namespace Training\PHPUnit;

class Math
{
    /** @var float */
    protected $number;

    /**
     * Math constructor.
     **/
    public function __construct(float $number = 0.0)
    {
        $this->number = $number;
    }

    public function sum(float $number)
    {
        $this->number += $number;

        return $this;
    }

    public function substract(float $number)
    {
        $this->number -= $number;

        return $this;
    }

    public function getNumber() : float
    {
        return $this->number;
    }

    public function divide(float $number)
    {
        $this->number /= $number;

        return $this;
    }

    public function multiply(float $number)
    {
        $this->number *= $number;
    }
}

