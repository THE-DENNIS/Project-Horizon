<?php
session_start();
  require_once("partials/header.php");
  require_once("classes/country.php");

  $cont = new Country();
  $allcountries= $cont->fetchAllCountries();
 
?>
         
       
<div class="row move">
<div class="col-md-6 moves">
    <h2 class="text-center text-white my-2">SIGN UP</h2>
    <p class="text-center text-white">Please fill out the form below to create your Horizon account.</p>
    <form class="form-control moves" method="post" action="process/signupprocess.php">

                <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>

        <div class="mb-1">
            <label for="full-name" class="form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
          </div>
          <div class="mb-1">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-1">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-1">
            <label for="confirm-password" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
          </div>
          <div class="mb-1">
            <label>Gender</label>
            <input type="radio" class="form-check-input" value="male" name="gender">Male
            <input type="radio" class="form-check-input" value="female" name="gender">Female

          </div>
          <div class="mb-1">
            <label for="country" class="form-label">Location:</label>
            <select class="form-select" aria-label="Default select example" name="country">
              <option>select your present location</option>
              <?php
              foreach($allcountries as $ctr){
            
              ?>
                  <option value="<?php  echo $ctr["name"]; ?>"><?php echo $ctr["name"]; ?></option>
              <?php
              }
              ?>
              </select>
          </div>
          <div class="mb-1">
            <label for="confirm-password" class="form-label">Country of Origin:</label>
            <input type="text" class="form-control" id="currentlocation" name="currentlocation">
          </div>
        <div class="mb-1">
          <label for="language" class="form-label">Primary Language:</label>
          <input type="text" class="form-control" id="primarylanguage" name="primarylanguage">
        </div>
        <div class="mb-1">
          <label for="skills" class="form-label">Skills:</label>
          <input type="text" class="form-control" id="skills" name="skills">
        </div>

        
        <div class=" row justify-content-center my-2">
        <button type="submit" class="btn btn-danger col-6" name="signup">SIGN UP</button>
        </div>

    </form>
  </div>
</div> 
          

        
        
       
        
<?php
  require_once("partials/footer.php");
?>

