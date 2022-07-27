<?php

require 'Fiorella.php';

$fiorella = new Fiorella();

// Rendre un objet invokable
echo $fiorella('Salut');

echo $fiorella->daddy;

$fiorella->daddy = 'ok';
echo $fiorella->test;
