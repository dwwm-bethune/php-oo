<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <?php
        require __DIR__.'/../05-composer/vendor/autoload.php';
        spl_autoload_register();

        $bankAccount00 = new BankAccount(123456, 'Fiorella');
        $bankAccount09 = new BankAccount(123456, 'Fiorella');
        $bankAccount01 = new BankAccount(123456, 'Matthieu'); // Matthieu a 0 sur son compte
    ?>
    <p>Identifiant du compte: <?= $bankAccount01->identifier; // Renvoie 0 ?></p>
    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 0 ?></p>
    <p>Dépôt de 1000 <?php $bankAccount01->depositMoney(1000); ?></p>
    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 1000 ?></p>
    <p>Retrait de 1000 <?php $bankAccount01->withdrawMoney(1000); ?></p>
    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 0 ?></p>

    <?php
        // On renvoie une erreur si le montant du compte tombe en dessous de 0
        try {
            $bankAccount01->depositMoney(20000);
            $bankAccount01->withdrawMoney(1000);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 0 ?></p>

    <?php
        $matthieu = new Owner('Matthieu');
        $marina = new Owner('Marina', 3000, $bankAccount01);
        // On peut lier les objets entre eux
        // Les objets sont mutables
        $marina->bankAccount->depositMoney(30000);
        // var_dump($marina->bankAccount);

        $bankAccount01->addOwner($matthieu);

        // Liste les propriétaires du compte
        var_dump($bankAccount01->getOwners());
        $matthieu->pay();
        $marina->pay();

        // Faire un virement
        $bankAccount02 = new BankAccount(123457, 'Test');
        try {
            $bankAccount01->wireTo($bankAccount02, 1000);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 0 ?></p>
    <p>Montant du compte: <?= $bankAccount02->getBalance(); // Renvoie 0 ?></p>

    <h2>Historique du compte 1</h2>
    <?= $bankAccount01->showHistory(); ?>

    <h2>Historique du compte 2</h2>
    <?= $bankAccount02->showHistory(); ?>

    <h2>Livret héritage</h2>
    <?php
        $savingAccount = new SavingAccount(1234, 'Fiorella', 5000);
        for ($i = 0; $i < 20; $i++) {
            $savingAccount->applyInterest(2);
        }
        dump($savingAccount->getBalance());
    ?>
</body>
</html>
