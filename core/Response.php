<?php

namespace App\Core;

class Response
{
    public function redirect(string $url)
    {
        header("Location: $url");
    }
}
