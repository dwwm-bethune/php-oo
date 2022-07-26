<?php

use Symfony\Component\VarDumper\VarDumper;

require __DIR__.'/vendor/autoload.php';
require '../03-bankaccount/BankAccount.php';
require '../03-bankaccount/Transaction.php';

$bankAccount = new BankAccount(123, 'Toto', 1000);
$bankAccount->depositMoney(1000);
$bankAccount->depositMoney(2000);

dump([1, 2, $bankAccount]);
var_dump([1, 2, $bankAccount]);
