<?php
  require_once 'CRUDPub.php';

  $PDO = new Connection();
  $isConnected = $PDO->openConnection();
  $pub = new CRUDPub();
  $pub->insertPub("mail", "voyage");
?>
