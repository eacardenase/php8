<?php

// // somewhat like an associative array, but objects are allowed to be keys
//$obj = new stdClass();
//$store = new WeakMap();

//$store[$obj] = 'foobar';

//var_dump($store);

// // garbage collected
//unset($obj);

//var_dump($store);

interface Event {}

class SomeEvent implements Event {}
class AnotherEvent implements Event {}

class Dispatcher
{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispatch(Event $event): void
    {
        $this->incrementDispatches($event);
    }

    private function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;

        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();

$event = new SomeEvent();
$dispatcher->dispatch($event);
$dispatcher->dispatch($event);

$anotherEvent = new AnotherEvent();
$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);