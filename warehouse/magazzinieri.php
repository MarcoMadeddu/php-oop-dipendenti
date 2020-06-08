<?php
include_once __DIR__ . '/../classes/magazzinieri.php';

$mag = [
    ["Marco" , 'Madeddu' , 20 , 'Informatica-B-2' , 'A345' , getStatus(rand(0,1))],
    ["Nicola" , 'Buompane' , 23 , 'Informatica-B-12' , 'B212' , getStatus(rand(0,1))],
    ["Fabio" , 'Soro' , 18 , 'Informatica-A-1' , 'A00' , getStatus(rand(0,1))],
    ["Cristian" , 'Cuccuru' , 20 , 'Informatica-F-2' , 'A610' , getStatus(rand(0,1))],
];

$allMag = [];

foreach($mag as $magazziniere){
    $allMag [] = new Magazzinieri(...$magazziniere);
}



?>