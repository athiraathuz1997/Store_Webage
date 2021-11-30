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
				$partno = $_POST['partno'];
				$supp_partno = $_POST['supp_partno'];				
				$supp_code = $_POST['supp_code'];
				$qtyissued = $_POST['qtyissued'];
				$issuedto = $_POST['issuedto'];
				$dateofissue = $_POST['dateofissue'];
$sqli = "INSERT INTO materialissue (partno, supp_partno, supp_code, qtyissued, issuedto, dateofissue) VALUES('$partno', '$supp_partno', '$supp_code', '$qtyissued', '$issuedto', '$dateofissue')";
				
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