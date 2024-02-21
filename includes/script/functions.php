<?php

// Creazione array caratteri
require_once __DIR__ . ' /array_creation.php';

function random_password ($length, $array){
    $password = [];

    for($i = 0; $i < $length; $i++ ){
        $password[] = $array[rand(0, count($array) - 1 )];
    };

    $password = implode($password);

    return $password;
};