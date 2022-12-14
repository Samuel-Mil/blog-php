<?php

namespace App\Core;

class Application
{
    public static Application $app;
    public string $layout = "main";
    public ?Controller $controller = null;
    public View $view;
    public Database $db;
    public Request $request;
    public Response $response;
    public Router $router;

    public function __construct()
    {
        self::$app = $this;
        $this->db = new Database();
        $this->view = new View();
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        try{
            $this->router->resolve();
        }catch(\Exception $e){
            echo '<pre>';
            die('Error: '. $e->getMessage());
            echo '</pre>';
        }
    }
}
