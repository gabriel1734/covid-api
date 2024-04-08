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

        

        if(empty($url[0])) {
            $url[0] = $this->controller;
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
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

    private function getControllerFromUrl($url) {
        if (file_exists('../Application/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            $this->pageNotFound = true;
        }
    }

    private function getMethodFromUrl($url) {
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->pageNotFound = true;
            }
        }
    }

    private function getParamsFromUrl($url) {
        $this->params = $url ? array_values($url) : [];
    }
}