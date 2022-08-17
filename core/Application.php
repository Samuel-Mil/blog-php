<?php

namespace App\Core;

class Application
{
    public static Application $app;
    public string $layout = "main";
    public ?Controller $controller = null;
    public View $view;
    public Database $db;

    public function __construct()
    {
        self::$app = $this;
        $this->db = new Database();
        $this->view = new View();
        
        define('ROOT_DIR', dirname(__DIR__));
        define("APP_URL", explode('/', $_SERVER['REQUEST_URI']));
    }

    public function run()
    {
        $path = "App\Src\Controllers\\";
        $url = APP_URL;
        
        if(!@$url[1]){
            $path .= "Home";
        }else{
            $path .= ucfirst(strtolower($url[1]));
        }

        // echo '<pre>';
        // var_dump($url[0]);
        // echo '</pre>';

        if($url[1] === 'dashboard'){
            $path = "App\Dashboard\Controllers\\";

            if(!@$url[2]){
                $path .= 'Home';
            }else{
                $path .= ucfirst(strtolower($url[2]));
            }
        }

        $path .= "Controller";

        if(!class_exists($path)){
            die("<h1>404</h1>");
        }

        $this->controller = new $path();
        return call_user_func([$this->controller, 'index']);
    }
}