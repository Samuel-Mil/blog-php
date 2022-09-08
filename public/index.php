<?php

include __DIR__."/../vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define("ROOT_DIR", dirname(__DIR__).'/');

$app = new App\Core\Application();

include_once __DIR__."/../routes/web.php";

$app->run();
