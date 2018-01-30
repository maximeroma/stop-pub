<?php
  require_once 'Connection.php';

  class CRUDPub extends Connection {
    private $db;
    private $database;

    public function getTypePub($value) {
      // $this->db = $this->openConnection();
      $sql = "SELECT id FROM type_pub WHERE name=:name";
      $stmt = $this->connection->prepare($sql);
      $data = $stmt->execute(array(":name"=>$value));
      return $data;
    }

    public function getGoalPub($value) {
      // $this->db = $this->openConnection();
      $sql = "SELECT id FROM goal_pub WHERE name=$value";
      return $this->connection->query($sql);
    }

    public function insertPub ($type, $goal){
      try {
        // $this->db = $this->openConnection();
        $IDType = $this->getTypePub($type);
        // $IDGoal = $this->getGoalPub($goal);
        var_dump($IDType);
        die();
        $query = "INSERT INTO pub (id, id_type_pub, id_goal_pub, date_reception ) VALUES (:id, :id_type_pub, :id_goal_pub, now())";
        $sql = $this->connection->prepare($query);
        $sql = execute(array(':id' => 1, ':id_type_pub' => $IDType, ':id_goal_pub' => $IDGoal));
        echo 'Nouvelle pub créée';
      } catch (PDOException $e) {
        echo 'Il y a un problème avec la connexion: ' . $e->getMessage();
      }
    }
  }

 ?>
