<?php

class Car
{
    public $brand;
    public $model;
    private $color;
    private $wheels = 4;
    private $fuel = 50;

    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->paint($color);
    }

    /**
     * Permet de peindre la voiture.
     */
    public function paint($color)
    {
        if (!in_array($color, $colors = ['rouge', 'bleu', 'grise', 'noire'])) {
            throw new Exception("La couleur n'existe pas. Liste: ".implode(', ', $colors));
        }

        $this->color = $color;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * Permet d'afficher les détails de la voiture
     */
    public function details()
    {
        return $this->brand.' '.$this->model.' avec '.$this->wheels.' roues';
    }

    /**
     * Permet de klaxonner.
     */
    public function klaxon()
    {
        return 'pouet pouet';
    }

    /**
     * Permet de rouler.
     */
    public function drive()
    {
        $this->fuel -= 2;

        if ($this->fuel <= 0) { // Si on tombe en dessous de 0, c'est qu'il n'y avait moins de 2L.
            $this->fuel = 0;
            return $this->model.' ne roule plus';
        }

        return $this->model.' roule ('.$this->fuel.'L)';
    }

    /**
     * Permet de vérifier si on a de l'essence.
     */
    public function hasFuel()
    {
        return $this->fuel > 0;
    }

    /**
     * Permet de remplir le réservoir.
     */
    public function fill($fuel)
    {
        $this->fuel += $fuel;

        if ($this->fuel >= 50) {
            $this->fuel = 50; // ça fait "clac"
        }

        return $this;
    }

    /**
     * Permet de faire le plein.
     */
    public function fillUp()
    {
        $this->fill(50);

        return $this;
    }
}
