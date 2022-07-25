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
</body>
</html>
