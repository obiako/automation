<?php

namespace Obiako\Automation;

use Redis;

class Automation extends Redis
{
    public $config=[];
    public function __construct($host, $port = 6379, $timeout = 0.0, $reserved = null, $retry_interval = 0, $read_timeout = 0.0)
    {

       $this->connect($host, $port , $timeout, $reserved , $retry_interval, $read_timeout);
    }
}