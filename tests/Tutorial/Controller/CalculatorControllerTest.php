<?php

namespace CalculatorTest;

use Silex\WebTestCase;

class CalculatorTest extends WebTestCase
{

    public function createApplication()
    {
        $app = require __DIR__ . '/../../../app/bootstrap.php';
        $app['debug'] = true;

        return $app;
    }

    /**
     * Checking the status route
     */
    public function testRouteCalculatorAdd()
    {
        $client = $this->createClient();
        $client->request('GET', '/calculator/add');

        $this->assertTrue($client->getResponse()->isOk());
    }
}
 