<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\User;
use M2i\Mvc\View;

class UserController
{
    public function list()
    {
        $user = new User();
        $user->name = 'Fiorella';
        $user->email = 'fiorella@boxydev.com';
        // $user->save();

        $users = User::all();

        return View::render('user/list', [
            'users' => $users,
            'name' => 'Fiorella',
        ]);
    }
}
