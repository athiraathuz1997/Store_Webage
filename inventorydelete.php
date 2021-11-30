<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";

		$con = mysqli_connect($servername,$username,$password,$dbname);
		if ($con->connect_error) {
			die("connection failed".$con->connect_error);
		}
		
		
				$sqli="DELETE * FROM materials WHERE partno=".$_GET['partno'];
				$result=mysqli_query($con,$sqli);
				if ($result) {
					echo "deleted ";
				}



				?>


  <a href="statnview.php">view list</a>
				</body>
</html>