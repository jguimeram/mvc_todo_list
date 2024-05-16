<?php

namespace Debian\MvcTemplate\Routes;

class Router
{
    protected array $get;
    protected array $post;
    public function get($url, $fn)
    {
        $this->get[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->post[$url] = $fn;
    }

    public function run()
    {
        $url = $_SERVER['REQUEST_URI'] ?? "/";
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->get[$url] ?? null;
        } else if ($method === 'POST') {
            $fn = $this->post[$url] ?? null;
        }


        if ($fn) {
            $controller = $fn[0];
            $action = $fn[1];
            $this->controllerInstance($controller, $action);
        } else {
            http_response_code(404);
            header('Location: /');
        }
    }

    private function controllerInstance($controller, $action)
    {
        $classInstance = new $controller;
        call_user_func([$classInstance, $action], $this);
    }

    public function render($view, array|null $data = [])
    {

        foreach ($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        require __DIR__ . "/../Views/$view.php";
        $content = ob_get_clean();
        require("../Views/layout.php");
    }
}