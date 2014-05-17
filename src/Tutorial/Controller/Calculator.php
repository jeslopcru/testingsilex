<?php
/**
 * Created by PhpStorm.
 * User: mardurnar
 * Date: 13/05/14
 * Time: 22:34
 */

namespace Tutorial\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Tutorial\lib\CalculatorLib;

class Calculator {

    public function executeIndex(Application $app, Request $request)
    {
        $text = 'class Calculator:Running IndexAction';
        $app['monolog']->addInfo($text);

        return new Response($text, 200);
    }

    public function executeAdd(Application $app, Request $request)
    {
        $log = 'class Calculator:Running AddAction';
        $app['monolog']->addInfo($log);

        $a = $request->get('a');
        $b = $request->get('b');

        $calculator = new CalculatorLib();
        $text = $calculator->add($a, $b);

        return new Response($text, 200);
    }




} 