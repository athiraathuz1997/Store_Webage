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
				
				$skuno = $_POST['skuno'];
				$skun1 = $_POST['skun1'];
				$skun2 = $_POST['skun2'];
				$skun3 = $_POST['skun3'];
				$skun4 = $_POST['skun4'];
				$skun5 = $_POST['skun5'];
				$skun6 = $_POST['skun6'];
				$skun7 = $_POST['skun7'];
				$skun8 = $_POST['skun8'];
				$skun9 = $_POST['skun9'];
				$skun10 = $_POST['skun10'];
				$skun11 = $_POST['skun11'];

				$sqli = "INSERT INTO salebom (skuno, skun1, skun2, skun3, skun4, skun5, skun6, skun7, skun8, skun9, skun10, skun11) VALUES('$skuno', '$skun1', '$skun2', '$skun3', '$skun4', '$skun5', '$skun6', '$skun7', '$skun8', '$skun9', '$skun10', '$skun11')";
				
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