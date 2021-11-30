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
		

				$sqli="UPDATE materials SET partno='$Partno', partdescription='$Partdescription', supp_name='$Supp_name', supp_code='$Supp_code', supp_address='$Supp_address', supp_city='$Supp_city', date_created='$Date_created', date_updated='$Date_updated', app_mak='$App_mak', app_modl='$App_modl', supp_em='$Supp_em', supp_cont='$Supp_cont' WHERE partno=".$_POST['partno'];
				
				$result=mysqli_query($con,$sqli);
				if ($result) {
					echo "record updated";
				}
				
			
				?>
				<?php 

					$sqli="SELECT * FROM materials";
					$result=$con->query($sqli);
					if ($result->num_rows>0) {
					while ($row=$result->fetch_assoc()) {
						if ($row['partno']==$editid) {
						 ?>
						 <form action="" method="post">
						 	<label for="email"><b>PART NO</b></label>
    <input type="text" placeholder="Enter part no" name="partno" required>


    <label for="psw"><b>PART DESCRIPTION</b></label>
    <input type="text" placeholder="Enter Part description" name="partdescription" required><br>

    <label for="psw-repeat"><b>SUPPLIER NAME</b></label>
    <input type="text" placeholder="Supplier name" name="supp_name" required>

    <label for="email"><b>SUPPLIER CODE</b></label>
    <input type="text" placeholder="Supplier code" name="supp_code" required><br>

    <label for="psw"><b>SUPPLIER ADDRESS</b></label>
    <input type="text" placeholder="Enter Supplier address" name="supp_address" required>


    <label for="psw"><b>SUPPLIER CITY</b></label>
    <input type="text" placeholder="Enter Supplier city" name="supp_city" required><br>


    <label for="psw-repeat"><b>DATE CREATED</b></label>
    <input type="text" placeholder="Date ceated" name="date_created" required>

        <label for="psw-repeat"><b>DATE UPDATED</b></label>
    <input type="text" placeholder="Date updated" name="date_updated" required><br>

           <label for="psw-repeat"><b>APPROVED MAKE</b></label>
    <input type="text" placeholder="approved make" name="app_mak" required>

           <label for="psw-repeat"><b>APPROVED MODEL</b></label>
    <input type="text" placeholder="Approved model" name="app_modl" required><br>

           <label for="psw-repeat"><b>SUPPLIER EMAIL</b></label>
    <input type="text" placeholder="Supplier email" name="supp_em" required>


       <label for="psw-repeat"><b>SUPPLIER CONTACT</b></label>
    <input type="text" placeholder="Supplier contact" name="supp_cont" required><br>
    <input type="submit" name="sub" value="submit">
    <a href="view.php">view list</a>

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
	