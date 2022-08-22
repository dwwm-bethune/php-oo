<?php

namespace Game;

class Fight
{
    public $attacker;
    public $target;
    public $attackerHealth;
    public $targetHealth;
    
    public function __construct($attacker, $target)
    {
        $this->attacker = $attacker;
        $this->target = $target;

        $this->attackerHealth = $this->attacker->health;
        $this->targetHealth = $this->target->health;

        $first = rand(0, 3) !== 0 ? [$this->attacker, $this->target] : [$this->target, $this->attacker];
        $first[0]->fight($first[1]);

        $second = rand(0, 1) ? [$this->attacker, $this->target] : [$this->target, $this->attacker];
        $second[0]->fight($second[1]);
    }

    /**
     * Détermine le gagnant du combat.
     */
    public function winner()
    {
        $winner = null;

        if ($this->attacker->health === 0) {
            $winner = $this->target;
        } else if ($this->target->health === 0) {
            $winner = $this->attacker;
        } else if ($this->attackerHealth - $this->attacker->health < $this->targetHealth - $this->target->health) {
            $winner = $this->attacker;
        } else {
            $winner = $this->target;
        }

        return $winner;
    }
}
