<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\User;
use M2i\Mvc\View;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();

        return View::render('user/list', [
            'users' => $users,
            'name' => 'Fiorella',
        ]);
    }

    public function create()
    {
        $user = new User();
        $user->name = 'Fiorella';
        $user->email = 'fiorella@boxydev.com';
        $user->save();
    }

    public function show($id)
    {
        // @todo Ajouter une méthode statique find dans le modèle
        // Cela doit être une instance du modèle
        $user = User::find($id);

        if (! $user) {
            return $this->notFound();
        }

        // @todo renvoyer une vue pour afficher les détails de l'utilisateur
        // On pourrait accèder à la page en cliquant sur un utilisateur dans
        // la liste
        return View::render('user/show', [
            'user' => $user,
        ]);
    }
}
