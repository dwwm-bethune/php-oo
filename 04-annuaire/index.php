<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="container mx-auto">
    <?php
        require 'Book.php';
        require 'Contact.php';

        $book = new Book();
        $contact1 = new Contact('Mota', 'Matthieu', '0600000000', 'matthieu@boxydev.com');
        $contact2 = new Contact('Doe', 'John', '0600000000', 'john@boxydev.com');
    ?>

    <p>Notre annuaire contient <?= $book->count(); ?> contacts.</p>

    <?php
        $book->addContact($contact1)->addContact($contact2);
    ?>

    <p>Notre annuaire contient <?= $book->count(); ?> contacts.</p>

    <?= $book->display(); ?>
</body>
</html>
