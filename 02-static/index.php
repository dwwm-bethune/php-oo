<?php

require 'Dog.php';

$dogA = new Dog('Medor');
$dogB = new Dog('Brutus');

var_dump($dogA, $dogB);
var_dump(Dog::$count);
echo Dog::howMany();

echo Dog::superDog()->name;
echo Dog::superDog()->cry();
echo Dog::howMany();

echo 'Un chien a '.Dog::PAWS.' pattes.';
