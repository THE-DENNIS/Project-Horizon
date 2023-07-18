<?php
session_start();
// require_once "classes/Customer.php";

if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
    exit();
}



?>
