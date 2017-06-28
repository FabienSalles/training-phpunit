<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 28/06/17
 * Time: 17:38
 */

namespace Training\PHPUnit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DiffbotTest extends TestCase
{
    public function invalidTokens()
    {
        return [
            'empty'        => [ '' ],
            'a'            => [ 'a' ],
            'ab'           => [ 'ab' ],
            'abc'          => [ 'abc' ],
            'digit'        => [ 1 ],
            'double-digit' => [ 12 ],
            'triple-digit' => [ 123 ],
            'bool'         => [ true ],
            'array'        => [ ['token'] ],
        ];
    }

    public function validTokens()
    {
        return [
            'token'      => [ 'token' ],
            'short-hash' => [ '123456789' ],
            'full-hash'  => [ 'akrwejhtn983z420qrzc8397r4' ],
        ];
    }

    /**
     * @dataProvider invalidTokens
     * @expectedException InvalidArgumentException
     */
    public function testSetTokenRaisesExceptionOnInvalidToken($token)
    {
        Diffbot::setToken($token);
    }

    /**
     * @dataProvider validTokens
     */
    public function testSetTokenSucceedsOnValidToken($token)
    {
        Diffbot::setToken($token);
        $bot = new Diffbot();
        $this->assertInstanceOf(Diffbot::class, $bot);
    }
}
