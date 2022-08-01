<?php

namespace App\Src\Models;

use App\Core\Database;

class HomeModel
{
    public static function getPosts()
    {
        $sql = Database::prepare("SELECT * FROM `posts`");
        $sql->execute();

        return $sql->fetchAll();
    }
}