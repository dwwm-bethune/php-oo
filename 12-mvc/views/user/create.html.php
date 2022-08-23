<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto">
        <?php if ($success) { ?>
            <p class="text-green-500">L'utilisateur a été crée.</p>
        <?php } ?>

        <?php if (!empty($errors)) { ?>
            <div class="bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
                <?php foreach ($errors as $error) { ?>
                    <p><?= $error; ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <form action="" method="post">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <button>Ajouter</button>
        </form>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
