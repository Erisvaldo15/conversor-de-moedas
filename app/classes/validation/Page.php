<?php

namespace app\classes\validation;

use Throwable;

class Page {

    public static function verifyPage() {

        try {
            require load();
        }

        catch(Throwable $th) {
            echo "<span class='text-danger'> {$th->getMessage()} </span>";
        }

    }

}