<?php

class BruteForce
{
    public function run($informations)
    {
        // 1ère étape: Parcourir le tableau
        foreach ($informations as $user) {
            // $email = explode(':', $user)[0];
            // $hash = explode(':', $user)[1];

            // 2ème étape: récupérer le mail et le mot de passe séparement
            [$email, $hash] = explode(':', $user); // Syntaxe déstructurée

            // 3ème étape: séparer le prénom et le nom du mail (3 premières lettres)
            [$firstname, $lastname] = explode('.', strstr($email, '@', true));

            // 4ème étape: Générer tous les mots de passe possibles pour un utilisateur
            for ($i = 10; $i <= 99; $i++) {
                for ($j = 65; $j < 91; $j++) {
                    $password = $firstname.strtoupper(substr($lastname, 0, 3)).'@'.$i.chr($j);

                    // 5ème étape: Générer un sha256 de tous les mots de passes et les comparer à chaque hash
                    if (hash('sha256', $password) === $hash) {
                        $hacked = $email.' a oublié de changer son mot de passe par défaut => '.$password;
                        echo $hacked;
                        break 2;
                    }
                }
            }
        }
    }
}
