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
        use Michelf\Markdown;

        require __DIR__.'/vendor/autoload.php';
        require '../03-bankaccount/BankAccount.php';
        require '../03-bankaccount/Transaction.php';

        $bankAccount = new BankAccount(123, 'Toto', 1000);
        $bankAccount->depositMoney(1000);
        $bankAccount->depositMoney(2000);

        // dump([1, 2, $bankAccount]);
        // var_dump([1, 2, $bankAccount]);

        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->filter(function ($value) {
            return $value % 2 === 0;
        })->map(function ($value) {
            return $value * 2;
        })->dump();

        $markdown = $_POST['markdown'] ?? null;
        $html = null;

        if (!empty($_POST)) {
            $html = Markdown::defaultTransform($markdown);
            dump($markdown, $html);
        }
    ?>

    <div class="max-w-4xl mx-auto mt-8">
        <form action="" method="post">
            <textarea name="markdown" class="w-full" rows="10"></textarea>
            <button class="bg-blue-500 px-3 py-2 rounded-lg text-white">Générer</button>
        </form>

        <?php if ($html) { ?>
            <div class="prose mt-8 mx-auto">
                <?= $html; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>