<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="miniproject.css" rel="stylesheet" type="text/css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" size="30x30" href="images/horizonlogo.jpg">
    <title>Horizon</title>

</head>
<style>

.video-container {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* Set the aspect ratio (16:9) */
}

.video-container video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Set the desired overlay color and opacity */
}

.eleven {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  z-index: 1;
  padding: 20px;
}

.eleven h3,
.eleven h4,
.eleven p {
  margin: 10px 0;
}

@media (max-width: 767px) {
  .video-container {
    height: auto;
    padding-bottom: 0;
  }

  .video-container video {
    display: none;
  }

  .overlay {
    background-color: rgba(0, 0, 0, 0); /* Set the overlay color to transparent on small devices */
  }

  .eleven {
    position: static;
    transform: none;
    padding: 20px 0;
  }
}




</style>


<body>
    <div class="container-fluid">
  
       
         
        <div class="row">
            <div class="col_md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light">
                    <div class="container">
                      <a class="navbar-brand" href="#"><strong><h2 class="hori">HORIZON</h2></strong></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Aboutus.php">About us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Log in</a>
                          </li>
                          <li class="nav-item"> 
                            <a class="nav-link" href="profile.php">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#foot">Contact Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQs</a>
                          </li>
                        </ul>
                        
                      </div>
                    </div>
                  </nav>

            </div>
            </div>