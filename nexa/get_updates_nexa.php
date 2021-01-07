<?php

include('connection.php');
      if (isset($_POST['submit']))
      {
      	
        $email_id=$_POST['email_id'];
      	$sql = "INSERT INTO nexa_get_update_details (email_id) VALUES ('$email_id')";
		
		if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        }else{

          echo "Error: " . $sql . "<br>" . $conn->error;

        }
      }

      header("Location:thank-you.php");

        
?>