<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Api extends Database {
  private $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php';

  public function getAllCountries() {
    $ch = curl_init($this->url.'?listar_paises=1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
  }

  public function getCountryWithData($country) {
    $ch = curl_init($this->url.'?pais=' . $country);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $this->storeDataLog($country);
    return json_decode($result);
  }

  public function storeDataLog($country){
    $conn = new Database();
    $query = "INSERT INTO log_consulta (country) VALUES (:country)";
    $conn->executeQuery($query, ['country' => $country]);
  }

  public function getLog() {
    $conn = new Database();
    $stmt = $conn->executeQuery("SELECT * FROM log_consulta ORDER BY id DESC LIMIT 1");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}