<?php

use Training\PHPUnit\NumbersAPIClient;

$container = require __DIR__ . '/bootstrap.php';

$content = $container->get(NumbersAPIClient::class)->trivia(1234565432);
echo $content;