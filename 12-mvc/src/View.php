<?php

namespace M2i\Mvc;

class View
{
    public static function render($template, $data = null)
    {
        // Ici, on passe les données du contrôleur au template
        // On peut échapper les valeurs à ce moment là
        foreach ($data as $variable => $value) {
            $$variable = $value;
        }

        $view = __DIR__.'/../views/'.$template.'.html.php';

        // if (!file_exists($view)) {
        //     throw new Exception("Le template $template n'existe pas.");
        // }

        include $view;
    }
}
