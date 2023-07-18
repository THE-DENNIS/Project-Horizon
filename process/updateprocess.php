<?php
session_start();
  require_once("../classes/User.php");
  if($_POST){
    if(isset($_POST["updateProfile"])){
        
      $user_id= $_SESSION["user_id"];
   
      $fullname= $_POST["fullname"];
      $skill=$_POST["skills"];
      $bio=$_POST["bio"];

      // $user1= new User();
      // $response= $user1->updateProfile($fullname, $skill, $bio, $user_id);
      // if($response){
      //   header("location:../profile.php");
      //   exit();
      // }
    }
       //image validation
       $allowed = ["jpeg", "png", "jpg"];
       $file_name=$_FILES["profilepic"]["name"];
       $file_error=$_FILES["profilepic"]["error"];
       $temp=$_FILES["profilepic"]["tmp_name"];
       $uploaded_ext= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
       if(!in_array($uploaded_ext, $allowed)){
          echo "File type not allowed, please upload image";
          exit();
       }
      if($file_error == 0){
          $fileName = "images/"."horizon".time(). "." .$uploaded_ext;
          
          if(move_uploaded_file($temp, $fileName)){
            $user1= new User();
            $response= $user1->updateProfile($fullname, $skill, $bio, $fileName, $user_id);
            if($response){
              header("location:../profile.php");
              exit();
            }
      }

    
      
  }

  }


?>