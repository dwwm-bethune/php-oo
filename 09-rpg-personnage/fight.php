<?php

require 'src/helpers.php';
autoload();

use Game\Character;
use Game\Fight;

$attacker = Character::find($_GET['attacker'] ?? 0);
$target = Character::find($_GET['target'] ?? 0);

if (!$attacker || !$target) {
    echo 404;
    die();
}

// Simuler le combat (On pourrait créer une classe Fight à part pour gérer toute cette logique...)
$fight = new Fight($attacker, $target);
$winner = $fight->winner();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG - Combat</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Lato]">
    <div class="max-w-3xl mx-auto mt-8">
        <div class="flex flex-wrap">
            <div class="w-1/1 lg:w-1/2">
                <div class="border p-8 rounded-lg mb-8 text-center mx-4">
                    <h1 class="text-2xl">Salut <?= $attacker->name; ?></h1>
                    <p>Attaquant <?= $target->getClass().' '.$target->getTribe(); ?>.</p>

                    <img class="my-4 mx-auto rounded-full" src="<?= $attacker->image(); ?>" alt="<?= $attacker->name; ?>">

                    <ul class="divide-y border mb-4 mx-auto rounded">
                        <li class="py-2">Ta santé (avant le combat): <?= $fight->attackerHealth; ?></li>
                        <li class="py-2">Ta santé: <?= $attacker->health; ?></li>
                        <li class="py-2">Ta force: <?= $attacker->strength; ?></li>
                        <li class="py-2">Ton mana: <?= $attacker->mana; ?></li>
                    </ul>

                    <?php if ($winner === $attacker) { ?>
                        <p>A gagné le combat</p>
                    <?php } else { ?>
                        <p>A perdu le combat</p>
                    <?php } ?>
                </div>
            </div>
            <div class="w-1/1 lg:w-1/2">
                <div class="border p-8 rounded-lg mb-8 text-center mx-4">
                    <h1 class="text-2xl">Salut <?= $target->name; ?></h1>
                    <p><?php echo $target->getClass().' '.$target->getTribe(); ?> attaqué.</p>

                    <img class="my-4 mx-auto rounded-full" src="<?= $target->image(); ?>" alt="<?= $target->name; ?>">

                    <ul class="divide-y border mb-4 mx-auto rounded">
                        <li class="py-2">Ta santé (avant le combat): <?= $fight->targetHealth; ?></li>
                        <li class="py-2">Ta santé: <?= $target->health; ?></li>
                        <li class="py-2">Ta force: <?= $target->strength; ?></li>
                        <li class="py-2">Ton mana: <?= $target->mana; ?></li>
                    </ul>

                    <?php if ($winner === $target) { ?>
                        <p>A gagné le combat</p>
                    <?php } else { ?>
                        <p>A perdu le combat</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
