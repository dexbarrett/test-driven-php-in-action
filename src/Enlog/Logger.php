<?php
namespace Enlog;

use \Enlog\Handler\HandlerInterface;

class Logger
{    
    protected $handlers = array();

    public function registerHandler($name, HandlerInterface $handlers)
    {
        $this->handlers[$name] = $handlers;
    }

    public function getHandler($name)
    {
        return $this->handlers[$name];
    }

    public function log($message)
    {
        foreach($this->handlers as $handler)
        {
            $date = date('r');
            $handler->write($date, $message);
        }    
    }
}