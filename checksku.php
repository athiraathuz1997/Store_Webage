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
<body>

	

<table id="customers">
	<tr>
	
		<td>PART NO</td>
		<td>PART DESCRIPTION</td>
		<td>SUPPLIER NAME</td>
		<td>SUPPLIER CODE</td>
		<td>SUPPLIER ADDRESS</td>
		<td>SUPPLIER CITY</td>
		<td>DATE CREATED</td>
		<td>DATE UPDATED</td>
		<td>APPROVED MAKE</td>
		<td>APPROVED MODEL</td>
		<td>SUPPLIER EMAIL</td>
		<td>SUPPLIER CONTACT NO:</td>
	</tr>
	
		<tbody>
			</html>

			<?php  
				$sqli="SELECT * FROM materials WHERE partno=".$_POST['partno'];
				$result=mysqli_query($con,$sqli);
				if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						
						echo "<td>".$row['partno']."</td>";
						echo "<td>".$row['partdescription']."</td>";
						echo "<td>".$row['supp_name']."</td>";
						echo "<td>".$row['supp_code']."</td>";
						echo "<td>".$row['supp_address']."</td>";
						echo "<td>".$row['supp_city']."</td>";
						echo "<td>".$row['date_created']."</td>";
						echo "<td>".$row['date_updated']."</td>";
						echo "<td>".$row['app_mak']."</td>";
						echo "<td>".$row['app_modl']."</td>";
						echo "<td>".$row['supp_em']."</td>";
						echo "<td>".$row['supp_cont']."</td>";
						

						echo "</tr>";
					}
				}?>
				

</tbody>
</table>

</body>
</html>


