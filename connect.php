


<?php
/* Connection file for Users DB */

//Making connection to server

$servername = "localhost";
$username = "root";
$password = "mysql";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Creation of MySQL Database for Users 

$sql = "CREATE DATABASE loginprac";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>