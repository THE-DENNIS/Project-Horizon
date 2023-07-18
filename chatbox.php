<?php
session_start();
require_once("partials/header.php");
require_once("classes/Message.php");
require_once("classes/User.php");

$mg = new Message();

if (isset($_GET['id'])) {
    $receiver_id = $_GET['id'];
}

$sender_id = $_SESSION["user_id"];

$previousMessages = $mg->getMessages($sender_id, $receiver_id);
?>

<div class="container chatbox">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3>Messages</h3>
            <div class="chat-container">
                <?php foreach ($previousMessages as $message) { ?>
                    <?php $messageClass = ($message["sender_id"] == $sender_id) ? "sender-message" : "receiver-message"; ?>
                    <div class="message <?php echo $messageClass; ?>">
                        <div class="message-content"><?php echo $message["message"]; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3 mb-3">
            <div class="chat-form-container">
                <form id="chat-form" class="form-control moves">
                    <div class="mb-1">
                        <textarea id="message-input" class="form-control" name="message" placeholder="Type your message..."></textarea>
                    </div>
                    <input type="hidden" value="<?php echo $sender_id; ?>" name="sender_id">
                    <input type="hidden" value="<?php echo $receiver_id; ?>" name="receiver_id">

                    <div class="row justify-content-end my-2">
                        <button id="send-button" class="btn-edit-profile justify-content-end" name="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/scripts/jquery.js"></script>
<script>
$(document).ready(function() {
    // Handle form submission
    $('#chat-form').submit(function(e) {
        e.preventDefault(); // Prevent form submission

        var message = $('#message-input').val(); // Get the message input value
        var sender_id = $('input[name="sender_id"]').val(); // Get the sender_id value
        var receiver_id = $('input[name="receiver_id"]').val(); // Get the receiver_id value

        // Validate empty message
        if (message === '') {
            alert('You didn\'t type anything');
            return;
        }

        // Send the message via AJAX
        $.ajax({
            url: 'process/chatboxprocess.php',
            method: 'POST',
            data: {
                send: true,
                message: message,
                sender_id: sender_id,
                receiver_id: receiver_id
            },
            dataType: 'json',
            success: function(response) {
                // Update the chat interface with the newly sent message
                var messageClass = (response.sender_id == sender_id) ? 'sender-message' : 'receiver-message';
                var messageElement = '<div class="message ' + messageClass + '"><div class="message-content">' + response.message + '</div></div>';
                $('.chat-container').append(messageElement);

                // Clear the message input
                $('#message-input').val('');
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});
</script>

<?php
require_once("partials/footer.php"); 
?>
