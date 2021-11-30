<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="store";

$partno = $_GET['partno'];

$con=mysqli_connect($servername,$username,$password,$dbname);
if ($con->connect_error) {
	die("connection failed:".$con->connect_error);
}
$sqli="DELETE FROM materials WHERE partno='".$partno."'";
$result=mysqli_query($con,$sqli);
if ($result) {
	echo "deleted sucessfully";
}
 ?>
<a href="statnview.php">view all</a>