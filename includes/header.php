<?php
  include_once 'includes\session.php';
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <title>Crown Medical - <?php echo $title ?></title>
    <link rel="icon" href="icons\icon.ico" type="image/icon type">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="icons\icon.ico" alt="" width="30" height="24" class="d-inline-block align-text-top img-fluid rounded-circle" style ="height:10%"></a>
        <a class="navbar-brand" href="index.php" style = "color:gold">CROWN MEDICAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse nav justify-content-center" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
          </li>
        </ul>
      </div>

      <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION["username"])){
          ?>
          <a class="btn btn-primary" data-bs-toggle="offcanvas" href="login.php" role="button" aria-controls="offcanvasExample">
  Login
</a>
          <a class="nav-item nav-link" href="login.php">Login</a>
          
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Welcome <?php echo strtoupper($_SESSION['username']) ?>! </span></a>
            <a class="nav-item nav-link" href="logout.php">Logout</a>
            
          <?php } ?>
        </div>
    </div>
  </nav>
  <div class="container">

   