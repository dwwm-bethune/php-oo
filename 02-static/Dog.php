<?php

class Dog
{
    public $name;
    public static $count = 0;
    public $counter = 0;
    public static $dog;
    public const PAWS = 4;

    public function __construct($name)
    {
        $this->name = $name;
        // On accède aux propriétés statiques
        // avec :: (Pamayim Nekudotayim)
        // Opérateur de résolution de portée
        self::$count++;
        $this->counter++;
    }

    public static function howMany()
    {
        // Pas de $this dans une méthode statique
        return 'Nous avons '.self::$count.' chiens.';
    }

    public static function superDog()
    {
        // On instancie le chien de super man
        // 1 seule fois
        if (!self::$dog) {
            self::$dog = new Dog('Crypto');
        }

        return self::$dog;
    }

    public function cry()
    {
        return 'Woaf woaf';
    }
}
