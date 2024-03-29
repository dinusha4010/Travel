<?php
@ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="icon" href="images/frame1/sri-lanka.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allan&family=Allerta&family=Allura&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">

</head>

<body>
  <div class="container">

    <header>
      <nav class="navbar navbar-expand-lg fixed-top  bg-light">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="package.php"><img src="images/frame1/Travel.gif" alt="logo"  ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php"><img src="images/frame1/logo.gif" alt="logo" width="90" height="40"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#2">Plan your trip</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#3">Where to go </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#4"> Events </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#5">Adventure </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#6">Accormadation </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-md-4" href="#7" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Foods
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#7">Main Dishes
                    </a></li>
                  <li><a class="dropdown-item" href="#8">Spices</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#9">Sea Food
                    </a></li>
                </ul>

              </li>
              <li class="nav-item me-md-4">
                <a class="nav-link" href="Inquiry.php">Inquiry </a>
              </li>
              <li> <button class="btn btn-primary me-md-4" type="button"><a href="login.php">Login</a></button></li>
              <li> <button class="btn btn-primary me-md-4" type="button"><a href="form1.php">Sign Up</a></button></li>
              
              <?php


if(isset($_SESSION['user_name'])) {
    
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle me-md-4" href="#7" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
    echo $_SESSION['user_name'];
    echo '</a>';
    echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
    echo '<li><a class="dropdown-item" href="logout.php">Log Out</a></li>';
    echo '</ul>';
    echo '</li>';
}
?>
                 
                </ul>

              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <div id="page1" style="padding-top: 60px;">

      <div class="container text-center">
        <div class="row justify-content-md-center">
          <div class="col col-lg-9">
            <h1><?php echo $pagetitle; ?></h1>
          </div>
        </div>
      </div>

     