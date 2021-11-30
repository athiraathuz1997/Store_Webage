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
				$delivery_ch = $_POST['delivery_ch'];
				$invoice=$_POST['invoice'];
				$pass = $_POST['pass'];
				$quantity = $_POST['quantity'];
				$date_despatch = $_POST['date_despatch'];
				$sqli = "INSERT INTO fg_delivery (delivery_ch, invoice, pass, quantity, date_despatch) VALUES('$delivery_ch', '$invoice', '$pass', '$quantity', '$date_despatch')";
				
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