<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 04/12/17
 * Time: 15:10
 */

namespace Training\PHPUnit;

interface NumbersAPIInterface
{
    public function trivia(int $number): string;
    public function math(int $number): string;
    public function date(int $month, int $day): string;
    public function getTriviaUrl(int $number): string;
    public function getMathUrl(int $number): string;
    public function getDateUrl(int $month, int $day): string;
}
