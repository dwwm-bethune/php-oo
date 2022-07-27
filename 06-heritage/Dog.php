<?php

class Dog extends Animal
{
    // On remplace la propriété loving
    protected $loving = true;

    public function __construct($name)
    {
        parent::__construct($name);
        // On remplace LA VALEUR de la propriété loving
        // Plus pratique si on doit faire un calcul
        $this->loving = true;
    }

    public function playWithBall()
    {
        return $this->name.' joue à la balle';
    }

    public function isAllowedToKennel()
    {
        return true;
    }
}
