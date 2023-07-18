<?php
   
   
    require_once("../classes/user.php");
   if($_POST){
       if(isset($_POST["changepassword"])){
           $oldpassword = $_POST["oldpassword"];
           $newpassword = $_POST["newpassword"];
           $user_id = $_SESSION["user_id"];
              //hash the new password before sending it to the method
           $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);

           if(empty($oldpassword) || empty($newpassword)){
               echo "are fields are required";
               exit();
           }

           $userone = new User();
           $result= $userone->updatePassword($user_id, $oldpassword, $newpassword);
       }    echo $result;


   }








?>