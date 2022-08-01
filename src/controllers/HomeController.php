<?php

namespace App\Src\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Src\Models\HomeModel;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render("home", ['nome' => 'Samuel']);
    }
}