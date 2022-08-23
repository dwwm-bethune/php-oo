<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MVC</title>
</head>
<body>
    <?php foreach ($users as $user) : ?>
        <h2><?= $user->name; ?></h2>
    <?php endforeach; ?>
</body>
</html>
