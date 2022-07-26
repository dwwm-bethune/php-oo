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
        require 'BankAccount.php';

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
            $bankAccount01->depositMoney(-2000);
            $bankAccount01->withdrawMoney(1000);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <p>Montant du compte: <?= $bankAccount01->getBalance(); // Renvoie 0 ?></p>
</body>
</html>
