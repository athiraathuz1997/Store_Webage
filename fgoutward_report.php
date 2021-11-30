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
				$gate_pass = $_POST['gate_pass'];
				$dc_no=$_POST['dc_no'];
				$invoice_no = $_POST['invoice_no'];
				$quantity = $_POST['quantity'];
				$remarks=$_POST['remarks'];
				$date_outward = $_POST['date_outward'];
				
				$sqli = "INSERT INTO fg_outward (gate_pass, dc_no, invoice_no, quantity, remarks, date_outward) VALUES('$gate_pass', '$dc_no', '$invoice_no', '$quantity', '$remarks', '$date_outward')";
				
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