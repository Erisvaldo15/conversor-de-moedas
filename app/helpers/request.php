<?php

function request() {

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        return $_POST;
    }

    return $_GET;
}