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
<body>
<center>
<h1>Delete Customer Data<h1>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row if record found
 echo "<table border='1'>
		<tr>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Package Code</th>
			<th>Staff ID</th>
			<th>Customer Phone</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td>" . $row["cust_id"] . "</td>
			<td>" . $row["cust_name"] . "</td>
			<td>" . $row["package_code"] . "</td>
			<td>" . $row["staff_id"] . "</td>
			<td>" . $row["cust_phone"] . "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();



 if(empty(trim(isset($_POST["padamData"])))){
	  

        echo "<br><br><br> Masukkan ID Customer yang Hendak Di Padam";
    } else
	{
       	$padamData = trim($_POST['padamData']);
	
		
		//SQL, change into your table name and columnid
   
		$sql2 = "DELETE FROM `customer` WHERE customer=$padamData ";			
if ($conn2->query($sql2) === TRUE) {
  echo "<br><br>Rekod telah berjaya dipadam";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

$conn2->close();
        
    	}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


   <table>
		<br>
		<tr>
			<td>Customer's Data That Needs to be Deleted</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<label for="cust_id">Customer ID:</label>
				<input type="int(4)" name="padamData" required>
			</td>
		</tr>

		<tr>
			
			<td>
				<input type="submit" value="Submit">
				<input type="reset" value="Semula">
			</td>
		</tr>
		</table>

</form>




<?php
include 'footer.php';
?>

</body>
</html>