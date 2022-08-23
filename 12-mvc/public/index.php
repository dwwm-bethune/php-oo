<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

$app = new App();
// Dossier du projet à changer peut être...
$app->setBasePath('/php-oo/12-mvc/public');

$app->addRoutes([
    ['GET', '/user', 'UserController@list'],
    ['GET', '/user/create', 'UserController@create'],
    ['GET', '/user/[:id]', 'UserController@show'],
]);

$app->run();
