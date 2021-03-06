<?php

namespace XeroPHP\Application;

use XeroPHP\Application;

class PrivateApplication extends Application
{
    public function __construct($config)
    {
        //As we don't need to Authorize/RequestToken, it's populated here.
        $config['oauth']['token'] = $config['oauth']['consumer_key'];

        parent::__construct($config);
    }
}
