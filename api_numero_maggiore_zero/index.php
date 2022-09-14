<?php

/*
Voglio creare una risposta tipo quella dell'api di Boolean
es:

{
    "success": true,
    "response": 3
}

*/

$numeroMassimo = $_GET['max'];

$risposta = [];

if ($numeroMassimo < 0) {

    $risposta = [
        "success" => false,
        "response" => null
    ];

} else {

    $numeroCasuale = rand(0,$numeroMassimo);
    $risposta = [
                    "success" => true,
                    "response" => $numeroCasuale
                ];
}


header("Content-Type: application/json");

echo json_encode($risposta);
/* converte in js: 

{ 
    "success": true,
    "response": 7
}

*/


