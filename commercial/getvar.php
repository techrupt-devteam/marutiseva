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


        $data = date('d/m/Y h:i:s A');
        	$id = $_POST['id'];
            $sql = "SELECT * from `commercial_product` where `car` ='".$id."' ORDER BY `varient`";
           
        	$result = mysqli_query($conn, $sql);

                echo "<option  value=''>Select Variant</option>";
        	if ($id != null)
        	{
                while($row = $result->fetch_assoc())
                { 
                	
                    echo "<option value='$row[varient]'>$row[varient]</option>"; 
                }
            }else{
            	echo "<option  value=''>No Record</option>";
            }






?>