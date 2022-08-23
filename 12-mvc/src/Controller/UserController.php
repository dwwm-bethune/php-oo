<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\User;

class UserController
{
    public function list()
    {
        $user = new User();
        $user->name = 'Fiorella';
        $user->email = 'fiorella@boxydev.com';
        $user->save();

        dump(User::all());

        return 'vue';
    }
}
