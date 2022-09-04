<?php

namespace App\Src\Controllers\Dashboard;

use App\Core\Controller;

class ListPostsController extends Controller
{
    public function index()
    {
        $this->setLayout("dashboard");
        $this->render("dashboard/list_posts");
    }
}
