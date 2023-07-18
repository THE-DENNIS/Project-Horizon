<?php
session_start();
require_once("../classes/Message.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["send"])) {
    $msg = $_POST["message"];
    $sender = $_POST["sender_id"];
    $receiver = $_POST["receiver_id"];

    // Validate empty fields
    if (empty($msg)) {
        echo "You didn't type anything";
        exit;
    }

    // Instantiate the class and call the insertMessage method
    $message = new Message();
    $response = $message->insertMessage($msg, $sender, $receiver);
    if (is_array($response)) {
        // Return the inserted message as JSON response
        header("Content-Type: application/json");
        echo json_encode($response);
    } else {
        // Return an error message as needed
        echo $response;
    }
} else {
    // Redirect to the appropriate page if accessed directly
    // header("Location: ../index.php");
    // exit();
}
?>
