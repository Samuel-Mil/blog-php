<?php

namespace App\Src\Controllers\Dashboard;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;

class ListPostsController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $this->setLayout("dashboard");
        $this->render("dashboard/list_posts");
    }
}
