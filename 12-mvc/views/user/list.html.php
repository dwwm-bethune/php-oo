<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto">
        <?php foreach ($users as $user) : ?>
            <h2>
                <a href="<?= BASE_URL; ?>/user/<?= $user->id; ?>">
                    <?= $user->name; ?>
                </a>
            </h2>
        <?php endforeach; ?>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
