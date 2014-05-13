<?php

namespace TutorialTest;

use Silex\WebTestCase;

/**
 * Basic test class to check the application status route
 */
class BasicTest extends WebTestCase
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
    public function testStatusRoute()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            'Running with log',
            $client->getResponse()->getContent()
        );
    }

}