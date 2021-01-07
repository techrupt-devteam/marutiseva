<?php    
$title="Schedule Services | Maruti Suzuki Service Center in Nashik, Nagpur, Nanded, Dhule | SEVA";

include('connection.php');	
?>

<?php 
 $pgDesc="Book a Car Service and Car Repair Online at Seva Maruti Suzuki Service Center in Nashik, Nagpur, Nanded, Dhule. Maruti Suzuki Commercial Vehicles, Mini trucks & Tour cars";
 
 $pgKeywords="Maruti Suzuki, pickup vehicle, commercial truck, small pickup trucks, mini trucks, maruti commercial vehicle, Maruti Suzuki Commercial, commercial passenger vehicle, Maruti Suzuki storage vehicles, Maruti Passenger vehicle, Maruti Suzuki Super Carry, maruti Suzuki mini trucks, mini truck, Super carry, eeco cargo, maruti suzuki commercial in Nashik, maruti suzuki commercial in Nanded, maruti suzuki commercial in Dhule, maruti suzuki commercial in Nagpur";
 
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
  <h2 class="innerpageHeading">Schedule Service / Accident Repair</h2>
  	<!-- <h5>Maruti Suzuki Service Network</h5>
	<p>Yes, you can get lost in India, but chances are there will be a Maruti Suzuki Service Station close at hand. Wherever you go, across the length and breadth of this vast nation, our service network follows. It’s the widest service network. It’s the deepest service network. And, when you service 40,000 cars a day with an unmatched ‘first-time right’ score, we can say, hand on our heart, that you won’t find a better, more committed service network anywhere in the world. We’ve even got an award for it. We’ve been No.1 in the J D Power Customer Satisfaction Award for 14 years in a row. It’s a survey that rates the after-sales service experience, one that no other global car market leader has ever won. How do we pull this feat off? That’s because across our over 3048 nationwide service outlets, the only thing our 33000 strong trained service professional have on their mind is your delight.</p>

<p>Seva Automotive Pvt. Ltd. provides excellent service platform with more than 10+ Sales and Service Center all over the Maharashtra. The Infrastructure at Seva Automotive Nashik is fully equipped with latest State Of The Art 3S Facilities spread over a area of around 44,000 Sq.ft. encouraged by the devastating customer response. In that reason Seva Automotive rewarded by Maruti Suzuki for Best Performance in Customer Satisfaction Award year by year.</p> -->
    
	<div class="formsection">
    <form action="send_mail_scheduleservice.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
    <div class="my-4"><h5>Contact Information</h5></div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Full Name<span class="parsley-required" style="color: red">*</span></label>
    <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Full your Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$"  data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Email <span class="parsley-required" style="color: red">*</span></label>
    <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
  </div>
   <div class="form-group col-md-4">
    <label for="inputAddress2">Phone No. <span class="parsley-required" style="color: red">*</span></label>
    <input type="text" class="form-control" id="inputAddress2" name="phone_no"  placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Select City<span class="parsley-required" style="color: red">*</span></label>
	<select class="form-control city" id="city"  aria-required="true" aria-invalid="false" required="" name="city" onchange="check(event);">
	<option value=''>Select City</option>
    <?php 
    $sql = "SELECT city FROM commercial_locations GROUP BY city";
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
      <select class="form-control" data-val="true"  id="service" name="service" required="required">
        <option value="">Select Services</option>
        <option value="Free Service">Free Service</option>
        <option value="Paid Service">Paid Service</option>
        <option value="Accident Repair">Accident Repair</option>
      </select>
   </div>
  <div class="form-group col-md-4">
      <label for="inputPassword4">Service Required On<span class="parsley-required" style="color: red">*</span></label>
      <input type="text" class="form-control" id="datepicker_today" name="date"  placeholder="Date" required="true" data-parsley-mindate="<?php date();?>" data-parsley-required-message="Please Select a Date" onchange="handler(event);">
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

  </div>
   <div class="my-4"><h5>Vehicle Details</h5></div>
     <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Registration No<span class="parsley-required" style="color: red">*</span></label>
    <input type="text" class="form-control" id="inputAddress" name="reg_no" placeholder="Registration No" required="" data-parsley-required-message="Please Enter your vehicle no">
  </div>
  </div>  
  <div class="row">
    <div class="form-group col-md-8">
    	
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Your Message</span>
  </div>
  <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
</div>
	</div>

<div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div> 
  </div>
  	

  <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
</form>
    </div>
</div>
	
    
  </div>
  
  
  
</main>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 

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



var picker = document.getElementById('datepicker_today');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([0].includes(day)){
    e.preventDefault();
    this.value = '';
     document.getElementById('newdate').innerHTML = '<span style="color:red;">Sunday not Allowed.</span>';
  }else{
    document.getElementById('newdate').innerHTML = '';
  }
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
</script>
<?php  
require_once('footer.php');
?>
