<?php

session_start();

include_once "../classes/money.php";
include_once "../classes/validation.php";
 
$value = filter_input(INPUT_POST, "value");
$selectType = filter_input(INPUT_POST, "selectType");

if(isset($_POST['converter'])) { 
    
    $user = Validation::validField($value);
 
    if(!empty($user->getMessage())) {
       message($user->getMessage());
       exit();
    }
 }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <main>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                <?php Validation::verifyImg($selectType); ?>
                <div class="card-body d-flex flex-column align-items-center">
                    <h6 class="card-title text-center">Parabéns, seu valor foi convertido. </h6>
                    <p class="card-subtitle mb-2 text-muted"> Moeda: <?= $selectType; ?> </p>
                    <?php if(Validation::verifySession()): ?> <p> <b> <?= $user->getConvertedMoney($selectType) ?> </b> </p> <?php endif; ?>
                    <a href="exit.php" class="btn btn-primary">Voltar para página inicial</a>
                </div>
            </div>   
        </div>    
    </main>
</body>
</html>