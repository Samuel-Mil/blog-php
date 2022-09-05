<?php

namespace App\Src\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Src\Models\HomeModel;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $this->render("home", ['nome' => 'Samuel']);
    }
}
