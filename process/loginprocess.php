<?php
session_start();
 require_once("../classes/User.php");
   if($_POST){
   if(isset($_POST["login"])){

     

      $email= $_POST["email"];
      $password= $_POST["password"];
  

      //validate empty fields for email and password
       if(empty($email) || empty($password)){
          //  echo "All Fields required";
          $_SESSION["sum_form_error"] = "<div class='alert alert-danger'>All fields are required</div>";
            header("location:../login.php");
           exit();
       }
      }
    }
    
    
       $userone = new User();
       $result = $userone->loginUser($email, $password);
       echo $result;

?>