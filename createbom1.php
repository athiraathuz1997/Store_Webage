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
				$product_code = $_POST['product_code'];
				$sku = $_POST['sku'];
				$partno = $_POST['partno'];
				$part_description = $_POST['part_description'];
				
				$bom_quantity = $_POST['bom_quantity'];
				
				

				$sqli = "INSERT INTO bom (product_code, sku, partno, part_description, bom_quantity) VALUES('$product_code', '$sku', '$partno', '$part_description', '$bom_quantity')";
				//$sq="SELECT mysqli_insert_id()";
				//$up="UPDATE salebom SET formatsale=CONCAT('sale',saleorder) WHERE saleorder=mysqli_insert_id";
				$result=mysqli_query($con,$sqli);
				//$res=mysqli_query($con,$sq);
				//$ress=mysqli_query($con,$up);
				

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