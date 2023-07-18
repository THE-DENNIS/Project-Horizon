<?php
  

  require_once("db.php");
  
  class Country extends Db{
     private $conn;
  
     public function __construct(){
      $this->conn = $this->connect();
     }
  
  
     public function fetchAllCountries(){
        $sql= "SELECT * FROM countries ORDER BY country_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $country = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $country;

     }
  
  
  
  
  
  
  
  
  
  }
  
  
  
  
  


?>