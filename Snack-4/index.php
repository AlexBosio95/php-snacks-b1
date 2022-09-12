<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$Array = [];

while (count($Array) < 15) {
    $randomNumber = rand(1,200);

    if (!in_array($randomNumber, $Array)) {
        $Array[] = $randomNumber;
    }
}

var_dump($Array);

?>