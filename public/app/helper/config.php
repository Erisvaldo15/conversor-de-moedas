<?php

function message($message) {
    $msg = ["mensagem" => "$message"];
    $argument = http_build_query($msg);
    header("location: ../../index.php?$argument");
}