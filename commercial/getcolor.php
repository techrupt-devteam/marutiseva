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


         echo "<option value=''>Select Color</option>";
                        echo "<option value='White'>White</option>";
                        echo "<option value='White'>Black</option>";





?>