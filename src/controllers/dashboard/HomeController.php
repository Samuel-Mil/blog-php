<?php

namespace App\Src\Controllers\Dashboard;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->setLayout('dashboard');
        $this->render('dashboard/home');
    }
}
