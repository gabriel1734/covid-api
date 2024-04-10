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
        $log = $Api->getLog();
        
        $mortos = 0;
        $casos = 0;

        foreach ($Brazil as $Country) {
            $mortos += $Country->Mortos;
            $casos += $Country->Confirmados;
        }

        $mortos = number_format($mortos, 0, ',', '.');
        $casos = number_format($casos, 0, ',', '.');
        
        $Brazil = ['mortos' => $mortos, 'casos' => $casos];

        $mortos = 0;
        $casos = 0;

        foreach ($Canada as $Country) {
            $mortos += $Country->Mortos;
            $casos += $Country->Confirmados;
        }

        $mortos = number_format($mortos, 0, ',', '.');
        $casos = number_format($casos, 0, ',', '.');

        $Canada = ['mortos' => $mortos, 'casos' => $casos];

        $mortos = 0;
        $casos = 0;

        foreach ($Australia as $Country) {
            $mortos += $Country->Mortos;
            $casos += $Country->Confirmados;
        }

        $mortos = number_format($mortos, 0, ',', '.');
        $casos = number_format($casos, 0, ',', '.');

        $Australia = ['mortos' => $mortos, 'casos' => $casos];

        $log = ['create_time' => $log[0]['create_time'],'country' => $log[0]['country']];

        $this->view('home/index', ['Brazil' => $Brazil, 'Canada' => $Canada, 'Australia' => $Australia, 'log' => $log]);
    }

}
