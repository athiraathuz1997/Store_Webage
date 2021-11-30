<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "store";
	$editid = $_GET['partno'];

		$con=mysqli_connect($servername,$username,$password,$dbname);
		if ($con->connect_error) {
			die("connection failed".$con->connect_error);
		}
		if (isset($_POST['sub']))
			 {
				
				$purchaseorder = $_POST['purchaseorder'];
			

				$sqli="UPDATE materials SET purchaseorder='$purchaseorder' WHERE partno=".$_POST['partno'];
				$result=mysqli_query($con,$sqli);
				if ($result) {
					echo "record updated";
				}
				
			}
				?>
				<?php 

					$sqli="SELECT purchaseorder FROM materials WHERE partno=".$_POST['partno'];
					$result=$con->query($sqli);
					if ($result->num_rows>0) {
					while ($row=$result->fetch_assoc()) {
						if ($row['partno']==$editid) {
						 ?>
						 <link rel="stylesheet" type="text/css" href="style3.css">
						 <form action="" method="post">
				
				
			<label for="psw-repeat"><b>PURCHASE ORDER NO:</b></label>
    			<input type="text" placeholder="Purchase Order" name="purchaseorder" required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      		
				<input type="submit" name="sub" value="submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    			<a href="statnview.php">view list</a>

</form>
				<?php  
			}
		}
	}
	else
	{
		echo "0 results";
	}

	$con->close(); ?>


				



















