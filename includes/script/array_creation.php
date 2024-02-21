<?php 

$alphabet = 'a b c d e f g h i j k l m n o p q r s t u v w x y z';
$uc_alphabet = ucwords($alphabet);
$uc_alphabet = explode(' ', $uc_alphabet);
$alphabet = explode(' ', $alphabet);

$number = '0 1 2 3 4 5 6 7 8 9';
$number = explode(' ', $number);

$signs = '! $ % & @';
$signs = explode(' ', $signs);

$array_characters = array_merge($alphabet, $uc_alphabet, $number, $signs);