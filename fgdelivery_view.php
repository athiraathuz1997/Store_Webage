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
	<link rel="stylesheet" type="text/css" href="style8.css">
</head>
<body><center>
	<h1>VIEW ITEMS</h1>

<table id="customers">
	<tr>
	
		<td>DELIVERY CHALLAN</td>
		<td>INVOICE NO:</td>
		<td>GATE PASS</td>
		<td>QUANTITY</td>
		<td>DATE OF DESPATCH</td>
		
	</tr>
		

			<?php  
				$sqli="SELECT * FROM fg_delivery";

				//echo $sqli;
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						
						echo "<td>".$row['delivery_ch']."</td>";
						echo "<td>".$row['invoice']."</td>";
						echo "<td>".$row['pass']."</td>";
						echo "<td>".$row['quantity']."</td>";
						echo "<td>".$row['date_despatch']."</td>";
						
						echo "</tr>";
					}
				}?>
				

</table>
</center>
</body>
</html>


