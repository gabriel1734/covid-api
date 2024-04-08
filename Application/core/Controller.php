<?php

namespace Application\core;

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../Application/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../Application/models/' . $model . '.php';
        return new $model;
    }

    public function pageNotFound()
    {
        $this->view('erro404');
    }
}