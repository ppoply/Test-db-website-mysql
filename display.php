

<!DOCTYPE html>
<!--File for displaying all the Form-input data -->
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body style="background-color:#b2d4ff ">
<h1 style="text-align: center">Details</h1>
<br>
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
//Query database for all info 

/* Note : each attribute to be echoed one by one since PHP and HTML cannot overlap */

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
<br>
<div style="text-align: center;">
<a class="btn btn-primary btn-lg" href="form.php" role="button" >Click here to go back</a>
</div>
</body>
</html>