

<!DOCTYPE html>
<!--Form-input file . Bootstrap used for the Template . -->

<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="iform.css">
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
      <li class="nav-item">
        <a class="nav-link" href="imgal.php">Image Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="form.php">Form</a>
          <a class="dropdown-item" href="pdf-form.php">PDF converter</a>
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
		<div class ="jumbotron">

			<h1> Just Another Form</h1>
			<p>Fill it up and leave this site </p>
		
	</div>

	<form action="insert.php" method="post">
  
  <div class="form-group col-md-5">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Lionel">
  </div>
  
  <div class="form-group col-md-5">
    <label for="lname">Last name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Messi">
  </div>
  
  <div class="form-group col-md-5">
  		<label for ="age"> Age </label>
  		<input type="number" class="form-control" id="age" name="age">
  	</div>

  <div class="form-group col-md-8">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" min="1" id="inputAddress" >
  </div>

  

    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>

    <div class="form-group col-md-4">
      <label for="mno">Mobile</label>
      <input type="text" class="form-control" name="mobile" id="mno">
    </div>
  <br>
<div class="btnnn">
	<button type="submit" class="btn btn-primary btn-lg">Submit</button>
  <a class="btn btn-primary btn-lg" href="display.php" role="button">Display all details</a>
</div>
<br>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  

</form>
</body>
</html>