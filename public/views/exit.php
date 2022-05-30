<?php

ini_set("display_errors", 1);

session_start();
session_destroy();

use app\classes\messages\Message;

Message::set("again", "Faça outra conversão novamente.", "success");
redirect("?page=home");