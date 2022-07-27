<?php

namespace RolePlayingGame;

use RolePlayingGame\Items\Item;

abstract class Character
{
    // Le nom est défini uniquement dans la classe mère
    private $name;
    // La vie est privée, on ne peut l'enlever que via un setter
    private $life = 100;
    // On peut modifier la force et le mana dans les enfants
    protected $strength = 10;
    protected $mana = 10;
    private $items = [];
    private $level = 1;
    private $experience = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack(Character $target)
    {
        // Enlève la vie
        $this->pullLife($target, $this->strength);

        // Log l'action
        $this->log($target, 'attaque');

        return $this;
    }

    /**
     * Seule la classe mère et les enfants peuvent enlever de la vie.
     */
    protected function pullLife(Character $target, $life)
    {
        // Vérifie qu'un perso ne pas s'attaquer lui même
        // Vérifie aussi que si le personnage est déjà mort, on ne fait rien.
        if ($this == $target || $target->life <= 0) {
            return;
        }

        $target->life -= $life + $this->level;

        if ($target->life < 0) {
            $target->life = 0;
            $this->gainExperience();
        }
    }

    /**
     * Permet de gagner de l'expérience.
     */
    protected function gainExperience()
    {
        if (++$this->experience % 3 == 0) {
            $this->level++;
        }
    }

    /**
     * Permet de faire un log des actions
     */
    protected function log(Character $target, $action)
    {
        if ($this == $target) {
            echo $this->name.' ne peut pas s\'attaquer lui même. <br />';

            return;
        }

        if ($target->life <= 0) {
            echo $target->name.' est mort. <br />';

            return;
        }

        echo $this->name.' '.$action.' '.$target->name.'. <br />';
    }

    public function pick(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }
}
