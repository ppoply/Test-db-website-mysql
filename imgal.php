<!DOCTYPE html>
<!-- Image gallery file -->
<html>
<head>
	<title>Image Gallary</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="imgal.css">

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

			<h1> The Image Gallery</h1>
			<p>Enjoy these few images </p>
		
	</div>

	
	

<div class="ig">
	
<img src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
<img src="http://c2.staticflickr.com/8/7218/7209301894_c99d3a33c2_h.jpg">
<img src="http://c2.staticflickr.com/8/7231/6947093326_df216540ff_b.jpg">

<img src="http://c1.staticflickr.com/9/8788/17367410309_78abb9e5b6_b.jpg">
<img src="http://c2.staticflickr.com/6/5814/20700286354_762c19bd3b_b.jpg">
<img src="http://c2.staticflickr.com/6/5647/21137202535_404bf25729_b.jpg">

<img src="http://c2.staticflickr.com/6/5588/14991687545_5c8e1a2e86_b.jpg">
<img src="http://c2.staticflickr.com/4/3888/14878097108_5997041006_b.jpg">
<img src="http://c2.staticflickr.com/8/7579/15482110477_0b0e9e5421_b.jpg">
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>