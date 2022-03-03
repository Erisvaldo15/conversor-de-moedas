<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

include_once "../classes/money.php";
include_once "../classes/validation.php";

use App\Classes\Validation;
 
$value = filter_input(INPUT_POST, "value");
$selectTypeFrom = filter_input(INPUT_POST, "selectTypeFrom");
$selectTypeTo = filter_input(INPUT_POST, "selectTypeTo");

if(isset($_POST['converter'])) { 
    
    $user = Validation::validField($value, $selectTypeFrom, $selectTypeTo);
 
    if(!empty($user->getMessage())) {
       message($user->getMessage());
       exit();
    }

 }

if(Validation::verifySession());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link rel="shortcut icon" href="../../public/assets/img/icone_de_pagina.svg" type="image/x-icon">
</head>
<body>
    <main>
        <div class="d-flex justify-content-center align-items-center" id="card-result">
            <div class="card" style="width: 18rem;">
                <img src=" <?= "../../public/assets/img/".mb_strtolower($selectTypeTo).".svg"; ?> " alt="Imagem de um país">
                <div class="card-body d-flex flex-column align-items-center">
                    <h6 class="card-title text-center">Parabéns, seu valor foi convertido. </h6>
                    <p class="card-subtitle mb-2 text-muted"> Moeda: <?= $selectTypeTo; ?> </p>
                    <p> <b> <?= $user->getConvertedMoney(); ?> </b> </p>
                    <a href="exit.php" class="btn btn-primary"> Voltar para página inicial </a>
                </div>
            </div>   
        </div>    
    </main>
</body>
</html>