<?php
include('connection.php');
if(isset($_POST["city"])){
$city = $_POST["city"];
$is_active =1;

    $sql = "SELECT `area` FROM `locations` WHERE `is_active` = '1' AND `city` = '".$city."'";
    $result = $conn->query($sql);
    while($row=mysqli_fetch_assoc($result))
    { 
      echo "<option value='$row[area]'>$row[area]</option>"; 
    } 
}
?>