<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";
		$con = mysqli_connect($servername,$username,$password,$dbname);
		?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
<center><h1>Supplier details</h1></center>
<table border="5" id="customers" align="center">
	<tbody>

<?php 
//$supplier = mysqli_real_escape_string($mysqli, $_GET['suppliercode']);

		$result = mysqli_query($con,"CALL Getsuppliercode('suppliercode')");

				//$sqli="SELECT * FROM materials WHERE supp_code=$supplier";
				//$result=mysqli_query($con,$sqli);
				//if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
		echo "<tr><td>SUPPLIER NAME:</td>";
		echo "<td>SUPPLIER ADDRESS:</td>";
		echo "<td>SUPPLIER EMAIL</td>";
		echo "<td>SUPPLIER CONTACT NO:</td>";
			echo "<td>SUPPLIER CITY </td></tr>";

			//while($row=$result->fetch_assoc()){
					 	echo "<tr>";
					 	echo "<td>".$row['supp_name']."</td>";
					 	echo "<td>".$row['supp_address']."</td>";
					 	echo "<td>".$row['supp_em']."</td>";
					 	echo "<td>".$row['supp_cont']."</td>";
					 	echo "<td>".$row['supp_city']."</td>";
						echo "</tr>";echo "<br>";
						
					 	}
					 
					 	?>
					 </tbody>
					</table>
				</body>
				</html>