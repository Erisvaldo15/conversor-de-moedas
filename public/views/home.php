<?php

use app\classes\MoneyFrom;
use app\classes\MoneyTo;

?>

<div class="card" style="width: 18rem;">
    <a href="index.php"> <img src="assets/img/bitcoin-5675758.svg" class="card-img-top" alt="Imagem sobre o Bitcoin"> </a>
    <div class="card-body">
        <h5 class="card-title text-center">Conversor de Moedas</h5>
        <form action=" <?= "?page=result" ?>" method="post" class="d-flex flex-column" id="form">
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> Valor </label>
                <input type="text" id="money" name="value" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> From </label>
                <select class="form-select" name="selectTypeFrom">
                    <?php foreach ((new MoneyFrom)->coins() as $coin) : ?>
                        <option> <?= $coin; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> To </label>
                <select class="form-select" name="selectTypeTo">
                    <?php foreach (array_reverse((new MoneyTo)->coins()) as $coin) : ?>
                        <option> <?= $coin; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="converter"> Converter </button>
            </div>
            <?php if(isset($_SESSION['mensagem'])): ?> 
                <p style="font-size: 0.85rem;" class="text-center"> 
                    <?= $_SESSION['mensagem']; ?> 
                </p> 
            <?php endif; ?>
        </form>
    </div>
</div>