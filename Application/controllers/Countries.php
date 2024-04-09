<?php

namespace Application\controllers;

use Application\core\Controller;

class Countries extends Controller
{
    public function index()
    {
        $this->view('countries/index');
    }

    public function show($country)
    {
        $Api = $this->model('Api');
        $country = $Api->getCountryWithData($country);
        $this->view('countries/show', ['country' => $country]);
    }
}

?>
