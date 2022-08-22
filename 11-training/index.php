<?php
    spl_autoload_register();

    $text = new Text();
    $text->set('Hello world')->bold()->color('blue')->print();
    $text->set('Good bye world')->italic()->color('red')->print();
    $text->set('Thank you world')->strike()->print();
    echo $text->set('The world')->bold()->italic()->strike();
?>
