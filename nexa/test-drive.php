<?php    

$title="Test Drive | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA";	

?>



<?php 

 $pgDesc="Book a Test Drive of your Favorite NEXA Car at Seva Maruti Suzuki NEXA car Showroom in Nashik, Nagpur, Nanded. S Cross, XL6, Ciaz, Ignis & Baleno Test Drive.";

 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA Car Test Drive, Test Drive";

 include 'header.php'; 

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>

<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
$( document ).ready(function() {
    $("#datepicker_today").datepicker({
        format: "yyyy-mm-dd" ,
        daysOfWeekDisabled: [0],
        startDate:'tomorrow',
        autoclose:'true',
      }).val();
  });
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

var picker = document.getElementById('datepicker_today1');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([0].includes(day)){
    e.preventDefault();
    this.value = '';
     document.getElementById('newdate1').innerHTML = '<span style="color:red;">Sunday not Allowed.</span>';
  }else{
    document.getElementById('newdate1').innerHTML = '';
  }
});

</script>



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

<div class="innerpageBanner">

<img src="assets/images/test-drive_final.jpg" class="resposive-img" />

<h2 class="innerpageHeading">Book A Test Drive </h2>

</div>

  <div class="container">

  <div class="my-5">

	<p>  At NEXA, we look for opportunities to serve you with the best. The NEXA experience includes our premium cars, XL6, S-Cross, Ciaz, Baleno, and Ignis. We also indulge you with lifestyle experiences across Fashion, Music, and Travel categories. Our network of NEXA Service Centers provides the care you and your car deserve. You can also explore the NEXA world with our loyalty card, and enjoy a range of exclusive benefits.  </p>

    

	<div class="formsection">

    <form action="send_mail_testdrive.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">

    <div class="my-4"><h5>Car Details</h5></div>

  <div class="form-row">

    <div class="form-group col-md-4">

      <label for="inputEmail4">Model<span class="parsley-required" style="color:red">*</span></label>

      <select name="model"  class="form-control" aria-required="true" aria-invalid="false" required="">

     <option value="Ignis">Ignis</option>

        <option value="Baleno">Baleno</option>

        <option value="Ciaz">Ciaz</option>

        <option value="XL6">XL6</option>

    </select>

    </div>

    <div class="form-group col-md-4">

      <label for="inputPassword4">Test Drive Date<span class="parsley-required" style="color:red">*</span></label>

      <input type="text" class="form-control" name="td_date" id="datepicker_today" placeholder="Test Drive Date" required="" data-parsley-mindate="<?php date(); ?>" data-parsley-required-message="Please Select A Date for test drive">
<div id="newdate1"></div>
    </div>

    <div class="form-group col-md-4">

      <label for="inputPassword4">Test Drive Time<span class="parsley-required" style="color:red">*</span></label>

      <input type="text" class="form-control" name="td_time" id="time" placeholder="Test Drive Time" required="" data-parsley-required-message="Please Select test drive time">

    </div>

  </div>

   <div class="my-4"><h5>Your Details</h5></div>

     <div class="form-row">

  <div class="form-group col-md-4">

    <label for="inputAddress">Full Name<span class="parsley-required" style="color:red">*</span></label>

    <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full your Name" required="" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">

  </div>

  <div class="form-group col-md-4">

    <label for="inputAddress2">Email <span class="parsley-required" style="color:red">*</span></label>

    <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Enter your Email " required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">

  </div>

   <div class="form-group col-md-4">

    <label for="inputAddress2">Phone No. <span class="parsley-required" style="color:red">*</span></label>

    <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required="" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">

  </div>

  <div class="form-group col-md-4">

    <label for="inputAddress2">Select City<span class="parsley-required" style="color:red">*</span></label>

	<select class="form-control" name="city"  aria-required="true" aria-invalid="false" required="">

    <option value="Nashik">Nashik</option>

	<option value="Nagpur">Nagpur</option>

    <option value="Nanded">Nanded</option>

    </select>

  </div>

    <div class="form-group col-md-8">

    	

<div class="input-group">

  <div class="input-group-prepend">

    <span class="input-group-text">Your Meassage</span>

  </div>

  <textarea class="form-control" name="client_message" aria-label="With textarea"></textarea>

</div>

	</div>

</div>  
<div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div>
  <!--<button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Submit</button>-->

    <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">



</form>

    </div>

</div>

	

    

  </div>

  

  

  

</main>



<?php  

require_once('footer.php');

?>

