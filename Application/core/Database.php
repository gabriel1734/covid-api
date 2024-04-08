<?php

namespace Application\core;

use PDO;

class Database extends PDO {
  private $con;
  private $DB_HOST = 'localhost';
  private $DB_NAME = 'mvc';
  private $DB_USER = 'root';
  private $DB_PASS = '';

  public function __construct() {
    $this->con = new PDO('mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME, $this->DB_USER, $this->DB_PASS);
  }

  private function bindParam($stmt,$key, $params) {
      $stmt->bindParam($key, $params);
  }

  private function setQuery($stmt, $params) {
    foreach ($params as $key => $value) {
      $this->bindParam($stmt, $key, $value);
    }
  }

  private function executeQuery($query, $stmt, $params = []) {
    $stmt = $this->con->prepare($query);
    $this->setQuery($stmt, $params);
    $stmt->execute();
    return $stmt;
  }
}