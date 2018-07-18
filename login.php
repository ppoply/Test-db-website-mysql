
<?php

/* File for handling Login requests */

//Connection to server and database
$servername = "localhost";
$username = "root";
$passsword = "mysql";
$dbname = "loginprac";


$conn = new mysqli($servername, $username, $passsword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty(trim($_POST["username"]))){
		$username_err = 'Username cannot be empty.';
	}
	else{
		$username = trim($_POST["username"]);
	}

	if(empty(trim($_POST['password']))){
        $password_err = 'Password cannot be empty.';
    } 
    else{
        $password = trim($_POST['password']);
    }
/* Parameter binding for preventing SQL injections */

    if(empty($username_err) && empty($password_err)){
    	$sql = "SELECT username, password FROM Users WHERE username = ?";

    	if($stmt = $conn->prepare($sql)){
    		$stmt->bind_param("s", $param_username);
    		$param_username = $username;

    		 if($stmt->execute()){
    		 	$stmt->store_result();

    		 	if($stmt->num_rows == 1){
    		 		$stmt->bind_result($username, $hashed_password);

    		 		if($stmt->fetch()){
    		 			if(password_verify($password, $hashed_password)){
    		 				session_start();
                            $_SESSION['username'] = $username;      
                            header("location: welcome.php");
    		 			}
    		 			else{
    		 				$password_err = 'The password you entered was not valid.';
    		 			}
    		 		}
    		 	}
    		 	else{
    		 		$username_err = 'No account found with that username.';
    		 	}
    		 }
    		 else{
                echo "Something went wrong. Please try again later.";
    	}
    }
     $stmt->close();
 }
 	$conn->close();
}
?>


<html lang="en">
<!-- Form template for Login with proper validation and Error handling -->
  <head>

    <title>Log in</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
  </head>

  <body class="text-center">

    <div id="particles-js"></div>

    <div class="text">
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <img class="mb-4" src="http://cdn.differencebetween.net/wp-content/uploads/2018/02/Difference-Between-Cool-and-Cold-1.gif" alt="" width="144" height="96">
      <h1 class="h3 mb-3 font-weight-normal">Please fill your details to Log in</h1>

 <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required autofocus>
      <span class="help-block"><?php echo $username_err; ?></span>
 </div>
      
 <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo $password; ?>" required>
      <span class="help-block"><?php echo $password_err; ?></span>
 </div>
      

 

 <div class="yeah">  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
 </div>


 	<p>Don't have an account? <a href="register.php">Sign up here.</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-20XX Parth Poply</p>

<div>
      <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
    <script  src="js/index.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">

    </form>
  </body>
</html>
