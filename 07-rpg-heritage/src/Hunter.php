<?php

namespace RolePlayingGame;

class Hunter extends Character
{
    public function rangedAttack(Character $target)
    {
        $this->pullLife($target, $this->strength * 3);

        $this->log($target, 'attaque à distance');

        return $this;
    }
}
