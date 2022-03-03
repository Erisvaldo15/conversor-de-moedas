<?php

include_once "../helper/config.php";
include_once "../classes/validation.php";

use App\Classes\Validation;

session_start();
session_destroy();

if(!Validation::verifySession()) {
    return;
}

message("Faça outra conversão novamente!");