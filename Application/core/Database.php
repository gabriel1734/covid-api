<?php

namespace Application\core;
use PDO;


class Database extends PDO {

  private $env;
  private $con;
  private $DB_HOST;
  private $DB_NAME;
  private $DB_USER;
  private $DB_PASS;

  public function __construct() {
    $this->env = parse_ini_file('../.ENV');
    $this->DB_HOST = $this->env['DB_HOST'];
    $this->DB_NAME = $this->env['DB_DATABASE'];
    $this->DB_USER = $this->env['DB_USER'];
    $this->DB_PASS = $this->env['DB_PASS'];
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

  public function executeQuery($query, $params = []) {
    $stmt = $this->con->prepare($query);
    $this->setQuery($stmt, $params);
    $stmt->execute();
    return $stmt;
  }
}