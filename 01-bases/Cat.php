<?php

class Cat
{
    // Propriétés de la classe
    public $name;
    public $type;
    private $fur;
    private $isChiped = false;

    public function __construct($name)
    {
        $this->chip();

        $this->name = $name;
    }

    /**
     * Permet de pucer le chat. (setter)
     */
    private function chip()
    {
        $this->isChiped = true;
    }

    /**
     * Permet de savoir si le chat est pucé. (getter)
     */
    public function isChiped()
    {
        return $this->isChiped;
    }

    // Méthodes de la classe
    public function cry()
    {
        return $this->name.': Miaou !';
    }

    public function playWith(Cat $cat)
    {
        return $this->name.' se bat avec '.$cat->name;
    }

    // Getter pour une propriété private
    public function getFur()
    {
        return ucfirst($this->fur);
    }

    // Setter pour une propriété private
    public function setFur($fur)
    {
        if ($fur !== 'blanc' && $fur !== 'noir') {
            throw new Exception('La couleur est invalide');
        }

        $this->fur = $fur;

        return $this;
    }
}
