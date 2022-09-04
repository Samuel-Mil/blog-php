<?php

namespace App\Src\Controllers\Dashboard;

use App\Core\Controller;

class CreateUserController extends Controller
{
    public function index()
    {
        $this->setLayout('dashboard');
        $this->render('dashboard/create_user');
    }
}
