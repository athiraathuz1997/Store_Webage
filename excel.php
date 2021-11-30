<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";
	$tbname = "materials";
	$filename = "excelfilename";
		
		$con = mysqli_connect($servername,$username,$password,$dbname);
		if ($con->connect_error) {
			die("connection failed".$con->connect_error);
		}

$sql="SELECT * FROM materials";

		$result=mysqli_query($con,$sql) or die("Couldn't execute".mysql_error()."<br>".mysql_errno());
		$file_ending ="xls";	
		
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=$filename.xls");
	header("Pragma: no-cache");
	header("Expires: 0");


if ($result->num_rows>0) { 

while($row = mysqli_fetch_row($result)){

						echo "<tr>";
						echo "<td>".$row['partno']."</td>";
						echo "<td>".$row['supppartno']."</td>";
						echo "<td>".$row['partdescription']."</td>";
						
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
						echo "</tr>";
						
							$schema_insert = str_replace($sep."$","",$schema_insert);
							$schema_insert = preg_replace('/\r\n/\n\r/\n/\r/',"",$schema_insert);
							$schema_insert = '\t';
							print(trim($schema_insert));
							print('\n');
						}}
		?>

				




			






