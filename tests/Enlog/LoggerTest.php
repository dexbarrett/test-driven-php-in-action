<?php

class LoggerTest extends PHPUnit_Framework_TestCase
{
    protected $logger;

    public function setUp()
    {
        $this->logger = new \Enlog\Logger();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('\Enlog\Logger', $this->logger);
    }     
}