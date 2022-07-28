<?php

require 'src/helpers.php';
autoload();

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
        <div class="border p-8 rounded-lg">
            <h1 class="text-center text-2xl mb-6">POO RPG - Créer votre personnage</h1>

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
</body>
</html>
