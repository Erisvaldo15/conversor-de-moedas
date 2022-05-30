<?php

use app\classes\messages\Message;

function message(string $key): string|bool {

    $message = Message::get($key);

    if(isset($message['message'])) {
        return "<p class='alert-{$message['alert']}'>{$message['message']}</p>";
    }

    return false;
}