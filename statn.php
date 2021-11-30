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
				$Partno = $_POST['partno'];
				$supppartno=$_POST['supppartno'];
				$Partdescription = $_POST['partdescription'];
				$quantity = $_POST['quantity'];
				$Supp_name = $_POST['supp_name'];
				$Supp_code = $_POST['supp_code'];
				$Supp_address = $_POST['supp_address'];
				$Supp_city = $_POST['supp_city'];
				$Date_received = $_POST['date_received'];
				$Date_updated = $_POST['date_updated'];
				$App_mak = $_POST['app_mak'];
				$App_modl = $_POST['app_modl'];
				$Supp_em = $_POST['supp_em'];
				$Supp_cont = $_POST['supp_cont'];
				$purchaseorder = $_POST['purchaseorder'];
				$invoice = $_POST['invoice'];

				$sqli = "INSERT INTO materials (partno, supppartno, partdescription, quantity, supp_name, supp_code, supp_address, supp_city, date_received, date_updated, app_mak, app_modl, supp_em, supp_cont,purchaseorder,invoice) VALUES('$Partno', '$supppartno', '$Partdescription', '$quantity', '$Supp_name', '$Supp_code', '$Supp_address', '$Supp_city', '$Date_received', '$Date_updated', '$App_mak', '$App_modl', '$Supp_em', '$Supp_cont', '$purchaseorder', '$invoice')";
				
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