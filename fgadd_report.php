<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";

		$con = mysqli_connect($servername,$username,$password,$dbname);
		if ($con->connect_error) {
			die("connection failed".$con->connect_error);
		}

			if (isset($_POST['sub']))
			 {
				
				$sku = $_POST['sku'];
				$storage_location=$_POST['storage_location'];
				$qty = $_POST['qty'];
				$reference=$_POST['reference'];
				$date_reciept = $_POST['date_reciept'];

				$sqli = "INSERT INTO fg (sku, storage_location, qty, reference, date_reciept) VALUES('$sku', '$storage_location', '$qty', '$reference', '$date_reciept')";
				
				$result=mysqli_query($con,$sqli);

				if ($result) {
                 echo "new records created";
	
				}
				else
				{
					echo "error".$sqli."<br>".$con->connect_error;
				}

					
			}
			$con->close();
  ?>