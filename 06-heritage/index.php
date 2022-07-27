<?php

require __DIR__.'/../05-composer/vendor/autoload.php';
require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'Kennel.php';

$cat = new Cat('Bianca', 'blanc');
dump($cat);
echo $cat->move();
echo $cat->climbsOnRoof();
dump($cat instanceof Cat);
dump($cat instanceof Animal);

$dog = new Dog('Milou');
echo $dog->playWithBall();
dump($dog);

$kennel = new Kennel();
echo $kennel->keep($dog);
// echo (new Kennel())->keep($cat);

// $bird = new Animal('Bird');
// dump($bird);
