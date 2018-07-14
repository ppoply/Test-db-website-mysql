<!DOCTYPE html>
<!-- File for taking user input data through textbox -->
<html lang="en">
<head>
  <title>PDF generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dude.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ꟼoply</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="imgal.php">Image Gallery</a>
      </li>
      <li class="nav-item dropdown ">
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


</nav>
<div class="container">
  <br>
  <h2 style="text-align: center">PDF generator</h2>
  <br>
  <form action ="pdf-action.php" method="post">
    <div class="form-group">
      <label for="comment">Please enter text here : </label>
      <textarea class="form-control" rows="5" id="comment" name="text_area" wrap="hard" required></textarea>
      <div id="hero">
      <button type="submit" class="btn btn-sample" name = "but">Convert to pdf</button>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-20XX Parth Poply</p>
    </div>

  </form>
</div>

</body>
</html>

