<?php

session_start();
session_destroy();

$argument = $_SESSION['mensagem'] = 'Faça outra conversão novamente!';

header("location: ../index.php?{$argument}");