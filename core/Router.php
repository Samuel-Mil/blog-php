<?php

namespace App\Core;

use App\Core\Exceptions\NotFoundException;

class Router
{
    public array $router = [];
    public Response $response;
    public Request $request;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get(string $path, $callback)
    {
        $this->router['get'][$path] = $callback;
    }

    public function post(string $path, $callback)
    {
        $this->router['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->router[$method][$path] ?? false;

        if($callback === false){
            throw new NotFoundException();
        }

        if(is_string($callback)){
            return Application::$app->view->render($callback);
        }

        if(is_array($callback)){
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $callback[0] = $controller;
            return call_user_func($callback, $this->request, $this->response);
        }
    }
}
