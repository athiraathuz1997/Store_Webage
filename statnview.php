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

	
<h1><center>VIEW LIST</center></h1>
<table id="customers" border="1">
	<tr>
	
		<td>Part No</td>
		<td>Supplier Part no:</td>
		<td>Part Description</td>
		<td>Quantity</td>
		<td>Supplier Name</td>
		<td>Supplier Code</td>
		<td>Supplier Address</td>
		<td>Supplier City</td>
		<td>Date Received</td>
		<td>Date Updated</td>
		<td>Approved Make</td>
		<td>Approved Model</td>
		<td>Supplier Email</td>
		<td>Supplier Contact no:</td>
		<td>Purchase Order No:</td>
		<td>Invoice</td>
		<td>Update</td>
		<td>Delete</td>
	</tr>
	
		<tbody>
			</html>

			<?php  
				$sqli="SELECT * FROM materials";
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						
						echo "<td>".$row['partno']."</td>";
						echo "<td>".$row['supppartno']."</td>";
						echo "<td>".$row['partdescription']."</td>";
						echo "<td>".$row['quantity']."</td>";
						echo "<td>".$row['supp_name']."</td>";
						echo "<td>".$row['supp_code']."</td>";
						echo "<td>".$row['supp_address']."</td>";
						echo "<td>".$row['supp_city']."</td>";
						echo "<td>".$row['date_received']."</td>";
						echo "<td>".$row['date_updated']."</td>";
						echo "<td>".$row['app_mak']."</td>";
						echo "<td>".$row['app_modl']."</td>";
						echo "<td>".$row['supp_em']."</td>";
						echo "<td>".$row['supp_cont']."</td>";
						echo "<td>".$row['purchaseorder']."</td>";
						echo "<td>".$row['invoice']."</td>";
						

						
						echo "<td>";
						echo "<a href='inventoryupdate.php?partno=$row[partno]'>update</a>&nbsp;&nbsp;";
						echo "</td>";
							echo "<td>";
						echo "<a href='deleted.php?partno=$row[partno]'>delete</a>&nbsp;&nbsp;";
						echo "</td>";
						echo "</tr>";



					}
				}?>
				

</tbody>
</table>

</body>
</html>




			











			






