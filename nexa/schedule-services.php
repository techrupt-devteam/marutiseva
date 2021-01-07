<?php    
$title="Schedule Services | Maruti Suzuki NEXA Service Center in Nashik, Nagpur, Nanded | SEVA";	
include('connection.php');
?>

<?php 
 $pgDesc="Book a Car Service and Car Repair Online at Seva Maruti Suzuki NEXA Service Center in Nashik, Nagpur, Nanded. S Cross, XL6, Ciaz, Ignis & Baleno Service and Repair Schedule";
 
 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, Service Schedule, Schedule Services, Book Service";
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
<div class="innerpageBanner">
<img src="assets/images/test-drive_final.jpg" class="resposive-img" />
<h2 class="innerpageHeading">Schedule Service / Accident Repair</h2>
</div>
  <div class="container">
  <div class="my-5">
  <div class="formsection">
     <form action="send_mail_scheduleservice.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
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
    <select class="form-control city" required="true"  aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);" data-parsley-required-message="Please select city">
     <option value=''>Select City</option>
    <?php 
    $sql = "SELECT city FROM nexa_locations GROUP BY city";
    $result = $conn->query($sql);
    while($row=mysqli_fetch_assoc($result))
    { 
      echo "<option value='$row[city]'>$row[city]</option>"; 
    } 
    ?>
  </select>
  </div>
   <div class="form-group col-md-4" id="response">
     <label>Workshop Location<span class="parsley-required" style="color:red">*</span></label>

      <select class="form-control" name="area" required="" id="area"  aria-required="true" aria-invalid="false" data-parsley-required-message="Please select area">
      <option value=''>Select area</option>
      </select>
    </div>

  <div class="form-group col-md-4">
      <label>Service Type<span class="parsley-required" style="color:red">*</span></label>
      <select class="form-control" data-val="true"  id="service" name="service" required="required" data-parsley-required-message="Please select service type">
        <option value="">Select Services</option>
        <option value="Free Service">Free Service</option>
        <option value="Paid Service">Paid Service</option>
        <option value="Accident Repair">Accident Repair</option>
      </select>
   </div>
  
  <div class="form-group col-md-4">
      <label for="inputPassword4">Service Required On<span class="parsley-required" style="color:red">*</span></label>
      <input type="text" class="form-control" name="service_date" id="datepicker_today" placeholder="Date" required="" data-parsley-mindate="<?php date();?>" data-parsley-required-message="Please Select a Date" onchange="handler(event);">
      <div id="newdate"></div>
    </div>
    
    <div class="form-group col-md-4">
    <label for="inputAddress2">Preffered  Time <span class="parsley-required" style="color:red">*</span></label>
    <select class="form-control" name="time" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please Select a preffered time">
        <option value="">Select Time</option>
        <option value="9am - 9.30am">9am - 9.30am</option>
        <option value="9.30am - 10am">9.30am - 10am</option>
        <option value="10am - 10.30am">10am - 10.30am</option>
        <option value="10.30am - 11am">10.30am - 11am</option>
        <option value="11am - 11.30am">11am - 11.30am</option>
        <option value="11.30am - 12am">11.30am - 12am</option>
        <option value="12am - 12.30pm">12am - 12.30pm</option>
        <option value="12.30pm - 1pm">12.30pm - 1pm</option>
        <option value="1pm - 1.30pm">1pm - 1.30pm</option>
        <option value="1.30pm - 2pm">1.30pm - 2pm</option>
        <option value="2pm - 2.30pm">2pm - 2.30pm</option>
        <option value="2.30pm - 3pm">2.30pm - 3pm</option>
        <option value="3pm - 3.30pm">3pm - 3.30pm</option>
        <option value="3.30pm - 4pm">3.30pm - 4pm</option>
        <option value="4pm - 4.30pm">4pm - 4.30pm</option>
        <option value="4.30pm - 5pm">4.30pm - 5pm</option>
        <option value="5pm - 5.30pm">5pm - 5.30pm</option>
        <option value="5.30pm - 6pm">5.30pm - 6pm</option>
        </select>     
  </div>
  <div class="form-group col-md-4" style="display: none" id="address">
    <label for="inputAddress">Pincode<span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="address" id="pincode" data-parsley-required-message="Please Enter your pincode">
  </div>

       <div class="form-group col-md-4" id="pickup">

    <label for="inputPassword4">Please Pickup My Car<span class="parsley-required" style="color: red">*</span></label>

    <div class="w-100 mt-2">

      <div class="custom-control custom-radio custom-control-inline">

    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="Yes" required data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?" oncheck="feedtype_change()">

    <label class="custom-control-label" for="customControlValidation2">Yes</label>

  </div>

  <div class="custom-control custom-radio custom-control-inline">

    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" value="No" required data-parsley-errors-container="#element" data-parsley-required-message="Please select car pickup or not?">

    <label class="custom-control-label" for="customControlValidation3">No</label>

  </div>
          <div id="element"></div>


</div>

    </div>

    
  </div>
   <div class="my-4"><h5>Car Details</h5></div>
     <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Registration No<span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="reg_no" id="inputAddress" placeholder="Registration No" required="" data-parsley-required-message="Please Enter your vehicle no">
  </div>
 
  
    <div class="form-group col-md-8">
    	
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Your Message</span>
  </div>
  <textarea class="form-control" name="client_message" aria-label="With textarea"></textarea>
</div>
	</div>
</div> 
<div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div> 
	<p><a href="schedule-service-terms.php" style="color: #3e4095;">Terms & Conditions Apply</a></p>

  <!--<button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Sign in</button>-->
   <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
</form>
    </div>
</div>
	
    
  </div>
  
  
  
</main>
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
        datesDisabled: ['2020-11-14', '2020-11-15','2020-11-16'],
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


$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="Yes")
{
$("#address").show();
$("#pincode").prop('required',true);

}
else
{
$("#address").hide();
$("#pincode").prop('required',false);

}
});
});

function handler(e){
  var date=e.target.value;
  var city = $("#city").val();
   $.ajax({
    url: "demo_test.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';

      }
  }});
}

function check(e){
  var city=e.target.value;
  var date = $("#datepicker_today").val();
   $.ajax({
    url: "demo_test.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';

      }
  }});
}

$(document).ready(function(){
        $("select.city").change(function(){
            var selectedCity = $(".city option:selected").val();
            $.ajax({
                type: "POST",
                url: "process-request.php",
                data: { city : selectedCity } 
            }).done(function(data){
                $("#area").html(data);
            });
        });
    });

function max_date(e){
  var service_date=e.target.value;
  var current_date = $("#datepicker_today").val();
      if(service_date<current_date)
      {
        $("#datepicker_today1").val("");
        document.getElementById('newdate1').innerHTML = '<span style="color:red;">Please Select date greater than booking date.</span>';
      }else{
        document.getElementById('newdate1').innerHTML = '';

      }
  
}
$(document).ready(function(){
  $("#city").change(function(){
    if($(this).val()=="Nanded"){
      $("#pickup").css("display", "none");
       $("#customControlValidation2").prop('required',false);
       $("#customControlValidation3").prop('required',false);
    }else{
      $("#pickup").css("display", "block");
    }
    });
    });

</script>

<?php  
require_once('footer.php');
?>
