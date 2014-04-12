<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Silex\Provider\MonologServiceProvider;

$app = new Silex\Application;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../logs/dev.log'
));

$app
    ->match('/', function () use ($app) {
        $app['monolog']->addInfo('Logging example in the status route');

        return 'Up and running';
    })
    ->method('GET|POST');

return $app;