<?php    

$title="Feedback | Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded | SEVA";	

?>
<?php 

 $pgDesc="Feedback for SEVA Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded. For Cars s cross, XL6, Ciaz, Ignis & Baleno. Customer Feedback for Nexa Cars";

 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, feedback, customer feedback, feedback meaning";

include 'header.php'; 

?>
<style type="text/css">
.parsley-required {
	color: red;
}
.parsley-type {
	color: red;
}
.parsley-pattern {
	color: red;
}
.parsley-range {
	color: red;
}
.parsley-min {
	color: red;
}
</style>
<main>

<div class="container">
  <div class="my-5">
    <h2 class="innerpageHeading">Give us Feedback</h2>
    <div class="row">
    <div class="col-md-8 mx-auto">
    <div class="formsection">
      <form action="send_mail_feedback.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">

        <div class="">

          <div class="form-group">

            <label for="inputAddress">Full Name<span class="parsley-required" style="color: red">*</span></label>

            <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Full your Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter your name">

          </div>

        </div>

        <div class="">

          <div class="form-group">

            <label for="inputAddress2">Email<span class="parsley-required" style="color: red">*</span> </label>

            <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="true" data-parsley-type="email" data-parsley-required-message="Please Enter your email address">

          </div>

        </div>

        <div class="">

          <div class="form-group">

            <label>Feedback<span class="parsley-required" style="color: red">*</span></label>

            <textarea class="form-control" name="feedback" aria-label="With textarea" required="" data-parsley-required-message="Please Share your feedback"></textarea>

            <div class="form-group mt-3">

              <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>

              <div id="g-recaptcha-error"></div>

            </div>

          </div>

        </div>

        

        <!--<button type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Sign in</button>-->

        <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit Feedback">

      </form>
    </div>
    </div>
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
<?php  

require_once('footer.php');

?>
