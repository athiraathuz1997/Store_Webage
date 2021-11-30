
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";

		$con = mysqli_connect($servername,$username,$password,$dbname);
		if ($con->connect_error) {
			die("connection failed".$con->connect_error);
		}
		?>

<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>

	
<h1><center>MATERIALS ISSUED</center></h1>
<center>
<table id="customers">
	<tr>
	<td>SL NO:</td>
		<td>PART NO</td>
		<td>SUPPLIER PART NO:</td>
		<td>SUPPLIER CODE</td>
		<td>QUANTITY ISSUED</td>
		<td>ISSUED TO</td>
		<td>DATE OF ISSUE</td>
		<td>LOCATION</td>
	
	</tr>
	
		<tbody>
			</html>

			<?php  
				$sqli="SELECT * FROM materialissue";
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						echo "<td>".$row['slno']."</td>";
						echo "<td>".$row['partno']."</td>";
						echo "<td>".$row['supp_partno']."</td>";
						echo "<td>".$row['supp_code']."</td>";
						echo "<td>".$row['qtyissued']."</td>";
						echo "<td>".$row['issuedto']."</td>";
						echo "<td>".$row['dateofissue']."</td>";
						echo "<td>".$row['location']."</td>";
						

						echo "</tr>";
					
					}
				}?>
				

</tbody>
</table>
</center>
</body>
</html>


			






