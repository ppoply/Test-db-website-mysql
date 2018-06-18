<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body style="background-color:#b2d4ff ">
<h1>Details</h1>
<table class="table table-dark">
	<thead>
		<tr>
		<th>ID</th>
		<th>FName</th>
		<th>LName</th>
		<th>Address</th>
		<th>Age</th>
		<th>City</th>
		<th>Mobile</th>
	</tr>
	</thead>
	<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160249db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Friends";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	?>
	   <tr>
	<td>
		<?php
        echo $row["ID"];
        ?>
    </td>
    <td>
		<?php
        echo $row["Fname"]
        ?>
    </td>
    <td>
		<?php
        echo $row["Lname"]
        ?>
    </td>
    <td>
		<?php
        echo $row["Address"]
        ?>
    </td>
    <td>
		<?php
        echo $row["Age"]
        ?>
    </td>
    <td>
		<?php
        echo $row["City"];
        ?>
    </td>
    <td>
		<?php
        echo $row["Mobile"];
        ?>
    </td>

		</tr>
		<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</tbody>
</table>
</body>
</html>