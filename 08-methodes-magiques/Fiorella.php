<?php

class Fiorella
{
    public $test;

    public function __invoke($message)
    {
        return $message;
    }

    public function __get($property)
    {
        return $property;
    }

    public function __set($property, $value)
    {
        $this->test = $value;
        return $property;
    }
}
