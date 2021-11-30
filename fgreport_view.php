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
	<style>

</style>
</head>
<body><center>
	<h1>VIEW ITEMS</h1>

<table  border="2" width="800" height="200">
	
		<tr> <th colspan="5"><B>COCONICS PRIVATE LIMITED</B></th></tr>

		<tr><th colspan="4"><B>FINISHED GOODS STORE - INWARD REPORT</B></th>
		

			<?php  
			$sqli="SELECT * FROM fg WHERE date_reciept='".$_POST['date_reciept']."'";
			//echo $sqli;
			$result=mysqli_query($con,$sqli);
			//if ($result->num_rows>0) {
			while($row=$result->fetch_assoc()){
			echo "<td>";
			echo "Date:";
			echo $row['date_reciept']."</td>";
			echo "</tr>";
}?>

<tr><td colspan="3"><b>Prepared By Name:</b></td>
<td colspan="2"><b>Prepared By EID:</b></td></tr>
<tr><td colspan="3"><b>Reviewed By Name:</b></td>
<td colspan="2"><b>Reviewed By EID:</b></td>
</tr>
<tr><th>SERIAl No:</th>
	<th>SKU</th>
	<th>STORAGE LOCATION</th>
	<th>QUANTITY</th>
	<th>REFERENCE</th>
</tr>


				<?php  
				$sqli="SELECT * FROM fg WHERE date_reciept='".$_POST['date_reciept']."'";
				
				//echo $sqli;
				$result=mysqli_query($con,$sqli);
				//if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						echo "<th>".$row['serial_no']."</th>";
						echo "<td>".$row['sku']."</td>";
						echo "<td>".$row['storage_location']."</td>";
						echo "<td>".$row['qty']."</td>";
						echo "<td>".$row['reference']."</td>";			
						echo "</tr>";
					
}?>					
</table>
</center>
</body>
</html>


