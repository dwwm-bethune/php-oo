<?php

namespace RolePlayingGame;

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->strenght *= 2;
    }

    public function attack(Character $target)
    {
        $this->pullLife($target, $this->strenght * 2);

        $this->log($target, 'attaque');

        return $this;
    }
}
