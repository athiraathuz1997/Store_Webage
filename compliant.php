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
				$serialno = $_POST['serialno'];
				$datetested = $_POST['datetested'];
				$userid = $_POST['userid'];
				$drivercheck = $_POST['drivercheck'];
				$validationscript = $_POST['validationscript'];
				$mslogo = $_POST['mslogo'];
				$checklabel = $_POST['checklabel'];
				$biosscreen = $_POST['biosscreen'];
				$passverifytool = $_POST['passverifytool'];
				$loosescrews = $_POST['loosescrews'];
				$intelsticker = $_POST['intelsticker'];
				$assembly = $_POST['assembly'];
				


	$sqli = "INSERT INTO test_mda_compliance (serialno, datetested, userid, drivercheck, validationscript, mslogo, checklabel, biosscreen, passverifytool, loosescrews, intelsticker, assembly) VALUES('$serialno', '$datetested', '$userid', '$drivercheck', '$validationscript', '$mslogo', '$checklabel', '$biosscreen', '$passverifytool', '$loosescrews', '$intelsticker', '$assembly')";
				
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