<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 22/06/17
 * Time: 17:20
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase
{
    public function testEchoPhrase()
    {
        $skeleton = new Skeleton();
        $this->assertEquals('un test', $skeleton->echoPhrase('un test'), 'The phrase should be the same');
    }
}
