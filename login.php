<?php
session_start();
require_once("partials/header.php");
?>
         
       
<div class="row move">
<div class="col-md-6 moves">
    <h2 class="text-center text-white my-5">LOGIN</h2>
    <form class="form-control moves" method="post" action="process/loginprocess.php">
                <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>


          <div class="mb-5 my-2">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-5 my-2">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          
        
        <div class=" row justify-content-center my-5">
        <button type="submit" class="btn btn-danger col-6" name="login">LOGIN</button>
        </div>

    </form>
  </div>
</div> 
          

        
        
       
        

<?php
  require_once("partials/footer.php");
?>


