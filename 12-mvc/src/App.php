<?php

namespace M2i\Mvc;

class App extends \AltoRouter
{
    public function run()
    {
        // Renvoie la route actuelle
        $match = $this->match();

        if (is_array($match)) {
            [$controller, $method] = explode('@', $match['target']);
            $controller = 'M2i\\Mvc\\Controller\\'.$controller;
            $call = new $controller(); // $call = new M2i\Mvc\Controller\UserController()
            // fn(...[1, 2, 3]) devient fn(1, 2, 3)
            $call->$method(...$match['params']); // $call->list();
        } else {
            echo '404';
        }
    }
}
