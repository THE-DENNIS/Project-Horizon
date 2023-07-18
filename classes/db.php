<?php
   class Db{
    private $dbName= "horizon";
     private $dbHost="localhost";
     private $dbUser="root";
     private $dbPassword="";
     
     
    //connect to the database 
   public function connect(){
      try{
         $dsn = "mysql:host={$this->dbHost};dbname={$this->dbName}";
         $conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conn;

      }catch (PDOEXCEPTION $e){
         echo "you ran into an error: ". $e->getMessage();
      }
   }


}



?>