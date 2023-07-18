<?php
require_once("partials/header.php");
require_once("guard/userguard.php");
?>

  <?php
     require_once("classes/user.php");

   $user_id = $_SESSION["user_id"];
   $userone = new User();
   $user =$userone->getUserDetails($user_id);

  //  print_r($user);
     
     ?>    
 
              
            
           
<div class="container">
<div class="dashboard">
<div class="text-center">


<img src="<?php echo "process/".$user["user_dp"]; ?>" class="profile-img" alt="Profile Picture">
<h2 class="profile-name"><?php echo $user["user_fullname"]; ?></h2>
<p class="profile-info">Location: <?php echo $user["user_country_name"]; ?></p>
<p class="profile-info">Primary Language: <?php echo $user["user_primary_lang"]; ?></p>
</div>
<hr>
  <h4>Bio</h4>
  <p><?php echo $user["user_bio"]; ?></p>
  <h4>Skills</h4>
  <ul>
  <li><?php echo $user["user_skills"]; ?></li>
  </ul> 
  <a href="editprofile.php" class="btn btn-edit-profile">Edit Profile</a>
 
</div>
</div>
<div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
                  <h3>EDIT PROFILE</h3>
            <form action="process/updateprocess.php" method="post" enctype="multipart/form-data">
                  <div>
                  <input class="form-control mb-3" type="hidden" name="userid" value="<?php echo $user_id; ?>" >
                  <label>FullName</label>
                  <input class="form-control mb-3" type="text" name="fullname" id="" value="<?php echo $user["user_fullname"]; ?>" >
                  </div>
                  <div>
                  <label>Skills</label>
                  <input class="form-control mb-3" type="text" name="skills" id="" value="<?php echo $user["user_skills"]; ?>">
                  </div>
                  <div>
                  <label>Profile picture</label>
                  <input class="form-control mb-3" type="file" name="profilepic" id="">
                  </div>
                  <div>
                  <label>Bio</label>
                  <input class="form-control mb-3" type="text" name="bio" id="" value="<?php echo $user["user_bio"]; ?>">
                  <input type="submit" name="updateProfile" class="btn btn-primary btn-lg">
                  </div>
            </form>
      </div>
      <div class="col-md-2"></div>
</div>

           
            
           

<?php
  require_once("partials/footer.php");
?>
 
 


 



