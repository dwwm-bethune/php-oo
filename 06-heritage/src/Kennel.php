<?php

namespace M2i;

class Kennel
{
    public function keep(Animal $animal)
    {
        if (!$animal->isAllowedToKennel()) {
            return 'On ne peut pas garder '.$animal->getName();
        }

        return 'On va garder '.$animal->getName();
    }
}
