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
        require '../Application/models/' . $model . '.php';
        $classe = 'Application\\models\\' . $model;
        return new $classe();
    }

    public function pageNotFound()
    {
        $this->view('error/erro404');
    }
}