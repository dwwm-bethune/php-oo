<?php

require 'src/helpers.php';
autoload();

use Game\Character;

$character = null;

if (submit()) {
    $character = new Character(post('name'), post('class'), post('tribe'));

    if (post('random')) {
        $character->randomName();
    }

    if (! $character->hasErrors()) {
        // On ajoute le personnage dans la BDD
        $character->save();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO RPG</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Lato]">
    <div class="max-w-3xl mx-auto mt-8">
        <?php if ($character && !$character->hasErrors()) { ?>
        <div class="border p-8 rounded-lg mb-8 text-center">
            <h1 class="text-2xl">Salut <?= $character->name; ?></h1>
            <p>Tu es un <?= $character->getClass().' '.$character->getTribe(); ?>.</p>

            <img class="my-4 mx-auto rounded-full" src="<?= $character->image(); ?>" alt="<?= $character->name; ?>">

            <ul class="divide-y border mb-4 w-1/2 mx-auto rounded">
                <li class="py-2">Ta santé: <?= $character->health; ?></li>
                <li class="py-2">Ta force: <?= $character->strength; ?></li>
                <li class="py-2">Ton mana: <?= $character->mana; ?></li>
            </ul>

            <div class="text-center">
                <a href="index.php" class="bg-blue-500 hover:bg-blue-600 duration-300 text-white px-3 py-2 rounded inline-block">Je veux un autre personnage</a>
            </div>
        </div>
        <?php } ?>

        <div class="border p-8 rounded-lg">
            <h1 class="text-center text-2xl mb-6">POO RPG - Créer votre personnage</h1>

            <?php if ($character && $character->hasErrors()) { ?>
                <ul class="bg-red-300 text-red-900 mb-8 px-6 py-5 rounded-lg">
                    <?php foreach ($character->errors() as $error) { ?>
                        <li><?= $error; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <form action="" method="post" class="space-y-6">
                <div>
                    <input class="w-full rounded border-gray-300" type="text" name="name" placeholder="Votre nom..." value="<?= post('name'); ?>">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="random" id="random" class="border-gray-300" <?= post('random') ? 'checked' : ''; ?>>
                    <label for="random" class="ml-3">Générer un nom aléatoire</label>
                </div>

                <div>
                    <label for="tribe" class="block mb-1">Votre tribu ?</label>

                    <select name="tribe" id="tribe" class="w-full rounded border-gray-300">
                        <option disabled selected>Choisir</option>
                        <option value="human" <?= post('tribe') == 'human' ? 'selected' : ''; ?>>Humain</option>
                        <option value="dwarf" <?= post('tribe') == 'dwarf' ? 'selected' : ''; ?>>Nain</option>
                        <option value="elf" <?= post('tribe') == 'elf' ? 'selected' : ''; ?>>Elfe</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1">Votre classe ?</label>

                    <div class="flex justify-between">
                        <div class="flex justify-between">
                            <input type="radio" name="class" id="warrior" value="warrior" class="mt-2 mr-4" <?= post('class') == 'warrior' ? 'checked' : ''; ?>>
                            <label for="warrior">
                                Guerrier
                                <img src="img/warrior.jpg" alt="">
                            </label>
                        </div>

                        <div class="flex justify-between">
                            <input type="radio" name="class" id="magus" value="magus" class="mt-2 mr-4" <?= post('class') == 'magus' ? 'checked' : ''; ?>>
                            <label for="magus">
                                Mage
                                <img src="img/magus.jpg" alt="">
                            </label>
                        </div>

                        <div class="flex justify-between">
                            <input type="radio" name="class" id="hunter" value="hunter" class="mt-2 mr-4" <?= post('class') == 'hunter' ? 'checked' : ''; ?>>
                            <label for="hunter">
                                Chasseur
                                <img src="img/hunter.jpg" alt="">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 duration-300 text-white px-3 py-2 rounded">Créer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="max-w-5xl mx-auto mt-8">
        <div class="flex flex-wrap">
            <?php foreach (Character::all() as $character) { ?>
                <div class="w-1/2 lg:w-1/3">
                    <div class="border p-8 rounded-lg mb-8 text-center mx-4">
                        <h1 class="text-2xl">Salut <?= $character->name; ?></h1>
                        <p>Tu es un <?= $character->getClass().' '.$character->getTribe(); ?>.</p>

                        <img class="my-4 mx-auto rounded-full" src="<?= $character->image(); ?>" alt="<?= $character->name; ?>">

                        <ul class="divide-y border mb-4 mx-auto rounded">
                            <li class="py-2">Ta santé: <?= $character->health; ?></li>
                            <li class="py-2">Ta force: <?= $character->strength; ?></li>
                            <li class="py-2">Ton mana: <?= $character->mana; ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
