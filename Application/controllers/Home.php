<?php
namespace Application\controllers;
use Application\core\Controller;

class Home extends Controller
{
    public function index()
    {
        $Api = $this->model('Api');
        $Brazil = $Api->getCountryWithData('Brazil');
        $Canada = $Api->getCountryWithData('Canada');
        $Australia = $Api->getCountryWithData('Australia');
        $this->view('home/index', ['Brazil' => $Brazil, 'Canada' => $Canada, 'Australia' => $Australia]);
        $this->view('home/index');
    }

}
