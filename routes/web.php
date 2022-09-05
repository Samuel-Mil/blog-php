<?php

use App\Src\Controllers\Dashboard\CreateUserController;
use App\Src\Controllers\Dashboard\ListPostsController;
use App\Src\Controllers\Dashboard\HomeController as DashHomeController;
use App\Src\Controllers\HomeController;

$routes = App\Core\Application::$app->router;

// Site
$routes->get('/', [HomeController::class, 'index']);

// Dashboard
$routes->get('/dashboard/home', [DashHomeController::class, 'index']);
$routes->get('/dashboard/list_posts', [ListPostsController::class, 'index']);
$routes->get('/dashboard/create_user', [CreateUserController::class, 'index']);
