<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$app = new Silex\Application;

$app
    ->match('/', function () {return 'Running';})
    ->method('GET');

return $app;