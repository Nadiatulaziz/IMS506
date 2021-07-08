<!DOCTYPE html>
<html>
<head>
	<title>langkawiresort</title>
</head>
<style>
body {
  background-image: url('https://luxpac.com/wp-content/uploads/2017/04/4_sky_blue-300x300.jpg');
}
</style>
<body>
<center>
<h1>Add New Customer<h1>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

 
  if(empty(trim(isset($_POST["cust_name"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$cust_id = trim($_POST['cust_id']);
		$cust_name = trim($_POST['cust_name']);
		$package_code = trim($_POST['package_code']);
		$staff_id= trim($_POST['staff_id']);
		$cust_phone= trim($_POST['cust_phone']);
		
		//SQL, change into your table name and column
       	$sql = "INSERT INTO customer (cust_id, cust_name, package_code, staff_id, cust_phone)
			VALUES ('$cust_id','$cust_name','$package_code','$staff_id','$cust_phone')";	

if ($conn->query($sql) === TRUE) {
  echo "<br><br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        
    	}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <table>
	
		<tr>
			<td>
				<label for="cust_id">Customer ID:</label>
				<input type="int(4)" name="cust_id" required>
			</td>
		</tr>
    
			<tr>
			<td>
				<label for="cust_name">Customer Name:</label>
				<input type="varchar(100)" name="cust_name" required>
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="package_code">Package Code:</label>
				<input type="varchar(6)" name="package_code" required>
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="staff_id">Staff ID:</label>
				<input type="int(3)" name="staff_id" required>
			</td>
		</tr>
    
		<tr>
			<td>
				<label for="cust_phone">Customer Phone:</label>
				<input type="bigint(12)" name="cust_phone" required>
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
		</tr>
		</table>

</form>

<?php

include 'footer.php';
?>

</body>
</html>