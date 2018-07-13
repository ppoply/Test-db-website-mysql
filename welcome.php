

<?php
// Header file upon successfull login . Contains button links for Form and Logout.
session_start();
 //If session variable(s) not set then head to login form page again .

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
 <!--Template for Welcome page-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="iform.css">
    <style type="text/css">
        body{ text-align: center; }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Poply  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="imgal.php">Image Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="form.php">Form</a>
          <a class="dropdown-item" href="#">About</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contact us</a>
        </div>
    </li>
</ul>

<form class="form-inline">
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
  </form>
</div>
</nav>

   <div class="jumbotron">
  <h1 class="display-4">Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to my site.</h1>This is just a project website which gives the developer an insight of Backend programming </p>
  <hr class="my-4">
  <p>You can also fill up this form </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="form.php" role="button">Form</a>
  </p>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>

