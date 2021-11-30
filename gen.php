
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
<center><h1>DAILY REPORT</h1></center>
<table border="5" id="customers" align="center">
	<tbody>
		</html>
<?php 

		$result=mysqli_query($con,"CALL Getdailyreport()") or die("query fail:".mysqli_error());
		echo "<tr><td>PART NO:</td>";
		echo "<td>SUPPLIER PART NO:</td>";
		echo "<td>PART DESCRIPTION</td>";
		echo "<td>QUANTITY REMAINING</td>";
			echo "<td>SUPPLIER CODE</td></tr>";

			while ($row = mysqli_fetch_array($result))
					 {
					 	echo "<tr>";
					 	echo "<td>".$row['partno']."</td>";
					 	echo "<td>".$row['supppartno']."</td>";
					 	echo "<td>".$row['partdescription']."</td>";
					 	echo "<td>".$row['qtyremain']."</td>";
					 	echo "<td>".$row['supp_code']."</td>";


						echo "</tr>";echo "<br>";
						
					 	}
					 	
					 	?>
					 </tbody>
					</table>
				</body>
				</html>
	
						
					
					
				
				






			






