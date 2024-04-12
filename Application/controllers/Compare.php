<?php
namespace Application\controllers;

use Application\core\Controller;

class Compare extends Controller
{
    public function index()
    {
        $Api = $this->model('Api');


        $this->view('compare/index', ['countries' => $Api->getAllCountries()]);
    }

    public function show()
    { 
        $Api = $this->model('Api');
        $country1Data = $Api->getCountryWithData($_GET['country1']);
        $country2Data = $Api->getCountryWithData($_GET['country2']);
        $log = $Api->getLog();

        $mortos = 0;
        $casos = 0;

        foreach ($country1Data as $Country) {
            $mortos += $Country->Mortos;
            $casos += $Country->Confirmados;
        }

        if ($casos != 0) {
          if ($mortos != 0) {
            $taxaMorte = number_format(($mortos / $casos) * 100, 2, ',', '.') . '%';
          } else {
            $taxaMorte = 0;
          }
        } else {
          $taxaMorte = 'Indefinida';
        }

        $mortos = number_format($mortos, 0, ',', '.');
        $casos = number_format($casos, 0, ',', '.');

        $country1 = ['name' => $_GET['country1'] ,'mortos' => $mortos, 'casos' => $casos, 'taxaMorte' => $taxaMorte];

        $mortos = 0;
        $casos = 0;

        foreach ($country2Data as $Country) {
            $mortos += $Country->Mortos;
            $casos += $Country->Confirmados;
        }

        if ($casos != 0) {
          if ($mortos != 0) {
            $taxaMorte = number_format(($mortos / $casos) * 100, 2, ',', '.') . '%';
          } else {
            $taxaMorte = 0;
          }
        } else {
          $taxaMorte = 'Indefinida';
        }
    
        $mortos = number_format($mortos, 0, ',', '.');
        $casos = number_format($casos, 0, ',', '.');

        $country2 = ['name' => $_GET['country2'] ,'mortos' => $mortos, 'casos' => $casos, 'taxaMorte' => $taxaMorte];

        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];
        $this->view('compare/show', ['country1' => $country1, 'country2' => $country2, 'log' => $log]);
    }


}