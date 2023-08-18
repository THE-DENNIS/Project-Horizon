<?php
session_start();
require_once("partials/header.php");
require_once("classes/User.php");
require_once("classes/Message.php");

$user_id = $_SESSION["user_id"];
$fill = new User();
$getuser = $fill->getAllUser();

$message = new Message();
$logged_in_user_id = $_SESSION["user_id"];
$message_count = $message->countReceivedMessagesFromUser($logged_in_user_id, $user_id);
$user['message_count'] = $message_count;


?>

<div class="container">

<div class="row pb-3">
    <div class="col-md-10"></div>
    <div class="col-md-2 text-start">
      <?php require_once("partials/backtoprofile.php"); ?>
    </div>
  </div>
  
  <div class="row">
    <?php foreach ($getuser as $value) {
      $sender_id = $value["user_id"];
      $message_count = 0; 

      // Check if the logged-in user has messaged the current user
      if ($sender_id !== $user_id) {
        $message_count = $message->countReceivedMessagesFromUser($user_id, $sender_id); 
      }
    ?>
    
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card text-center">
          <div class="card-body d-flex flex-column justify-content-center">
            <img src="<?php echo "process/".$value["user_dp"]; ?>" class="profile-img mx-auto" alt="Profile Picture">
            <h5 class="card-title"><?php echo $value["user_fullname"]; ?></h5>
            <p class="card-text"><?php echo $value["user_bio"]; ?></p>
            <p class="card-text">Messages: <?php echo $message_count; ?></p> 
            <a href="Generalprofiledetail.php?user_id=<?php echo $value["user_id"]; ?>" class="btn btn-primary">View profile</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php
require_once("partials/footer.php");
?>
