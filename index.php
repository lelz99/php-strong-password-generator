<?php 

$password_length = $_GET['password-length'] ?? '';

$alphabet = 'a b c d e f g h i j k l m n o p q r s t u v w x y z';
$uc_alphabet = ucwords($alphabet);
$uc_alphabet = explode(' ', $uc_alphabet);
$alphabet = explode(' ', $alphabet);

$number = '0 1 2 3 4 5 6 7 8 9';
$number = explode(' ', $number);

$signs = '! $ % & @';
$signs = explode(' ', $signs);

$array_characters = array_merge($alphabet, $uc_alphabet, $number, $signs);

function random_password ($length, $array){
    $password = [];

    for($i = 0; $i < $length; $i++ ){
        $password[] = $array[rand(0, count($array) - 1 )];
    };

    $password = implode($password);

    return $password;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <form action="">
            <input type="number" name="password-length" >
            <button>Invia</button>
        </form>
        <p>La tua password è: <?= random_password($password_length, $array_characters)  ?></p>
    </div>
</body>
</html>