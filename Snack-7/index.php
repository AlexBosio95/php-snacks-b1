<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$Class = [

    [
        'Nome' => 'Pippo',
        'Cognome' => 'Baudo',
        'Voti' => [6,2,7,5,8,4]
    ],
    [
        'Nome' => 'Filippo',
        'Cognome' => 'Neri',
        'Voti' => [6,3,7,5,8,9]
    ],
    [
        'Nome' => 'Enrico',
        'Cognome' => 'Levi',
        'Voti' => [6,8,7,8,8,6]
    ],
    [
        'Nome' => 'Samba',
        'Cognome' => 'Saidou',
        'Voti' => [6,3,2,5,2,4]
    ],

];

for ($i=0; $i < count($Class) ; $i++) { 
    $currentStudent = $Class[$i];
    $MediaVote = array_sum($currentStudent['Voti']) / count($currentStudent['Voti']) ;
    echo $currentStudent['Nome'] . ' ' . $currentStudent['Cognome'] . ' | ' . 'Media voti:' . ' ' . number_format($MediaVote, 2) . '</br>';

}