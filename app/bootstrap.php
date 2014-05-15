<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Silex\Provider\MonologServiceProvider;

$app = new Silex\Application;

$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../logs/dev.log'
));

$app
    ->match('/calculator/add/{a}/{b}', 'Tutorial\Controller\Calculator::executeAdd')
    ->method('GET|POST');
$app
    ->match('/calculator/add/', 'Tutorial\Controller\Calculator::executeIndex')
    ->method('GET|POST');
$app
    ->match('/', 'Tutorial\Controller\Status::index')
    ->method('GET|POST');


return $app;
