<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <h2 class="text-xl font-bold">Cours static</h2>
    <?php
        require 'Dog.php';

        $dogA = new Dog('Medor');
        $dogB = new Dog('Brutus');

        var_dump($dogA, $dogB);
        var_dump(Dog::$count);
    ?>
    <p><?= Dog::howMany(); ?></p>
    <p><?= Dog::superDog()->name; ?></p>
    <p><?= Dog::superDog()->cry(); ?></p>
    <p><?= Dog::howMany(); ?></p>
    <p>Un chien a <?= Dog::PAWS; ?> pattes.</p>

    <h2 class="text-xl font-bold">Exercice static</h2>
    <?php
        require 'DB.php';

        var_dump(DB::select('SELECT * FROM movie'));
        DB::select('SELECT * FROM movie WHERE id = :id', ['id' => 1]);

        DB::insert('INSERT INTO movie (title, description, duration, released_at) VALUES (?, ?, ?, ?)', [
            'M2I Movie',
            'Un film de gangsters',
            201,
            '1991-11-18 11:56:00',
        ]);
    ?>
</body>
</html>