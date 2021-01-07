<?php    

$title="VAS | Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded | SEVA";  

?>



<?php 

 $pgDesc="Value Added Services from SEVA Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded. VAS For your Nexa Cars s cross, XL6, Ciaz, Ignis & Baleno.";

 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, VAS, Value Added Services";

include 'header.php'; 
include('connection.php');
date_default_timezone_set("Asia/Kolkata");

$data_ = date('d/m/Y h:i:s A');

$sql = "SELECT * FROM `nexa_value_add_services`";

$results_per_page = 10;
$result = $conn->query($sql);
$number_of_result = mysqli_num_rows($result);  
$number_of_page = ceil ($number_of_result / $results_per_page);  
if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
     $page_first_result = ($page-1) * $results_per_page;  
?>


<style type="text/css">
  .parsley-required{
    color: red;
  }
  .parsley-type{
    color:red;
  }
  .parsley-pattern{
    color: red;
  }
  .parsley-range{
    color: red;
  }
  .parsley-min{
    color: red;
  }
</style>






<main>
<div class="value-addedBanner">
     <img src="assets/images/value-added-services.jpg" class="resposive-img">
     <h2>Value Added Services</h2>
</div>
 
  <div class="my-5">
   <div class="container">
    <div class="row">
  <div class="col-md-8 col-sm-12 mx-auto">
  <h6 class="text-center">Seva offers an array of value added services with treatments like Dura Coat, Anti-Rust, Body Wax Top, Interior Cleaning, AC Disinfectant, Car Sanitization & more to keep your Car shining & safe always.</h6>
  </div>
</div>
</div>
<div class="value-addded-service">
 <div class="row">
  <?php 
          if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    
   ?>

 <div class="col-lg-4 col-md-6 col-sm-4 mb-4">
 <div class="value-added-image">
  <img src="https://marutiseva.com/<?php echo $row['video_banner'];?>" class="resposive-img"> 
   <a class="video" video-url="<?php echo $row['video_link']?>"><i class="mdi mdi-play-box-outline"></i></a>
 </div>
 <div class="value-added-heading d-lg-flex justify-content-between">
  <div class="va-heading">
      <?php echo $row['service_name'];?>
       <span> <?php echo $row['price'];?></span>
  </div>   
  <a href="schedule-value-add-services.php?id=<?php echo $row['id']?>">Book Now</a>
 </div>
 <p class="va-desc"><?php echo $row['description'];?></a></p>
 </div> 

 <?php
      }
    }
    ?>
 </div>  
 <div class="img-border"><img src="assets/images/border-bottom.jpg"> </div>
 <nav aria-label="Page navigation example" class="example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php for($page = 1; $page<= $number_of_page; $page++) {  ?>
    <li class="page-item"><a class="page-link" href="value-added-services.php?page=<?php echo $page ?>"><?php echo $page;?></a></li>
    <?php } ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>

  

  

  

</main>



<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script>

<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<script src="assets/js/video.popup.js"></script>
 <script>
            $(function(){
                $(".video").videoPopup();
            });
</script>
<?php  

require_once('footer.php');

?>

