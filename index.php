<?php 
session_start();


// Recupero elementi
$password_length = $_GET['password'] ?? '';

// Creazione array caratteri
include_once __DIR__ . '/includes/script/array_creation.php';

// Random Password
include __DIR__ . '/includes/script/functions.php';

if($password_length >= 10){
   $_SESSION['password'] = random_password($password_length, $array_characters);
   header('Location: ./password_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="index.php">
            <input type="number" name="password" min="1" >
            <button>Invia</button>
        </form>
    </div>
</body>
</html>