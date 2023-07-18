<?php
session_start(); 
echo " Hello " . $_SESSION["user_id"];
$userId = $_SESSION["user_id"];
require_once("../classes/Message.php");
if($_POST){
    if(isset($_POST["send"])){
      $msg= $_POST["message"];
      $sender= $_POST["sender_id"];
     
     //validate empty fields
     if(empty($msg)){
     echo "You didn't type anything";
     exit;
     }
    
    
      //instantiate the class and call the register method
      $userone = new Message();
      $response =$userone->insertMessage($sender, $receiver_id, $message);
        echo $response;
    
    
    }
 }

?>