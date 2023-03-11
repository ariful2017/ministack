<?php
class database{
  
  public $conn;
  
  public function __construct(){
    $host ="localhost";
    $dbUser ="root";
    $dbPass = "";
    $dbName ="ministack";

    try{
      $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPass);
      
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    }

    public function exe($sql){
      $statement = $this->conn->prepare($sql);
      $statement->execute();
    }

    public function fetch($sql){
      $statement = $this->conn->prepare($sql);
      $statement->execute();
      return $statement->fetchAll();
    }
  
}

?> 