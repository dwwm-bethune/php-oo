<?php

session_start();

function autoload() {
    require 'vendor/autoload.php';

    spl_autoload_register(function ($class) {
        $class = str_replace(['Game\\', '\\'], ['', DIRECTORY_SEPARATOR], $class);

        if (file_exists('src/'.$class.'.php')) {
            require 'src/'.$class.'.php';
        }
    });
}

function submit() {
    return ! empty($_POST);
}

function post($field) {
    return $_POST[$field] ?? null;
}
