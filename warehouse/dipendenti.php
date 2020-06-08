<?php
include_once __DIR__ . '/../classes/dipendenti.php';

$dip = [
    ["Marco" , 'Madeddu' , 20 , 'web-dev FRONT END' , rand(1200,2500) , 'indeterminato'],
    ["Nicola" , 'Buompane' , 23 , 'web-dev BACK END' , rand(1200,2500) , 'indeterminato'],
    ["Fabio" , 'Soro' , 18 , 'web-dev FULL STACK' , rand(1200,1600) , 'indeterminato']
];

$allDip = [];

foreach($dip as $dipendente){
    $allDip [] = new Dipendenti(...$dipendente);
}



?>