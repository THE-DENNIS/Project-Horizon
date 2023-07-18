<?php

require_once("db.php");

class Message extends Db {
    private $conn;
  
    public function __construct(){
        $this->conn = $this->connect();
    }

    public function insertMessage($message, $sender, $receiver) {
        $sql = "INSERT INTO message (message, sender_id, receiver_id)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$message, $sender, $receiver]);

        if ($stmt->rowCount() > 0) {
            $message = $this->conn->lastInsertId();

            // Retrieve the inserted message from the database
            $sql = "SELECT * FROM message WHERE message_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$message]);
            $insertedMessage = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $insertedMessage;
        } else {
            return null; // or return an error message if needed
        }
        
    }

    public function getMessages($sender, $receiver) {
        $sql = "SELECT * FROM message
                WHERE (sender_id = ? AND receiver_id = ?)
                OR (sender_id = ? AND receiver_id = ?)
                ORDER BY sent_time ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$sender, $receiver, $receiver, $sender]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getConversation($sender, $receiver) {
        $sql = "SELECT * FROM message
                WHERE (sender_id = ? AND receiver_id = ?)
                OR (sender_id = ? AND receiver_id = ?)
                ORDER BY created_at ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$sender, $receiver, $receiver, $sender]);
         
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function countReceivedMessagesFromUser($sender_id, $receiver_id) {
        $sql = "SELECT COUNT(*) AS message_count FROM message WHERE sender_id = ? AND receiver_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$sender_id, $receiver_id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $message_count = $row['message_count'];
        return $message_count;
     }
     
      
      
}

?>
