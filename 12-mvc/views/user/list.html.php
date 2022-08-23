<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto">
        <?php foreach ($users as $user) : ?>
            <h2><?= $user->name; ?></h2>
        <?php endforeach; ?>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
