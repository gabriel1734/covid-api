<?php 
namespace Application\controllers;
use Application\core\Controller;

class About extends Controller
{
    public function index()
    {
        $Api = $this->model('Api');
        $log = $Api->getLog();
        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];
        $this->view('about/index', ['log' => $log]);
    }
}