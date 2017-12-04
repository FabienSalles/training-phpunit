<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 04/12/17
 * Time: 12:10
 */

namespace Training\PHPUnit;

use Psr\Log\LoggerInterface;

class NumbersAPIClient implements NumbersAPIInterface
{
    private $baseUrl;
    /** @var  LoggerInterface */
    private $logger;

    public function __construct(string $baseUrl, LoggerInterface $logger)
    {
        $this->baseUrl = $baseUrl;
        $this->logger = $logger;
    }

    public function trivia(int $number): string
    {
        $content = file_get_contents($this->getTriviaUrl($number));
        $this->logger->notice($content);
        return $content;
    }

    public function math(int $number): string
    {
        return file_get_contents($this->getMathUrl($number));
    }

    public function date(int $month, int $day): string
    {
        return file_get_contents($this->getDateUrl($month, $day));
    }


    public function getTriviaUrl(int $number): string
    {
        return sprintf('%s/%d', $this->baseUrl, $number);
    }

    public function getMathUrl(int $number): string
    {
        return sprintf('%s/%d/%math', $this->baseUrl, $number);
    }

    public function getDateUrl(int $month, int $day): string
    {
        return sprintf('%s/%d/%d/date', $this->baseUrl, $month, $day);
    }
}
