<!DOCTYPE html>
<html lang="en">
<head><meta charset="windows-1252">
<script>
$(document).ready(function() {
 // Get current page URL
 var url = window.location.href;
 // remove # from URL
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 // remove parameters from URL
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 // select file name
 url = url.substr(url.lastIndexOf("/") + 1);

 // If file name not avilable
 if(url == ''){
 url = 'index.html';
 }

 // Loop all menu items
 $('.menu li').each(function(){
  // select href
  var href = $(this).find('a').attr('href');
  // Check filename
  if(url == href){
   // Select parent class
   var parentClass = $(this).parent('ul').attr('class');

   if(parentClass == 'submenu'){

    // Add class
    $(this).addClass('subactive');
    $(this).parents('.menu li').addClass('active new');
   }else{
    // Add class
    $(this).addClass('active new');
   }

  }
 });
});
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="keywords" content="<?php echo $pgKeywords ?>">
<meta name="description" content="<?php echo $pgDesc ?>">
<title><?php echo $title; ?></title>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/custom.css">
<!-- Custom Icon Fonts -->
<link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7NG7XN');</script>
<!-- End Google Tag Manager -->
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7NG7XN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="preloader">
    <div id="preloader__status">&nbsp;</div>
</div>

<div class="topbar d-none d-md-block">
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-sm-6 align-self-center">
    <div class="topbar-left text-left">
      <ul class="list-inline">
        <li class="topbar_item topbar_item_type-contact_timing">
          <img src="assets/images/phone.svg" style="width: 20px;"/>
          <a href="tel:8390446644">+91 83904 46644</a>

        </li>
          <li class="topbar_item topbar_item_type-email">
            <img src="assets/images/mail.svg" style="width: 20px;"/>
            <a href="mailto:enquiry@marutiseva.com">enquiry@marutiseva.com</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-6 col-sm-6">
      <div class="topbar-right text-right">
        <ul class="list-inline">
            <li>
              <a href="https://truevalue.marutiseva.com/" class="trueValuelogo">
                <img src="assets/images/true-value.svg"/>
              </a>
            </li>
            <li>
              <a href="http://marutiseva.com" class="nexaLogo">
                <img src="assets/images/arena.svg"></a>
              </li>
            <li>
              <a href="http://commercial.marutiseva.com" class="nexaLogo">
                <img src="assets/images/commercial.svg"></a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<header class="sticky-top">
  <div class="menu-container">
  <a href="http://marutiseva.com" class="sevaLogo">
    <!-- <img src="assets/images/seva-logo.png" > -->
    <img src="assets/images/seva-white.svg" >
  </a>
  <a href="http://nexa.marutiseva.com" class="logo"><img src="assets/images/nexa-logo.png"></a>

    <div class="menu">
      <ul class='menu'>
        <li><a href="#">About Us </a>
        <ul class='submenu'>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-team.php">Our Team</a></li>
            <!--<li><a href="talk-with-ceo.php">Talk With CEO</a></li>-->
            <li><a href="our-nexa-showrooms.php">Our Presence</a></li>  
         </ul>
        
        </li>
        <li><a href="#">Our Products</a>
          <ul>
            
            <li><a href="#" style="border-bottom:none"></a>
        		<ul class='submenu'>
                <li>
                <a href="ciaz.php">
                <img src="assets/images/ciazzz-dd.png" class="resposive-img">
                <img src="assets/images/ciaz-name.png">
                </a>
                </li>
		         </ul>      
            </li>
            <li><a href="#" style="border-bottom:none"></a>
              <ul class='submenu'>
                <li>
                <a href="baleno.php">
                <img src="assets/images/baleno_dd.jpg" class="resposive-img">
                <img src="assets/images/baleno-name.png">
                </a>
                </li>
		         </ul>  
            </li>
            <li><a href="#" style="border-bottom:none"></a>
              <ul class='submenu'>
                <li>
                <a href="ignis.php">
                <img src="assets/images/igniss-dd.png" class="resposive-img">
                <img src="assets/images/ignis-name.png">
                </a>
                </li>
		         </ul> 
            </li>
            <li><a href="#" style="border-bottom:none"></a>
            <ul class='submenu'>
                <li>
                <a href="xl6.php">
                <img src="assets/images/XL6-dd.jpg" class="resposive-img">
                <img src="assets/images/XL6-name.png">
                </a>
                </li>
		         </ul>
            </li>

            <li><a href="#" style="border-bottom:none"></a>
            <ul class='submenu'>
                <li>
                <a href="s-cross.php">
                <img src="assets/images/scross-dd.png" class="resposive-img">
                <img src="assets/images/scross-name.png">
                </a>
                </li>
             </ul>      
            </li>
            
            <div class="clearfix"></div>
            <div class="display_table">
            <a class="bookTestdrive" href="enquiry.php">Enquire Now</a>
            <a class="bookTestdrive" href="test-drive.php">Request a Test Drive</a>
            </div>
          </ul>
        </li>
        
        
        <li><a href="#">Workshop </a>
        <ul class='submenu'>
            <!--<li><a href="#">Accident Repair</a></li>-->
            <li><a href="schedule-services.php">Schedule Service / Accident Repair</a></li>
            <li><a href="our-nexa-workshops.php">Nexa Workshop</a></li>
            </ul>
        </li>
        <li><a href="#">Value Added Services</a>
        <ul class="normal-sub submenu" style="display: none;">
        	<li><a href="value-added-services.php">Value Added Services</a></li>
          <li><a href="nexa-insurance.php">Nexa Insurance</a></li>
            <li><a href="nexa-finance.php">Nexa Finance</a></li>
            <!--<li><a href="nexa-genuine-parts.php">Nexa Genuine Parts</a></li>-->
        </ul>
        
        </li>

		<li><a href="latest-offers.php">Latest Offers</a></li>
			<li><a href="enquiry.php">Enquiry</a></li>
     	<!-- <li><a href="#" class="trueValuelogo" style="background:#FFF">
            <img src="assets/images/truevalue-logo.png" > </a>
        </li>
        <li>
            <a href="http://marutiseva.com/demo/" class="trueValuelogo" style="background:#FFF"><img src="assets/images/maruti-arena.png" ></a>
        </li>
        <li>
            <a href="http://commercial.marutiseva.com/demo/" class="trueValuelogo" style="background:#FFF"><img src="assets/images/maruti-commercial.png" ></a>
        </li> -->

      </ul>
    </div>
    
  </div>
  
  <div class="get-quotePopup modal fade" id="enquiryPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="send_mail_enquiry.php" method="post" data-parsley-validate="parsley">
      <div class="modal-body">
          <div class="form-group">
            <label for="First Name" class="col-form-label">Full Name<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="first-name" name="full_name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
            <input type="hidden" class="form-control" id="model" name="model" value="alto-k10">

          </div>
          <div class="form-group">
            <label for="Email" class="col-form-label">Email<span class="parsley-required">*</span></label>
            <input type="email" class="form-control" id="Email" name="email" required="true" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
          </div>
          <div class="form-group">
            <label for="Phone" class="col-form-label">Phone<span class="parsley-required">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone_no" required="true" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[7-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
          </div>

          <div class="form-group">
            <label for="Phone" class="col-form-label">Description<span class="parsley-required">*</span></label>
            <input type="tel" class="form-control" id="desc" name="desc" required="true">
          </div>
         
          <div class="form-group">
          <p style="font-size:12px"><span class="parsley-required">*</span><input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="true" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                    I agree that by clicking the ‘Continue’ button below, I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
          
       
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <input type="submit" name="submit" class="btn btn-primary button-purple">
        </form>
      </div>
    </div>
  </div>
  
</header>


<nav class="cd-stretchy-nav">
    <a class="cd-nav-trigger" href="#0">
			<span aria-hidden="true"></span>
		</a>
    <ul>
      <li><a href="online-booking.php"><span>Book Your Vehicle </span></a></li>
      <li><a href="schedule-services.php"><span>Book Your Service</span></a></li>
      <li><a href="enquiry.php"><span>Enquiry</span></a></li>
    </ul>
    <span aria-hidden="true" class="stretchy-nav-bg"></span>
  </nav>



  

