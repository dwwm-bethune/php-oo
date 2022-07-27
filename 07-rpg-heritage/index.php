<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG Héritage</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <?php
        require __DIR__.'/../05-composer/vendor/autoload.php';

        spl_autoload_register(function ($class) {
            $class = str_replace('RolePlayingGame\\', '', $class);
            $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

            require 'src/'.$class.'.php';
        });

        use RolePlayingGame\Hunter;
        use RolePlayingGame\Items\Item;
        use RolePlayingGame\Magus;
        use RolePlayingGame\Warrior;

        $aragorn = new Warrior('Aragorn');
        $legolas = new Hunter('Legolas');
        $gandalf = new Magus('Gandalf');
        $jean = new Warrior('Jean');
        // dump($aragorn, $legolas, $gandalf);

        $aragorn->attack($legolas); // Enlève X points de vie en fonction de la force (Force x 2)
        $legolas->rangedAttack($gandalf); // Enlève X points de vie si le personnage est chasseur (Force x 3)
        $gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana (Mana x 3)
        // dump($aragorn, $legolas, $gandalf);

        $legolas->attack($aragorn);
        $gandalf->attack($legolas)->attack($gandalf);
        $aragorn->attack($gandalf);
        $aragorn->attack($gandalf)->attack($legolas)->attack($legolas);
        $aragorn->attack($jean)->attack($jean)->attack($jean);

        $potion = new Item('Potion');
        $sword = new Item('Sword');

        $aragorn->pick($potion);
        $legolas->pick($sword);

        dump($aragorn, $legolas, $gandalf);
    ?>
</body>
</html>
