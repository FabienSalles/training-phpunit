<?php

namespace Training\PHPUnit;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class Math
{
    const SCALE = 10;

    public function sum(float $a, float $b)
    {
        return (float) bcadd((string) $a, (string) $b, self::SCALE);
    }

    public function substract(float $a, float $b)
    {
        return (float) bcsub((string) $a, (string) $b, self::SCALE);
    }

    public function divide(float $a, float $b)
    {
        return (float) bcdiv((string) $a, (string) $b, self::SCALE);
    }

    public function multiply(float $a, float $b)
    {
        return (float) bcmul((string) $a, (string) $b, self::SCALE);
    }
}
