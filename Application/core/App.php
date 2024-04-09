<?php

namespace Application\core;


class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $pageNotFound = false;
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();


        if(empty($url[0]) && empty($url[1])) {
            $url[1] = $this->controller;
        }

        

        $this->getControllerFromUrl($url);

        if (!$this->pageNotFound) {
            require_once '../Application/controllers/' . $this->controller . '.php';
            $controller = 'Application\controllers\\' . $this->controller;
            $this->controller = new $controller;
            $this->getMethodFromUrl($url);
            $this->getParamsFromUrl($url);
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            $this->controller = new Controller();
            
            $this->controller->pageNotFound();
        }
    }

    private function parseUrl() {
        $REQUEST_URI = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
        return $REQUEST_URI;
    }

    private function getControllerFromUrl($url) {
        if (file_exists('../Application/controllers/' . $url[1] . '.php')) {
            $this->controller = $url[1];
            unset($url[1]);
        } else {
            $this->pageNotFound = true;
        }
    }

    private function getMethodFromUrl($url) {
        if (isset($url[2])) {
            if (method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);
            } else {
                $this->pageNotFound = true;
            }
        }
    }

    private function getParamsFromUrl($url) {
        $this->params = $url ? array_values($url) : [];
    }
}