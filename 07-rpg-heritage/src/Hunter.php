<?php

namespace RolePlayingGame;

class Hunter extends Character
{
    public function rangedAttack(Character $target)
    {
        $this->pullLife($target, $this->strenght * 3);

        $this->log($target, 'attaque à distance');

        return $this;
    }
}
