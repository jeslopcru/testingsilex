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

    public function testCalculatorIndexOk()
    {
        $client = $this->createClient();
        $client->request('GET', '/calculator/add/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            'class Calculator:Running IndexAction',
            $client->getResponse()->getContent()
        );
    }

    public function testcalculatorAddOk()
    {
        $client = $this->createClient();
        $client->request('GET', '/calculator/add/2/3');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals("5", $client->getResponse()->getContent());

    }


}
 