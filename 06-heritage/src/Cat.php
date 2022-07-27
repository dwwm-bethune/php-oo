<?php

namespace M2i;

class Cat extends Animal
{
    private $fur;

    public function __construct($name, $fur)
    {
        parent::__construct($name);
        $this->fur = $fur;
    }

    public function climbsOnRoof()
    {
        return $this->name.' grimpe sur le toit';
    }

    public function move()
    {
        return parent::move().' silencieusement';
    }

    public function isAllowedToKennel()
    {
        return false;
    }
}
