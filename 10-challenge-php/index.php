<?php

require __DIR__.'/../05-composer/vendor/autoload.php';
spl_autoload_register();

$informations = [
    'louis.besson@XXXXXXXX.com:fc95b9b3f4354a12cb2d480542281def82ace386bc755d36d9a435f06581f6d3',
    'sacha.roux@XXXXXXXX.com:4ef120f24c93d334335dc2748fa8e6c13dbacf94e641dba0240010005cd0e254',
    'rachid.bernard@XXXXXXXX.com:0e23472bfd796660101dc45b2524212408470281cc7a4c9c51a0e0c986c8499c',
    'emma.barbier@XXXXXXXX.com:804fff7d1e117c1259d8c84d97e15be319a3b05e96a584347af858907f456544',
    'jules.bonnet@XXXXXXXX.com:d78d108cc7a4c75ad3228f0bfd3b61f279b074afa748f9a7d977291a88758e07',
    'mila.lucas@XXXXXXXX.com:4df1db8da497e5cb998d16439d57ed63106020f64227731b257edcc3615878e6',
    'elena.schneider@XXXXXXXX.com:cfb86ab5a5ee3f5e19a7364e3218441706067a875479ce93451a0db5408fe61c',
    'paul.poulain@XXXXXXXX.com:b55afee0c123e02b8b4e0c3bf479e45dc7302dc554b9409023298eb192ea659c',
];

$bruteForce = new BruteForce();
$bruteForce->run($informations);
