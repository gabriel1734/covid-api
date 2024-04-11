<?php

namespace Application\controllers;

use Application\core\Controller;

class Countries extends Controller
{
    public function index()
    {
        $Api = $this->model('Api');
        $countries = $Api->getAllCountries();
        
        $this->view('countries/index', ['countries' => $countries]);
    }

    public function show($country)
    {
        $Api = $this->model('Api');
        $country = $Api->getCountryWithData($country);
        $log = $Api->getLog();
        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];
        $this->view('countries/show', ['country' => $country, 'log' => $log]);
    }
}

?>
