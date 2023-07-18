<?php
// session_start();
require_once("db.php");
require_once("Message.php");


class User extends Db{
   private $conn;

   public function __construct(){
    $this->conn = $this->connect();
   }


   public function signupUser($fullname, $email, $password, $gender, $country, $currentlocation, $primarylanguage, $skills){
    //check if email in db before trying to insert into user table 
   $sql= "SELECT * FROM user WHERE user_email=?";
    $stmt= $this->conn->prepare($sql);
    $userexist=$stmt->execute([$email]);
    $numUsers=$stmt->rowCount();
    if($numUsers >0){
        return "Error :this email is already in use";
        //you do the above to the unique keys
    }

   //email does not exit now insert into database
   $sql = "INSERT INTO user(user_fullname, user_email, user_password, user_gender, user_current_location, user_country_name, user_primary_lang,	user_skills)
     VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

     $stmt = $this->conn->prepare($sql);
     $user = $stmt->execute([$fullname, $email, $password, $gender, $country, $currentlocation, $primarylanguage, $skills]);
    if($user){
      //  return "User created successfully";
      $_SESSION["sum_form_error"] = "<div class='alert alert-info'>User created successfully</div>";
      header("location:../login.php");
      exit;
    }else{
      //  return "unable to create user";
      $_SESSION["sum_form_error"] = "<div class='alert alert-info'>Unable to create user</div>";
      header("location:../signup.php");
      exit;
    }
   
   
}   


public function loginUser($email, $password){
   //check if email exist in db before trying to insert 
   $sql= "SELECT * FROM user WHERE user_email=?";
   $stmt= $this->conn->prepare($sql);
   $userexist=$stmt->execute([$email]);
   $numUsers=$stmt->rowCount();
   if($numUsers >1){
       return "Error Username or Password is not correct";
      //  exit();
       //you do the above to the unique keys
   }
   $user = $stmt->fetch(PDO::FETCH_ASSOC);
     
     if(password_verify($password, $user["user_password"])){
        // return "you are logged in";
  

        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["role"] = $user["role"];

        if($user["role"] === "user"){
         header("location:../profile.php");
         exit();
       }else if($user["role"] === "admin"){
         header("location:../admin_profile.php");
         exit();
       }else{
         session_destroy();
         header("location:../register.php");
         exit();
       }


 
         exit();
      }
  
      // return "Either Username or password is in correct";
      $_SESSION["sum_form_error"] = "<div class='alert alert-danger'>Either Email or password is incorrect</div>";
      header("location:../login.php");
     exit();
         exit();
 
 
 }


 //method to get user details using the id

 public function getUserDetails($user_id) {
  require_once("Message.php"); // Include the Message class if not already included

  $sql = "SELECT * FROM user WHERE user_id = ?";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute([$user_id]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  

  return $user;
}




public function getAllUser(){
   $sql= "SELECT * FROM user";
   $stmt = $this->conn->prepare($sql);
   $stmt->execute();
   $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return $users;
}


public function deleteUser($user_id){
   $sql= "DELETE FROM user WHERE user_id = ?";
   $stmt = $this->conn->prepare($sql);
   $userdeleted=$stmt->execute([$user_id]);
   if($userdeleted){
       header("location:../admin_generalprofile.php");
       exit();
   }
}


public function getLoginUserCountry($countryname) {
   $sql = 'SELECT * FROM user WHERE user_current_location = ?';
   $stmt = $this->conn->prepare($sql);
   $stmt->execute([$countryname]);
   $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return $users;
}

public function updatePassword($user_id, $oldpassword, $newpassword){
   //getting a user that i want to update the password
    $sql = "SELECT * FROM user WHERE user_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //checking if the password they provided matches with password stored for them in db
    if(password_verify($oldpassword, $user["user_password"])){
        
       $sql= "UPDATE user SET user_password = ? WHERE user_id = ?";
       $stmt = $this->conn->prepare($sql);
       $updatedUser= $stmt->execute([$newpassword, $user_id]);
       return $updatedUser;

    }

  return "old password is incorrect";


}





public function updateProfile($user_fullname, $user_skills, $user_bio, $user_dp, $user_id){
   $sql= "UPDATE user SET user_fullname=?, user_skills=?, user_bio=?, user_dp=? WHERE user_id=?";
   $stmt= $this->conn->prepare($sql);
   $response = $stmt->execute([$user_fullname, $user_skills,$user_bio, $user_dp, $user_id]);
   return $response;
 }




}


// $userone= new User();
// $result= $userone->signupUser("ben ten", "ben@gmail.com", "benten2023", "argentina", "nigeria", "spanish", "driving");
//  print_r($result);     



?>