/* Table creation file for Form-input data */

//Connection to server and database
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160249db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Creation of Table for Form-input data
$sql = "CREATE TABLE Friends (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
Address VARCHAR(30) NOT NULL,
Age INT UNSIGNED NOT NULL,
City VARCHAR(30) NOT NULL,
Mobile VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Friends created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>