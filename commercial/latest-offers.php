<?php    
$title="Latest Car Offers | Maruti Suzuki Showroom in Nashik, Nagpur, Nanded, Dhule | SEVA";	

$pgDesc="Latest Car Offers, Deals and Big Discounts at SEVA Maruti Suzuki Commercial Showroom in Nashik, Nagpur, Nanded, Dhule. Maximum Benefits On Best Buy";

$pgKeywords="Maruti Suzuki, pickup vehicle, commercial truck, small pickup trucks, mini trucks, maruti commercial vehicle, Maruti Suzuki Commercial, commercial passenger vehicle, Maruti Suzuki storage vehicles, Maruti Passenger vehicle, Maruti Suzuki Super Carry, maruti Suzuki mini trucks, mini truck, Super carry, eeco cargo, maruti suzuki commercial in Nashik, maruti suzuki commercial in Nanded, maruti suzuki commercial in Dhule, maruti suzuki commercial in Nagpur, Latest offers, Car Offers, Car deals, Car Discounts";
 
include 'header.php'; 
 
include('connection.php');

$sql = "SELECT * FROM `commercial_offers`";
$result = $conn->query($sql);
?>

<main>

  <div class="container">
  <div class="my-5">
  <h2 class="innerpageHeading">Latest Offers</h2>
  <div class="row">
  	<?php 
          if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   ?>
	<div class="my-5 col-md-6 col-xl-4">
				 <a href="offer-enquiry.php?id=<?php echo $row['id'];?>"> 	
		<img src="https://marutiseva.com/<?php echo $row['image'];?>" class="resposive-img">
	</div>

<?php
      }
    }
    ?>

    
	
</div>
</div>
	
    
  </div>
  
  
  
</main>


<?php  
require_once('footer.php');
?>
