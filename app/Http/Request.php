<?php

namespace App\Http;

use Exception;

class Request
{

    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
    }

    public function setController()
    {

        $this->controller = empty($this->segments[1]) ? 'home' : $this->segments[1];
    }

    public function setMethod()
    {

        $this->method = empty($this->segments[2]) ? 'index' : $this->segments[2];
    }

    public function getController()
    {

        $controller = ucfirst($this->controller);

        $class = "App\Http\Controllers\\{$controller}Controller";


        if (!class_exists($class)) {
            throw new Exception("Error Processing Request");
        }

        return $class;
    }

    public function getMethod()
    {

        return $this->method;
    }

    public function send()
    {

        try {
            $controller = $this->getController();
            $method = $this->getMethod();

            $response = call_user_func([new $controller, $method]);


            if (!$response instanceof Response) {

                throw new Exception("Error Processing Request");
            }

            $response->send();
        } catch (Exception $ex) {

            echo "Details: {$ex->getMessage()}";
        }
    }
}

