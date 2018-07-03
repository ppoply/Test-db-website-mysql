/* Database creation file for Forms */

//Connection to server
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Creation of Database for Forms
$sql = "CREATE DATABASE f20160249db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>