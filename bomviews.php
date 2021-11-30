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

	<b><a href="planning.html">BACK</a></b>
<h1><center>VIEW BOM</center></h1>
<table id="customers">
	<tr>
	
		<td>PRODUCT CODE</td>
		<td>SKU</td>
		<td>PART NO</td>
		<td>PART DESCRIPTION</td>
		<td>BOM QUANTITY</td>
		
	</tr>
	
		<tbody>
			</html>

			<?php  
				$sqli="SELECT * FROM bom";
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						
						echo "<td>".$row['product_code']."</td>";
						echo "<td>".$row['sku']."</td>";
						echo "<td>".$row['partno']."</td>";
						echo "<td>".$row['part_description']."</td>";
						echo "<td>".$row['bom_quantity']."</td>";
				
						

						echo "</tr>";
						
					}
				}?>
				

</tbody>
</table>

</body>
</html>




			






