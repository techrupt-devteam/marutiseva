<?php    
$title="Car Offers | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA";	
?>

<?php 
 $pgDesc="Latest Car Offers, Deals and Big Discounts at SEVA Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded. Maximum Benefits On S Cross, Baleno, Ignis, XL6 & Ciaz";
 
 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Nexa Cars, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA, Maruti Nexa, Nexa Car, Maruti Nexa, Suzuki Nexa, nexa showroom, nexa showroom near me, nexa car price, nexa new car, nexa price, nexa experience, nexa near me, maruti nexa price, maruti nexa cars, maruti nexa showroom near me";
 
 include 'header.php'; 
 include('connection.php');
$sql = "SELECT * FROM `nexa_offers`";
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

<script src="assets/js/jquery1.12.0-min.js"></script> 

<?php  
require_once('footer.php');
?>
