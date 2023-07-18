<?php
session_start();
 require_once("../classes/User.php");
 require_once("../sanitizer.php");
 if($_POST){
    if(isset($_POST["signup"])){
      $fullname= sanitizer($_POST["fullname"]);
      $email= $_POST["email"];
      $password= $_POST["password"];
      $confirmpassword= $_POST["confirmpassword"];
      $country= sanitizer($_POST["country"]);
      $currentlocation=$_POST["currentlocation"];
      $primarylanguage= sanitizer($_POST["primarylanguage"]);
      $skills=sanitizer($_POST["skills"]);
      if(isset($_POST["gender"])){
         $gender = $_POST["gender"];
      }

     
     //validate empty fields
     if(empty($fullname) || empty($email) || empty($password) || empty($gender) || empty($confirmpassword) || empty($country)
      || empty($currentlocation) || empty($primarylanguage) || empty($skills)){
   //   echo "All Fields required";
   //   $_SESSION["sum_form_error"] = "All fields are required";
   //          header("location:../signup.php");

   $_SESSION["sum_form_error"] = "<div class='alert alert-danger'>All fields are required</div>";
            header("location:../signup.php");
     exit;
     }

      //validate password length
      if(strlen($password) < 8){
      //   echo "Minimum length for password is eight characters";
      $_SESSION["sum_form_error"] = "<div class='alert alert-danger'>Miniumum length of password is 8 characters</div>";
      header("location:../signup.php");
        exit;
     } 


     if($password !== $confirmpassword){
         // echo "password and confirm password must be the same";
         $_SESSION["sum_form_error"] = "<div class='alert alert-danger'>Password and confirm password must be the same</div>";
            header("location:../signup.php");
         exit;
     }
      //hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);
     //  echo $password;
    
    
      //instantiate the class and call the register method
      $userone = new User();
      $response =$userone->signupUser($fullname, $email, $password, $gender, $country, $currentlocation, $primarylanguage, $skills);
        echo $response;
    
    
    }
 }




?>