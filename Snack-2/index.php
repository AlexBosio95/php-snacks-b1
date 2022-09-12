<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h5>Inserisci i dati tramite la barra di ricerca</h5>
    <p>Request: </br> name: più di 3 caratteri / mail: valida con @ e . / age: in numero</p>

<?php

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    echo 'non hai inserito un dato correttamente';
} else {

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) !== false) {
        echo 'Accesso riuscito';
    } else{
        echo 'Accesso negato';
    }
}

?>
    
</body>
</html>
