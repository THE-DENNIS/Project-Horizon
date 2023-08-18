<?php require_once("partials/header.php"); ?>

<div class="container-fluid">
  <div class="row" id="fadein">
    <div class="col-md-12">
      <div id="a2" class="video-container">
        <div class="ten">
          <video autoplay muted loop style="width:100%">
            <source src="video/pexelsvidfour.mp4" type="video/mp4">
          </video>
          <div class="overlay"></div>
          <div class="eleven" id="letter">
            <h3>Welcome to Horizon</h3>
            <h4>Are you a refugee?</h4>
            <h4>Have you been forced to leave your home<br>due to conflict or natural disasters ?</h4>
            <h4>Join us on Horizon today to navigate and<br>explore the opportunities in your new<br>environment</h4>
            <a href="signup.php" class="btn btn-primary">SIGN UP</a>
            <a href="login.php" class="btn btn-primary">LOG IN</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <h3>How Horizon Works for You</h3>
      <p>Horizon is here to help you find your feet and integrate into your new community properly</p>
    </div>
  </div>

  <div class="row align-items-center py-5">
    <div class="col text-center">
      <img src="images/contacticon.png" class="img-fluid">
      <h6>Register on Horizon</h6>
    </div>
    <div class="col text-center">
      <img src="images/user.png" class="img-fluid">
      <h6>Create a Profile</h6>
    </div>
    <div class="col text-center">
      <img src="images/lang.png" class="img-fluid">
      <h6>Language Learning</h6>
    </div>
    <div class="col text-center">
      <img src="images/comm.png" class="img-fluid">
      <h6>Community Connection</h6>
    </div>
  </div>

  <div class="row">
            <div class="col-md-6 py-5 px-5 text-center">
                <img src="images/pexelsone.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-6 py-5 text-center">
                <h3 class="mb-4">A Haven for Displaced Individuals</h3>
                <h4>Seeking Refuge, Rebuilding Lives</h4>
                <h4>At Horizon Refuge, we understand the challenges faced by displaced individuals and families. We are dedicated to providing a safe and supportive haven where you can rebuild your life and find solace.</h4>
                <h4>Rest assured, you are not alone. Together, we can create a brighter horizon and a place you can truly call home.</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 py-5 text-center">
                <h3 class="mb-4">Get on a New Journey</h3>
                <h4>Embrace this new chapter in your life with courage and determination. Each day brings a chance to forge new connections and create a better future for yourself and your loved ones.</h4>
                <h4>Learn a few things about your new environment and explore the opportunities it offers.</h4>
            </div>
            <div class="col-md-6 py-5 px-5 text-center">
                <img src="images/pexelsfour.jpg" class="img-fluid" alt="Image 2">
            </div>
        </div>


  
</div>

<script src="assets/scripts/jquery.js"></script>
<script>
  $(document).ready(function(){
    $('#fadein').onload(function(){
      $('#letter').fadeIn(1000);
    });
  });
</script>

<?php require_once("partials/footer.php"); ?>
