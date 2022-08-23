<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

// Dossier du projet à changer peut être...
define('BASE_URL', '/php-oo/12-mvc/public');

$app = new App();
$app->setBasePath(BASE_URL);

$app->addRoutes([
    // @todo Créer une page d'accueil: Il faut un controller (nouvelle classe), une méthode et une vue.
    // Poser une navigation (views/partials/header par exemple) qu'on peut réutiliser sur les autres pages
    // comme la liste utilisateur.
    ['GET', '/', 'HomeController@index'],
    ['GET', '/user', 'UserController@list'],
    ['GET|POST', '/user/create', 'UserController@create'],
    ['GET', '/user/[:id]', 'UserController@show'],
]);

$app->run();
