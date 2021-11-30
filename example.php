<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
 }

$sql = "SELECT * FROM productsku WHERE productcode=".$_POST['code'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while ($row = $result->fetch_assoc()) {
					echo "productcode: " . $row["productcode"]. "- product description: " .$row["product_description"]."-SKUN1".$row["skun1"]."SKUN2".$row["skun2"]."SKUN3".$row["skun3"]."SKUN4".$row["skun4"]."SKUN5".$row["skun5"]."<br>";}
}
						?>

