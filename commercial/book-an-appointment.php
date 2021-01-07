<?php    
$title="Book Show Room Visit";	
?>

<?php 
 $pgDesc="";
 $pgKeywords="";
 include 'header.php'; 
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

  <div class="container">	<h2 class="innerpageHeading">Book An Appointment</h2>
  <div class="my-5">
  
  
    
	<div class="formsection">
    <form action="send_mail_bookappointment.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
    <div class="my-4"><h5>Car</h5></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Model<span class="parsley-required" style="color:red">*</span></label>
      <select name="model"  class="form-control" aria-required="true" aria-invalid="false">
     <option value="Super Carry">Super Carry</option>
        <option value="Ecco Cargo">Ecco Cargo</option>
    </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Date  <span class="parsley-required" style="color:red">*</span></label>
    <input type="date" class="form-control" name="date" id="datepicker_today1" placeholder="Select Date" required="" data-parsley-mindate="<?php date(); ?>" data-parsley-required-message="Please Select a date for an apponintment">
    <div id="newdate1"></div>
    </div>
  	<div class="form-group col-md-4">
    <label for="inputAddress2">Time  <span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="time" id="inputAddress2" placeholder="Enter Time" required="true" data-parsley-required-message="Please Select a time for an apponintment">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">City  <span class="parsley-required" style="color:red">*</span></label>
   <select name="car_city"  class="form-control" aria-required="true" aria-invalid="false">
      <option value="Nashik">Nashik</option>
      <option value="Nagpur">Nagpur</option>


    </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Area  <span class="parsley-required" style="color:red">*</span></label>
  <input type="text" class="form-control" name="area" id="inputAddress2" placeholder="Enter your Area" required="" data-parsley-required-message="Please enter area name">
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
    <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required=""  data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[7-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
  </div>
   
  <div class="form-group col-md-4">
    <label for="inputAddress2">Select City<span class="parsley-required" style="color:red">*</span></label>
	<select class="form-control"  aria-required="true" aria-invalid="false" name="client_city">
    <option value="Nashik">Nashik</option>
	<option value="Nagpur">Nagpur</option>

    </select>
  </div>
    <div class="form-group col-md-8">
    	
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Your Meassage</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name="s_message"></textarea>
</div>
	</div>
</div>  
<div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div>
    <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
</form>
    </div>
</div>
	
    
  </div>
  
  
  
</main>
<script src='https://www.google.com/recaptcha/api.js'></script>
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

const picker2 = document.getElementById('datepicker_today1'); 
picker2.addEventListener('input', function(e){
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


<?php  
require_once('footer.php');
?>
