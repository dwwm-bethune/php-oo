<?php

class Animal
{
    protected $name;
    protected $loving = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        return $this->name.' se déplace';
    }
}
