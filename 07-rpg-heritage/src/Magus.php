<?php

namespace RolePlayingGame;

class Magus extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->mana *= 2;
    }

    public function castSpell(Character $target)
    {
        $this->pullLife($target, $this->mana * 3);

        $this->log($target, 'lance un sort à');

        return $this;
    }
}
