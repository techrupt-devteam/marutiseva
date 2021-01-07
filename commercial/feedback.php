<?php 
$title="Feedback | Maruti Suzuki Commercial Vehicle Showroom in Nashik, Nagpur, Nanded, Dhule | SEVA";	

$pgDesc="Customer Feedback for SEVA Maruti Suzuki Commercial Vehicle Showroom in Nashik, Nagpur, Nanded, Dhule. Super carry, Eeco Cargo, Tour H1, H2, S, V, M";

$pgKeywords="Maruti Suzuki, pickup vehicle, commercial truck, small pickup trucks, mini trucks, maruti commercial vehicle, Maruti Suzuki Commercial, commercial passenger vehicle, Maruti Suzuki storage vehicles, Maruti Passenger vehicle, Maruti Suzuki Super Carry, maruti Suzuki mini trucks, mini truck, Super carry, eeco cargo, maruti suzuki commercial in Nashik, maruti suzuki commercial in Nanded, maruti suzuki commercial in Dhule, maruti suzuki commercial in Nagpur";

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

            <label>Feedback</label>

            <textarea class="form-control" name="feedback" aria-label="With textarea"></textarea>

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

  <div class="row my-5">

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

      <div class="my-3"> <a href="#"> <img src="assets/images/car-insurance.jpg" class="resposive-img"> </a> </div>

      <h4><a href="#">Car Insurance</a></h4>

    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

      <div class="my-3"> <a href="#"> <img src="assets/images/old-car.jpg" class="resposive-img"> </a> </div>

      <h4><a href="#">Used Cars</a></h4>

    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

      <div class="my-3"> <a href="#"> <img src="assets/images/finance.jpg" class="resposive-img"> </a> </div>

      <h4><a href="#">Maruti Finance</a></h4>

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

</script>

<?php  



require_once('footer.php');



?>

