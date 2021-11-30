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

<table  border="2">
	
		<tr> <th colspan="6"><B>COCONICS PRIVATE LIMITED</B></th></tr>

		<tr><th colspan="5"><B>FINISHED GOODS STORE - INWARD REPORT</B></th>
		

			<?php  
			$sqli="SELECT * FROM fg_outward WHERE date_outward='".$_POST['date_outward']."'";
			//echo $sqli;
			$result=mysqli_query($con,$sqli);
			//if ($result->num_rows>0) {
			while($row=$result->fetch_assoc()){
			echo "<td>";
			echo "Date:";
			echo $row['date_outward']."</td>";
			echo "</tr>";
}?>

<tr><td colspan="3"><b>Prepared By Name:</b></td>
<td colspan="3"><b>Prepared By EID:</b></td></tr>
<tr><td colspan="3"><b>Reviewed By Name:</b></td>
<td colspan="3"><b>Reviewed By EID:</td>
</tr>
<tr><th>SERIAL NO:</th>
	<th>GATE PASS NO.</th>
	<th>DELIVERY CHALLAN NO.</th>
	<th>INVOICE NO.</th>
	<th>QUANTITY</th>
	<th>REMARKS</th>
</tr>


				<?php  
				$sqli="SELECT * FROM fg_outward WHERE date_outward='".$_POST['date_outward']."'";
				
				//echo $sqli;
				$result=mysqli_query($con,$sqli);
				//if ($result->num_rows>0) {
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						echo "<th>".$row['serial_outward']."</th>";
						echo "<td>".$row['gate_pass']."</td>";
						echo "<td>".$row['dc_no']."</td>";
						echo "<td>".$row['invoice_no']."</td>";
						echo "<td>".$row['quantity']."</td>";
						echo "<td>".$row['remarks']."</td>";			
						echo "</tr>";
					
}?>					
</table>
</center>
</body>
</html>


