<?php

namespace Tutorial\Controller;

use Silex\Application;

class Status
{

    /**
     * Indicates application status
     */
    public function index(Application $app)
    {
        $app['monolog']->addInfo('Logging example in the status route');

        return 'Running with log';
    }

}