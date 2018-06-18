<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160249db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$age=$_POST['age'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];

$sql = "INSERT INTO Friends 
(Fname, Lname, Address, Age, City, Mobile)
VALUES ( '$fname','$lname','$address','$age','$city','$mobile')";

if ($conn->query($sql) === TRUE) {
    
    
  		header("location: welcome.php");
	

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>