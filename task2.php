<?php

class MethodTest
{
    private $data = [];

    public function __call($method, $arguments)
    {
        try {
            if ($this->data[$method] = $arguments) {
                return $this->data[$method];
            }elseif ($this->data[$method] = $arguments) {
                $this->data[$method] = $arguments;
            }
        } catch (Exception $e) {
           echo 'Caught exception: ', $e->getMessage(), "\n";
            }
    }
}

$obj = new MethodTest;
$obj->setFirstName('Some random string');

