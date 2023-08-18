<?php
session_start();
require_once("partials/header.php");
require_once("classes/User.php");
require_once("classes/Message.php");

if (isset($_GET["name"])) {
    $countryname = $_GET["name"];
    $user_id = $_SESSION["user_id"];

    $fill = new User();
    $getusers = $fill->getLoginUserCountry($countryname);
}

$message = new Message(); // Instantiate the Message class
$logged_in_user_id = $_SESSION["user_id"];

?>

<div class="container">

<div class="row pb-3">
    <div class="col-md-10"></div>
    <div class="col-md-2 text-start">
      <?php require_once("partials/backtoprofile.php"); ?>
    </div>
  </div>
  
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 text-end pb-3">
            <a href="Genralprofile.php" class="btn btn-outline-primary">Horizon users around the world</a>
        </div>
    </div>
    <div class="row">
        <?php if (!empty($getusers)) { ?>
            <?php foreach ($getusers as $value) {
                $user_id = $value["user_id"];
                $message_count = $message->countReceivedMessagesFromUser($logged_in_user_id, $user_id);
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <img src="<?php echo "process/" . $value["user_dp"]; ?>" class="profile-img mx-auto" alt="Profile Picture">
                            <h5 class="card-title"><?php echo $value["user_fullname"]; ?></h5>
                            <p class="card-text"><?php echo $value["user_bio"]; ?></p>
                            <p class="card-text">Messages: <?php echo $message_count; ?></p> <!-- Display the message count -->
                            <a href="Generalprofiledetail.php?user_id=<?php echo $value["user_id"]; ?>" class="btn btn-primary">View profile</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No users found.</p>
        <?php } ?>
    </div>
</div>

<?php
require_once("partials/footer.php");
?>
