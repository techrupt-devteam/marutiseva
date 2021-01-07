<?php

include('connection.php');
 $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      if (isset($_POST['submit']))
      {
      	
        $email_id=$_POST['email_id'];
      	$sql = "INSERT INTO commercial_get_updates_details ( email_id) VALUES ('$email_id')";
		
		if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        }else{

          echo "Error: " . $sql . "<br>" . $conn->error;

        }
      }

      header("Location:thank-you.php");

        
?>