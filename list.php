<!DOCTYPE html>
<html>
<head>
	<title>Langkawi Resort Rental</title>
</head>
<body>
<style>
body {
  background-image: url('https://luxpac.com/wp-content/uploads/2017/04/4_sky_blue-300x300.jpg');
}
</style>
<body>
<center>
<h1>List of Langkawi Resort Staffs<h1>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Address</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["staff_id"]. " </td>
			<td> ". $row["staff_name"]. " </td>
			<td> ". $row["staff_phone"]. "</td>
			<td> ". $row["staff_address"]. "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();

include 'footer.php';
?>

</body>
</html>