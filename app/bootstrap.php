<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Silex\Provider\MonologServiceProvider;

$app = new Silex\Application;

$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../logs/dev.log'
));

$app
    ->match('/', 'Tutorial\Controller\Status::index')
    ->method('GET|POST');


return $app;
