<?php

namespace M2i;

// La classe animal ne peut pas être
// instanciée directement
abstract class Animal
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

    public function getName()
    {
        return $this->name;
    }

    abstract public function isAllowedToKennel();
}
