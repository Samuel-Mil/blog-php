<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__."/../vendor/autoload.php";
use App\Core\Application;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define("ROOT_DIR", dirname(__DIR__).'/');

$app = new Application();

include_once __DIR__."/../routes/web.php";

$app->run();
