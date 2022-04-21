<?php 

ini_set("display_errors", 1);

use app\classes\Validation;
use app\classes\MoneyFrom;
use app\classes\MoneyTo;
use app\classes\MoneyResult;

$value = filter_input(INPUT_POST, "value");
$selectTypeFrom = filter_input(INPUT_POST, "selectTypeFrom");
$selectTypeTo = filter_input(INPUT_POST, "selectTypeTo");

$user = Validation::validField($value, $selectTypeFrom, $selectTypeTo);
    
?>

<div class="d-flex justify-content-center align-items-center" id="card-result">
    <div class="card" style="width: 18rem;">
        <img src=" <?= "assets/img/" . mb_strtolower($selectTypeTo) . ".svg"; ?> " alt="Imagem de um país">
        <div class="card-body d-flex flex-column align-items-center">
            <h6 class="card-title text-center">Parabéns, seu valor foi convertido. </h6>
            <p class="card-subtitle mb-2 text-muted"> Moeda: <?= $selectTypeTo; ?> </p>
            <p> 
                <b> 
                    <?= (new MoneyResult($value))->moneyConverted(new MoneyFrom($selectTypeFrom), new MoneyTo($selectTypeTo)); ?> 
                </b> 
            </p>
            <a href="views/exit.php" class="btn btn-primary"> Voltar para página inicial </a>
        </div>
    </div>
</div>

    <!-- <p> Não foi possível converter o valor, houve uma falha inesperada. </p> -->

