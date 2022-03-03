<?php

$msg = filter_input(INPUT_GET, "mensagem", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$coins = ['euro', 'dólar-americano', 'real', 'peso-argentino', 'dólar-canadense', 'rublo-russo'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/icone_de_pagina.svg" type="image/x-icon">
</head>
<body>
      <main class="d-flex justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                 <a href="index.php"> <img src="assets/img/bitcoin-5675758.svg" class="card-img-top" alt="Imagem sobre o Bitcoin"> </a>
                  <div class="card-body">
                        <h5 class="card-title text-center">Conversor de Moedas</h5>
                        <form action=" <?= "../app/view/result.php" ?>" method="post" class="d-flex flex-column" id="form">
                              <div class="col-auto">
                                    <label for="money" class="text-blue col-form-label"> Valor </label>
                                    <input type="text" id="money" name="value" class="form-control" aria-describedby="passwordHelpInline">
                              </div>
                              <div class="col-auto">
                              <label for="money" class="text-blue col-form-label"> From </label> 
                                    <select class="form-select" name="selectTypeFrom"> <?php foreach($coins as $coin): ?> <option> <?= $coin; ?> </option> <?php endforeach; ?> </select>
                              </div>
                              <div class="col-auto"> 
                                    <label for="money" class="text-blue col-form-label"> To </label> 
                                    <select class="form-select" name="selectTypeTo"> <?php foreach($coins as $coin): ?> <option> <?= $coin; ?> </option> <?php endforeach; ?> </select>
                              </div>
                              <div class="col-auto d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" name="converter"> Converter </button>
                              </div>
                              <?php if(!empty($msg)): ?> <p> <?= $msg; ?> </p> <?php endif; ?>
                        </form>
                  </div>    
            </div> 
     </main>
</body>
</html> 