<?php

namespace Application\controllers;

use Application\core\Controller;

class Countries extends Controller
{
    public function index()
    {
        $Api = $this->model('Api');
        $countries = $Api->getAllCountries();
        $log = $Api->getLog();
        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];
    
        $this->view('countries/index', ['countries' => $countries, 'log' => $log]);
    }

    public function show($country)
    {
        if (empty($country)) {
            $this->pageNotFound();
            die();
        }
        $Api = $this->model('Api');
        
        $data = $Api->getCountryWithData($country);

        if(count(get_object_vars($data)) === 0){
            $this->pageNotFound();
            die();
        }
        
        $log = $Api->getLog();

        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];
        $this->view('countries/show', ['country' => $data, 'log' => $log, 'nameCountry' => $country]);
    }
}

?>
