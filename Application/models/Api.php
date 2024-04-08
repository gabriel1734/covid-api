<?php

namespace Application\models;

class Api {
  private $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php';

  public static function getAllCountries() {
    $ch = curl_init($this->url.'?listar_paises=1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
  }

  public static function getCountryWithData($country) {
    $ch = curl_init(.$this->url.'?pais=' . $country);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
  }

}