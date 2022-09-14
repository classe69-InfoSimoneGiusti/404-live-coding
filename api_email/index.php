<?php

$listaEmail = ['info@pippo.com', 'servizioclienti@topolino.it', 'supporto@minnie.com'];

$indiceCasuale = rand(0, count($listaEmail) - 1);

$emailCasuale = $listaEmail[$indiceCasuale];

$risposta = [
                "success" => true,
                "response" => $emailCasuale
            ];

header('Content-Type: application/json');

echo json_encode($risposta);