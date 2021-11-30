<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
<?php 

if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'store';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            	$partno = $_POST['partno'];
				$partdescription = $_POST['partdescription'];
				$supp_name = $_POST['supp_name'];
				$supp_code = $_POST['supp_code'];
				$supp_address = $_POST['supp_address'];
				$supp_city = $_POST['supp_city'];
				$date_created = $_POST['date_created'];
				$date_updated = $_POST['date_updated'];
				$app_mak = $_POST['app_mak'];
				$app_modl = $_POST['app_modl'];
				$supp_em = $_POST['supp_em'];
				$supp_cont = $_POST['supp_cont'];


            $sql = "UPDATE materials ". "SET partdescription = $partdescription ". "WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }


      ?>
      
   </body>
</html>









 