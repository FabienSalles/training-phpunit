<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 04/12/17
 * Time: 13:50
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class NumbersAPIClientTest extends TestCase
{
    const TRIVIA_NUMBER = 12345321;

    public function testTriviaAPI()
    {
        
        $results = [
            sprintf('%d is a boring number.', self::TRIVIA_NUMBER),
            sprintf('%d is an unremarkable number.', self::TRIVIA_NUMBER),
            sprintf('%d is an uninteresting number.', self::TRIVIA_NUMBER),
            sprintf('%d is a number for which we\'re missing a fact (submit one to numbersapi at google mail!).', self::TRIVIA_NUMBER),
        ];
        $client = new NumbersAPIClient();
        $this->assertContains($client->trivia(self::TRIVIA_NUMBER), $results);
    }
    
    public function testGetUrl()
    {
        $client = new NumbersAPIClient();
        $this->assertSame($client->getTriviaUrl(self::TRIVIA_NUMBER), sprintf('http://numbersapi.com/%d', self::TRIVIA_NUMBER));
    }

    public function testTriviaAPIWithMock()
    {
        $client = $this->createMock(NumbersAPIClient::class);
        $client
            ->expects($spy = $this->once())
            ->method('trivia')
            ->willReturn(sprintf('%d is a boring number.', self::TRIVIA_NUMBER));

        $client->trivia(self::TRIVIA_NUMBER);
    }
}
