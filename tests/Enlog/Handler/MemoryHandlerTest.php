<?php
use \Enlog\Handler\MemoryHandler;

class MemoryHandlerTest extends PHPUnit_Framework_TestCase
{
    protected $handler;

    public function setUp()
    {
        $this->handler = new MemoryHandler();
    }

    public function testImplementsHandlerInterface()
    {
        $this->assertInstanceOf('\Enlog\Handler\HandlerInterface', $this->handler);
    }

    public function testWriteToInternal()
    {
        $this->handler->write('Fri, 26 Jul 2013 09:09:11 +0000', 'Hello World!');
        $this->assertInternalType('array', $this->handler->getEntries());
        $this->assertCount(1, $this->handler->getEntries());
        $this->assertEquals(array('[Fri, 26 Jul 2013 09:09:11 +0000] Hello World!'), $this->handler->getEntries());
    }    
}