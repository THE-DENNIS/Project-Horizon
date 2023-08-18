<?php
  // require_once("guard/userguard.php");
  require_once("partials/header.php");
  require_once("classes/User.php");
 
  $user_id= $_GET["user_id"];
  $fill=new User();
 $user =$fill->getUserDetails($user_id);
 
 ?>         
              
            
           
<div class="container">

<div class="row pb-3">
    <div class="col-md-10"></div>
    <div class="col-md-2 text-start">
      <?php require_once("partials/backtoprofile.php"); ?>
    </div>
  </div>
  
<div class="dashboard">
<div class="text-center" style="background-color:gray; color:white;">
<img src="<?php echo "process/".$user["user_dp"]; ?>" class="profile-img" alt="Profile Picture">
<h2 class="profile-name"><?php echo $user["user_fullname"]; ?></h2>
<h4 class="profile-info">Location: <?php echo $user["user_country_name"]; ?></h4>
<h4 class="profile-info">Primary Language: <?php echo $user["user_primary_lang"]; ?></h4>
</div>
<hr>
<div class="text-center" style="background-color:rgb(242,111,85);color:white">
      <h4 class="profile-info">Bio: <?php echo $user["user_bio"]; ?></h4>
      
      <h4 class="profile-info">Skills: <?php echo $user["user_skills"]; ?></h4>
  <a href="chatbox.php?id=<?php echo $user_id; ?>" class="btn btn-edit-profile mb-2">Chat</a>
</div>
</div>
</div>

           
            
           

<?php
  require_once("partials/footer.php");
?>

