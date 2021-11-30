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
				$hardfitment = $_POST['hardfitment'];
				$sidecover = $_POST['sidecover'];
				$sensing = $_POST['sensing'];
				$biosver = $_POST['biosver'];
				$memcap = $_POST['memcap'];
				$proclockspeed = $_POST['proclockspeed'];
				$deletesw = $_POST['deletesw'];
				$sysprep = $_POST['sysprep'];
				$qcoksecurity = $_POST['qcoksecurity'];

				$bootsys = $_POST['bootsys'];
				$scratch = $_POST['scratch'];
				$voltagetest = $_POST['voltagetest'];
				$antivirus = $_POST['antivirus'];
				$droptest = $_POST['droptest'];
				$esdtest = $_POST['esdtest'];
				


	$sqli = "INSERT INTO test_final_week (serialno, datetested, userid, hardfitment, sidecover, sensing, biosver, memcap, proclockspeed, deletesw, sysprep, qcoksecurity, bootsys, scratch, voltagetest, antivirus, droptest, esdtest) VALUES('$serialno', '$datetested', '$userid', '$hardfitment', '$sidecover', '$sensing', '$biosver', '$memcap', '$proclockspeed', '$deletesw', '$sysprep', '$qcoksecurity', '$bootsys', '$scratch', '$voltagetest', '$antivirus', '$droptest', '$esdtest')";
				
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