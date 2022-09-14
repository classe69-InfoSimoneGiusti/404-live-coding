<?php

header("Content-Type: application/json");

/*

    Voglio creare una risposta tipo quella dell'api di Boolean
    es:

    {
        "success": true,
        "response": 3
    }

*/

$numeroCasuale = rand(1, 9);
$risposta = [
                "success" => true,
                "response" => $numeroCasuale
            ];

echo json_encode($risposta);

/* converte in js: 
    { 
        "success": true,
        "response": 7
    }
*/


