<?php

namespace Game;

class Character
{
    public $name;
    public $class;
    public $tribe;
    public $health = 100;
    public $strength = 10;
    public $mana = 10;

    public function __construct($name = null, $class = null, $tribe = null)
    {
        $this->name = $name ?? $this->name;
        $this->class = $class ?? $this->class;
        $this->tribe = $tribe ?? $this->tribe;

        $this->init();
    }

    /**
     * Initialise les statistiques du personnage.
     */
    private function init()
    {
        if ($this->class == 'warrior') {
            $this->strength = 30;
        } else if ($this->class == 'magus') {
            $this->mana = 30;
        } else if ($this->class == 'hunter') {
            $this->strength = 20;
            $this->mana = 20;
        }
    }
}
