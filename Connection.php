<?php

class Connection {
  private $username = "simplon";
  private $password = "chmod777";
  private $host = "localhost";
  private $DB = 'StopPub';
  private $connection;

  public function openConnection() {
    try {
      $this->connection = new PDO("mysql:dbname=$this->DB;host=$this->host", $this->username, $this->password);
      return $this->connection;
    } catch (PDOException $e) {
      echo 'Connexion échoué :' . $e->getMessage();
    }
  }

  public function closeConnection() {
    $this->connection = null;
  }
}

 ?>
