<?php
    spl_autoload_register();

    $text = new Text();
    $text->set('Hello world')->bold()->color('blue')->print();
    $text->set('Good bye world')->italic()->color('red')->print();
    $text->set('Thank you world')->strike()->print();
    echo $text->set('The world')->bold()->italic()->strike();

    // Lit le contenu du fichier JSON à l'initialisation. On pourra stocker les pays dans une propriété.
    $europa = new Continent('europa.json');
    // Affiche toutes les capitales avec leur pays
    $europa->getCapitals();
    // Affiche le pays d'une capitale
    echo $europa->getCountry('Paris');
    // Affiche la capitale d'un pays
    echo $europa->getCapital('France');
?>
