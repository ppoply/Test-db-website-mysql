
<?php
/* File for Handling Signup requests with proper validation */

$servername = "localhost";
$username = "root";
$passsword = "mysql";
$dbname = "loginprac";

//Connection to server and database
$conn = new mysqli($servername, $username, $passsword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty(trim($_POST["username"]))){
		$username_err = "Username cannot be empty. ";
	}
/* Parameter-Binding for preventing SQL injections */
	else{
		$sql = "SELECT id FROM Users WHERE username = ?";

		if($stmt = $conn->prepare($sql)){
			
			$stmt->bind_param("s",$param_username);
			$param_username = trim($_POST["username"]);


			if($stmt->execute()){
				$stmt->store_result();

				if($stmt->num_rows == 1){
					$username_err = "This username is already taken.";
				}
				else{
					$username = trim($_POST["username"]);
				}
			}
			else{
				echo "Something went wrong. Please try again later.";
			}
		}

		$stmt->close();
	}

	if(empty(trim($_POST['password']))){
		$password_err = "Password cannot be empty";
	}

	elseif(strlen(trim($_POST['password'])) < 8){
		$password_err = "Password length should be more than 8 characters";
	}

	else{
		$password = trim($_POST['password']);
	}

	if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';

    } else{
        $confirm_password = trim($_POST['confirm_password']);

        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
//If no validation error then Signup successfull
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
    	$sql = "INSERT INTO Users (username, password) VALUES (?,?)";

    	if($stmt = $conn->prepare($sql)){
    		$stmt->bind_param("ss", $param_username, $param_password);

    		$param_username = $username;
    		$param_password = password_hash($password,PASSWORD_DEFAULT);

    		if($stmt->execute()){
    			header("location: login.php");
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

<!doctype html>
<!-- Template for Signup with proper validation and error handling -->
<html lang="en">
  <head>

    <title>Sign Up</title>

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
      <h1 class="h3 mb-3 font-weight-normal">Please fill up these details to sign up</h1>

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
      

 <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
      <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
      <input type="password" name="confirm_password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>" required>
      <span class="help-block"><?php echo $confirm_password_err; ?></span>
 </div>
 

 <div class="yeah">  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
 </div>


 	<p>Already have an account? <a href="login.php">Login here</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-20XX Parth Poply</p>

    </div>

      <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
    <script  src="js/index.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">

    </form>
  </body>
</html>











