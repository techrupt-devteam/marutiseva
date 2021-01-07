<?php 

$servername = "localhost";



$username = "marutise_new_sev";



$password = "9sBAOYro4e5y";



$dbname = "marutise_new_seva";
$conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection

         if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
     }


        $sql = "SELECT `color` from `nexa_product` where `car` ='".$_POST['car']."' AND `varient` = '".$_POST['varient']."'";
     
        	$result = mysqli_query($conn, $sql);

                echo "<option  value=''>Select Color</option>";
        	if ($result != null)
        	{
                while($row = $result->fetch_assoc())
                { 
                	
                    echo "<option value='$row[color]'>$row[color]</option>"; 
                }
            }else{
            	echo "<option  value=''>No Record</option>";
            }




?>