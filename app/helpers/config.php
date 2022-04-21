<?php

function message(string $message) {
    $_SESSION['mensagem'] = $message;
    header("location: ?page=home"); 
}