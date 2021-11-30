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
<form action="" method="post">
	
<h1><center>STATIONARY</center></h1><center>
<table id="customers">
	<tr>
	<strong>
		<td>Part No</td>
		
		<td>Part Description</td>
		
		<td>Quantity</td>
		<td>Date Received</td>
		<td>Date Updated</td>
		<td>Approved Make</td>
		<td>Approved Model</td>
		<td>Purchase Order No:</td>
		<td>Invoice</td>
		
		</strong>
	</tr>
	
		<tbody>
			</html>

			<?php  
				$sqli="SELECT * FROM materials WHERE partno LIKE 'STN%'";
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						
						echo "<td>".$row['partno']."</td>";
						
						echo "<td>".$row['partdescription']."</td>";
						echo "<td>".$row['quantity']."</td>";
						
						echo "<td>".$row['date_received']."</td>";
						echo "<td>".$row['date_updated']."</td>";
						echo "<td>".$row['app_mak']."</td>";
						echo "<td>".$row['app_modl']."</td>";
						echo "<td>".$row['purchaseorder']."</td>";
						echo "<td>".$row['invoice']."</td>";
						

						echo "</tr>";
						
					}
				}?>
				

</tbody>
</table>
</center>
</body>
</html>




			






