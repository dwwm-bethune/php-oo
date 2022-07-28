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
    public const CLASSES = [
        'warrior' => 'Guerrier',
        'magus' => 'Mage',
        'hunter' => 'Chasseur',
    ];
    public const TRIBES = [
        'human' => 'Humain',
        'dwarf' => 'Nain',
        'elf' => 'Elfe',
    ];

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

    /**
     * Permet de générer un nom aléatoire au personnage.
     */
    public function randomName()
    {
        $names = ['cloud', 'tifa', 'aeris', 'sephiroth', 'barret', 'fiorella', 'auron', 'tidus', 'yuna', 'lulu', 'seymour', 'rikku', 'wakka', 'kimahri'];

        $this->name = ucfirst($names[array_rand($names)]);

        return $this;
    }

    /**
     * Permet de remplir un tableau avec les erreurs potentielles.
     */
    public function errors()
    {
        $errors = [];

        if (empty($this->name)) {
            $errors[] = 'Veuillez choisir un nom ou en générer un aléatoire.';
        }

        if (empty($this->tribe)) {
            $errors[] = 'Veuillez choisir une tribu.';
        } else if (! in_array($this->tribe, array_keys(self::TRIBES))) {
            $errors[] = 'Veuillez choisir une tribu valide: '.implode(', ', self::TRIBES).'.';
        }

        if (empty($this->class)) {
            $errors[] = 'Veuillez choisir une classe.';
        } else if (! in_array($this->class, array_keys(self::CLASSES))) {
            $errors[] = 'Veuillez choisir une classe valide: '.implode(', ', self::CLASSES).'.';
        }

        return $errors;
    }

    /**
     * Permet de savoir s'il y a des erreurs ou non.
     */
    public function hasErrors()
    {
        return ! empty($this->errors());
    }
}
