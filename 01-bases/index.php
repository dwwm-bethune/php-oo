<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <?php
        require 'Cat.php';

        $bianca = new Cat('Bianca');
        // $bianca->name = 'Bianca';
        $bianca->type = 'gouttière';
        $bianca->setFur('blanc')->setFur('blanc');
        $mina = new Cat('Mina');
        // $mina->name = 'Mina';

        var_dump($bianca, $mina);
    ?>

    <h1>Mon premier chat s'appelle <?= $bianca->name; ?> et il est <?= $bianca->getFur(); ?>.</h1>
    <p>Il peut faire <?= $bianca->cry(); ?>.</p>
    <p>Mais <?= $mina->name; ?> peut aussi faire <?= $mina->cry(); ?></p>

    <p><?= $bianca->playWith($mina); ?></p>
    <p><?= $mina->playWith($bianca); ?></p>

    <p><?= $bianca->isChiped() ? 'Bianca est pucée' : 'Bianca n\'est pas pucée'; ?></p>

    <h2 class="text-xl font-bold text-center">Exercice voiture</h2>

    <?php
        require 'Car.php';

        $alfa = new Car('Alfa Roméo', '147', 'grise');
        $bmw = new Car('BMW', 'Série 4 Gran Coupé', 'noire');
    ?>

    <p>Voiture 1 : <?= $alfa->details(); ?> est <?= $alfa->getColor(); ?></p>
    <p>Voiture 2 : <?= $bmw->details(); ?> est <?= $bmw->getColor(); ?></p>
    <p>La voiture 1 klaxonne : <?= $alfa->klaxon(); ?></p>
    <p>La voiture 2 roule : <?= $bmw->drive(); ?></p>

    <?php while ($bmw->hasFuel()) { ?>
        <p>La voiture 2 roule : <?= $bmw->drive(); ?></p>
    <?php } ?>

    <p>La voiture 2 roule : <?= $bmw->drive(); ?></p>
    <p>La voiture 2 roule : <?= $bmw->fill(10)->fill(10)->fill(10)->drive(); ?></p>
</body>
</html>
