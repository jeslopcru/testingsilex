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

class Calculator {

    public function add(Application $app)
    {
        $text = 'class Calculator:Running ADD function';
        $app['monolog']->addInfo($text);

        return new Response($text, 200);
    }




} 