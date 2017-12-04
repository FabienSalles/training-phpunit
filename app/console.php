<?php

use Training\PHPUnit\NumbersAPIInterface;

$container = require __DIR__ . '/bootstrap.php';

$content = $container->get(NumbersAPIInterface::class)->trivia(1234565432);
echo $content;