<?php    

$title="Nexa Finance | Car Loan | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA";	

?>



<?php 

 $pgDesc="Get a Car Loan safe & secure from Maruti NEXA Finance at SEVA Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded. All your Car Finance needs under one roof.";

 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, Car offers, Car quote, CAr discount, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Nexa Cars, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA, Maruti Nexa, Nexa Car, Maruti Nexa, Suzuki Nexa, nexa showroom, nexa showroom near me, nexa car price, nexa new car, nexa price, nexa experience, nexa near me, maruti nexa price, maruti nexa cars, maruti nexa showroom near me";

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



  <div class="container">

  <div class="my-5">

  <h2 class="innerpageHeading">Nexa Finance</h2>

  	

	<p>Nexa Suzuki Finance helps customers realize their dream of owning a car, with deals right at the dealership. Starting from choosing the right financier, until the completion of loan formalities, we are there for our customers at every step of the auto finance process.</p>













    <div class="my-4">

    <h5>Advantages Of Nexa Finance</h5>

    

<p>One stop shop for customers’ needs: Nexa Suzuki Finance offers a customer, the convenience of a one stop shop for all his vehicle finance related needs – the customer can complete all finance related formalities at the dealership i.e. buying car, availing finance – all under the same roof.</p>



<p>Wide Choice of financier: Nexa Suzuki Finance has a tie-up with 34 finance partners like Sundaram Finance Car Loan, Shriram Car Finance and Bajaj Finance Car Loan, who have a pan-India presence. This provides a wide variety of choices to the customers, who can avail finance from any of the partners, according to their needs and profiles.</p>



<p>Special offers and benefits: Nexa Suzuki Finance negotiates with its finance partners to launch special sales promotion schemes like low down payment schemes, low interest rates and other promotional offers that are not available otherwise. We also help customers buy cars from the wide network of Nexa Suzuki dealers who help customers with the best car finance interest rates.</p>



<p>Creating customer delight: Nexa Finance, through the finance partners, endeavors to create customer delight by providing the best car finance, financier for every profile and geography, better interest rate, processing time etc.</p>

    

	</div>

    <div class="formsection">

     <form action="send_mail_finance.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">

    <div class="my-4"><h5>Contact Information</h5></div>

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

      <label for="inputEmail4">Annual Income (Rs.)<span class="parsley-required" style="color:red">*</span></label>

      <select class="form-control" name="annual_income" required="">

      <option value="1-2 lakhs">1-2 lakhs</option>

      <option value="2-3 lakhs">2-3 lakhs</option>

      <option value="3-4 lakhs">3-4 lakhs</option>

      <option value="4-5 lakhs">4-5 lakhs</option>

      <option value="5-6 lakhs">5-6 lakhs</option>

      <option value="6-7 lakhs">6-7 lakhs</option>

      <option value="7-8 lakhs">7-8 lakhs</option>

      <option value="8-9 lakhs">8-9 lakhs</option>

      <option value="9-10 lakhs">9-10 lakhs</option>

      <option value="10-11 lakhs">10-11 lakhs</option>

      <option value="11-12 lakhs">11-12 lakhs</option>

      <option value="12+ lakhs">12+ lakhs</option>

      </select>

    </div>

    <div class="form-group col-md-4">

      <label for="inputEmail4">Purchase Time Frame<span class="parsley-required" style="color:red">*</span></label>

      <select class="form-control" name="purchase_time" required="">

      <option value="Immidiate">Immidiate</option>

      <option value="2 weeks">2 weeks</option>

      <option value="3 weeks">3 weeks</option>

      <option value="4 weeks">4 weeks</option>

      <option value="4-6 weeks">4-6 weeks</option>

      <option value="6+ weeks">6+ weeks</option>

      </select>

    </div>

    

  

    

    
<div class="form-group col-md-8">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Your Message</span>
      </div>
        <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
    </div> 
    </div>
    

  </div>

   

    
<div class="form-row">
  <div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div>
  <div class="form-group col-md-8">
    <div class="form-check mt-3">
        <input type="checkbox" class="form-check-input" name="conditions" required="true" id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
        <label class="form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
      </div>
    </div>
  </div> 

  <!--<button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Submit</button>-->

   <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">

</form>

    </div>

</div>

	

    <div class="row my-5">

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

    <div class="my-3">

    <img src="assets/images/car-insurance.jpg" class="resposive-img">

    </div>

    <h4>Car Insurance</h4>

    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

    <div class="my-3">

    <img src="assets/images/old-car.jpg" class="resposive-img">

    </div>

    <h4>Used Cars</h4>

    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 text-center">

    <div class="my-3">

    <img src="assets/images/finance.jpg" class="resposive-img">

    </div>

    <h4>Nexa Finance</h4>

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

