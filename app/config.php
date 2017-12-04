<?php

use function DI\object;
use function DI\get;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Training\PHPUnit\NumbersAPIClient;
use Training\PHPUnit\NumbersAPIInterface;

return [
    'numbers_api.url' => 'http://numbersapi.com',
    StreamHandler::class => object()
        ->constructor(__DIR__ . '/console.log', Logger::DEBUG),

    Logger::class => object()
        ->constructor('console')
        ->methodParameter('pushHandler', 'handler', get(StreamHandler::class)),

    LoggerInterface::class => get(Logger::class),

    NumbersAPIClient::class => object()
        ->constructor(get('numbers_api.url')),

    NumbersAPIInterface::class => get(NumbersAPIClient::class),

];