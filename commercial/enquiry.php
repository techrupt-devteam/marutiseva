<?php    
$title="Enquiry Car Quote | Maruti Suzuki Showroom in Nashik, Nagpur, Nanded, Dhule | SEVA"; 

$pgDesc="Get A Car Quote or Enquiries about cars at SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. Reply to your inquiry in time";

$pgKeywords="Maruti Suzuki, pickup vehicle, commercial truck, small pickup trucks, mini trucks, maruti commercial vehicle, Maruti Suzuki Commercial, commercial passenger vehicle, Maruti Suzuki storage vehicles, Maruti Passenger vehicle, Maruti Suzuki Super Carry, maruti Suzuki mini trucks, mini truck, Super carry, eeco cargo, maruti suzuki commercial in Nashik, maruti suzuki commercial in Nanded, maruti suzuki commercial in Dhule, maruti suzuki commercial in Nagpur, enquiry, inquiry, get a quote, car quote";

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
</style>
<main>

  <div class="container"> <h2 class="innerpageHeading">Enquiry</h2>
  <div class="my-5">
  
  
    
  <div class="formsection">
    <form action="send_mail_enquiry.php" method="post" data-parsley-validate="parsley">
    <div class="my-4"><h5>Your Details</h5></div>
  <div class="form-row">
   
    <div class="form-group col-md-4">
    <label for="inputAddress2">Full Name  <span class="parsley-required" style="color:red">*</span></label>
     <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full your Name" required="true" data-parsley-required-message="Please Enter Name"  data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
    </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Email  <span class="parsley-required" style="color:red">*</span></label>

    <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Enter your Email " required="true" data-parsley-required-message="Please Enter Email Id" data-parsley-type="email">  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Phone No  <span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-required-message="Please Enter Contact No" data-parsley-pattern=^[6-9]\d{9}$  data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit">
    </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Description</label>
  <textarea class="form-control" name="desc" aria-label="With textarea"></textarea>
    </div>
  </div>
<div class="form-group">
          <p style="font-size:12px"><span class="parsley-required">*</span><input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="true" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                    I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
          
        <input type="submit" name="submit" class ="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
</form>
    </div>
</div>
  
    
  </div>
  
  
  
</main>


<?php  
require_once('footer.php');
?>
