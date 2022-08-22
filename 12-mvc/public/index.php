<?php

require __DIR__.'/../vendor/autoload.php';

use M2i\Mvc\Controller\UserController;

$controller = new UserController();
echo $controller->list();
