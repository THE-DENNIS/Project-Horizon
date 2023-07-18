<?php
require_once("partials/header.php");
require_once("classes/User.php");

$fill = new User();
$getuser = $fill->getAllUser();

// Check if the delete button is clicked
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    $fill->deleteUser($user_id);
}

?>

<div class="container">
    <div class="row">
        <?php foreach ($getuser as $value) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="<?php echo "process/" . $value["user_dp"]; ?>" class="profile-img mx-auto" alt="Profile Picture">
                        <h5 class="card-title"><?php echo $value["user_fullname"]; ?></h5>
                        <p class="card-text"><?php echo $value["user_bio"]; ?></p>
                        <a href="Generalprofiledetail.php?user_id=<?php echo $value["user_id"]; ?>" class="btn btn-primary">View profile</a>
                        <form method="POST" action="">
                            <input type="hidden" name="user_id" value="<?php echo $value["user_id"]; ?>">
                            <button type="submit" class="btn btn-danger mt-2" name="delete_user">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require_once("partials/footer.php");
?>
