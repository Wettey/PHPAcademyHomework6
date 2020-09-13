<?php

class Something
{
    private $thing = [];
    private $otherThing = [];

    public function __set($name, $value)
    {
        if (property_exists('Something', 'thing')) {
            $this->thing[$name] = $value;
        }
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->thing)) {
            return null;
        }

        return $this->thing[$name];
    }
}

$obj = new Something();
$obj->newThing = 'This dude.';
echo $obj->newThing;