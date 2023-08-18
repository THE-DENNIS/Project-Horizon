<?php
require_once("partials/header.php");
require_once("guard/userguard.php");
require_once("classes/User.php");

$user_id = $_SESSION["user_id"];
$fill = new User();
$user = $fill->getUserDetails($user_id);
?>

<style>
  .custom-card {
    background-color: #ffffff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  .profile-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .profile-name {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .profile-info {
    font-size: 16px;
    margin-bottom: 5px;
  }

  .card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .card-text {
    font-size: 16px;
    margin-bottom: 10px;
  }

  .btn-dashboard {
    padding: 8px 20px;
    font-size: 16px;
    font-weight: bold;
  }

  .btn-dashboard:not(:last-child) {
    margin-right: 10px;
  }
</style>

<div class="container mt-4">

<div class="row pb-3">
    <div class="col-md-2"></div>
    <div class="col-md-10 text-end">
      <?php require_once("partials/logoutform.php"); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="card custom-card mb-3">
        <div class="card-body text-center">
          <img src="<?php echo "process/" . $user["user_dp"]; ?>" class="profile-img" alt="Profile Picture">
          <h2 class="profile-name"><?php echo $user["user_fullname"]; ?></h2>
          <h4 class="profile-info">Location: <?php echo $user["user_country_name"]; ?></h4>
          <h4 class="profile-info">Primary Language: <?php echo $user["user_primary_lang"]; ?></h4>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="card custom-card mb-3">
        <div class="card-body">
          <h4 class="card-title">Bio</h4>
          <p class="card-text"><?php echo $user["user_bio"]; ?></p>
          <h4 class="card-title">Skills</h4>
          <p class="card-text"><?php echo $user["user_skills"]; ?></p>
          <a href="changepassword.php" class="btn btn-info btn-dashboard">Change Password</a>
          <a href="editprofile.php" class="btn btn-info btn-dashboard">Edit Profile</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card custom-card mb-3">
        <div class="card-body">
          <h5 class="card-title">Connections</h5>
          <p class="card-text">Reach out and connect with other Horizon users around you and around the world.</p>
          <a href='localconnect.php?name=<?php echo $user["user_current_location"]?>' class="btn btn-info btn-dashboard">Connect</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card custom-card mb-3">
        <div class="card-body">
          <h5 class="card-title">Your new Country</h5>
          <p class="card-text">Find out key details about your new country.</p>
          <a href="countryinfo.php" class="btn btn-info btn-dashboard">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card custom-card mb-3">
        <div class="card-body">
          <h5 class="card-title">Language and Facts</h5>
          <p class="card-text">Learn to say basic things in your new language, Break that language barrier. Ask key Questions and get answers, Get to know everthing about your new environment</p>
          <a href="Chatgptbot.php" class="btn btn-info btn-dashboard">Learn Basics</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once("partials/footer.php");
?>
