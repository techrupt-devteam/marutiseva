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

    
            $sql ="SELECT `on_road_price`FROM `commercial_product` WHERE `car` = '".$_POST['car']."' AND `varient` = '".$_POST['varient']."'";
           
            $result = mysqli_query($conn, $sql);

        
               $row = mysqli_fetch_assoc($result);
                
                    
               
                    echo "Rs".' '.$row['on_road_price'];



?>