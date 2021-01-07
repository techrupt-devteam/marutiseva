<style type="text/css">
  .parsley-custom-error-message{
    color: white;
  }
</style>
<footer>
  <div class="d-flex justify-content-center">
     <div class="footer-newletter">

      <h2>Get Updates With <br />

        Latest News and offers</h2>

      <p>Promotions, new products and sales. Directly to your inbox.</p>

        <form method="post" action="get_updates.php" data-parsley-validate="true" >
      <div class="newsletter-form input-group pl-5">
        <input type="text" placeholder="Enter Email Address" name="email_id" class="col-10" data-parsley-error-message="Please enter valid email." data-parsley-pattern="^([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))$" required="true" data-parsley-errors-container="#element">

        <div class="input-group-append">

          <button name="submit"><i class="mdi mdi-chevron-right"></i></button>
        </div>
        <div id="element"></div>
      </div>
      </form>

    </div>
  </div>
  <div class="footer-links container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <div class="mainlinks">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-team.php">Our Team</a></li>
            <li><a href="our-showrooms.php">Our Presence</a></li>            
            <li><a href="feedback.php">Feedback</a></li>
			     <li><a href="latest-offers.php">Latest Offers</a></li>
           <li><a href="disclaimer.php">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-3">
            <div class="mainlinks">
              <ul>
                <li><a href="#"> Goods Carrier</a>
                  <ul>
                    <li><a href="super-carry.php">Super Carry</a></li>
                    <li> <a href="eeco-cargo.php">EECO Cargo</a></li>
					<!--<li> <a href="dzire.php">Dzire</a></li>
					<li> <a href="ertiga.php">Ertiga</a></li>-->
                  </ul>
                </li>
              </ul>

              <ul>
                <li><a href="#">Passenger Carrier</a>
                  <ul>
                   <li><a href="tour-H1.php">Tour H1</a></li>
                <li><a href="tour-H2.php">Tour H2</a></li>
                <li><a href="tour-M.php">Tour M</a></li>
                <li><a href="tour-S.php">Tour S</a></li>
                <li><a href="tour-V.php">Tour V</a></li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
      
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="mainlinks">
          <h4>Services</h4>
          <ul>
            <li><a href="schedule-services.php">Schedule Service / Accident Repair</a></li>
            <li><a href="http://marutiseva.com">Maruti Suzuki Arena</a></li>
            <li><a href="http://nexa.marutiseva.com">Nexa</a></li>
            <!--<li><a href="http://truevalue.marutiseva.com">True Value</a></li>-->

          </ul>
        </div>
      </div>
    
    <div class="col-lg-3">
        <div class="mainlinks">
          <h4>Head Office</h4>
          <ul>
            <li style="color:#FFF">X-46, MIDC,Ambad, Nashik, Maharashtra 422010 Nashik</li>
            <li><a href="tel:8390446644">+91 83904 46644</a></li>
            <li><a href="mailto:enquiry@marutiseva.com">enquiry@marutiseva.com</a></li>
          </ul>
        
        </div>
        <div class="social-media">
          <h4>Follow Us on</h4>
          <ul>
            <li><a href="https://www.facebook.com/sevamaruti/?fref=ts" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
            <li><a href="https://twitter.com/sevaauto" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/seva_automotive/" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
          </ul>
        </div> 
      </div>      
          </div>
    
  </div>
  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="clearfix">
        <div class=" text-center"> © 2020 Seva Maruti Suzuki Commercial | Design by<a href="http://hohtechlabs.com/" target="_blank">HOH Tech Labs Pvt. Ltd.</a></div>
      </div>
    </div>
  </div>
</footer>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

<script src="assets/js/popper.min.js"></script>

<script src="assets/lib/js/bootstrap.min.js"></script> 

<script src="assets/lib/js/bootstrap.bundle.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 

<script src="assets/js/car-carousel.js" type="text/javascript"></script> 

<script src="assets/js/megamenu.js"></script> 


<script src="assets/js/lightbox.js"></script>

<script src="assets/js/bootstrap-datepicker.min.js"></script>

<script src="assets/js/parsley.js"></script>
<script src="assets/js/main.js"></script>

<script>
  jQuery(window).on('load', function() {
  jQuery('#preloader__status').fadeOut();
  jQuery('#preloader').delay(350).fadeOut('slow'); 
  jQuery('body').delay(350).css({'overflow':'visible'});
})


      $(function() {

        $("#datepicker").datepicker({ format: "dd/mm/yyyy",autoclose: true}).val();

        $("#datepicker1").datepicker({ format: "dd/mm/yyyy",autoclose: true}).val();

        var cssSmall = {

          width: 100,

          height: 175,

          marginTop:195

        };

        var cssMedium = {

          width: 150,

          height: 215,

          marginTop: 165

        };

        var cssLarge = {

          width:500,

          height:345,

          marginTop: 0

        };

        var aniConf = {

          queue: false,

          duration: 1000

        };



        $('#carousel')

          .children().css(cssSmall)

          .eq(1).css(cssMedium)

          .next().css(cssLarge)

          .next().css(cssMedium);

          

        $('#carousel').carouFredSel({

          width: '100%',

          height: 290,

          items: 5,

          scroll: {

            items: 1,

            duration: aniConf.duration,

            onBefore: function( data ) {                

              

              //  0 [ 1 ] 2  3  4

              data.items.old.eq(1).animate(cssSmall, aniConf);

              

              //  0  1 [ 2 ] 3  4

              data.items.old.eq(2).animate(cssMedium, aniConf);

              

              // 0  1  2  [ 3 ] 4

              data.items.old.eq(3).animate(cssLarge, aniConf);

              

              //  0  1  2  3 [ 4 ]

              data.items.old.eq(4).animate(cssMedium, aniConf);

            }

          }

        });



      });


$(document).ready(function() {  

    document.addEventListener('contextmenu', event => event.preventDefault());
    $(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
    return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
    return false;
    }
    });
    console.clear();

  });



  
</script>

<script>
jQuery(document).ready(function() {
  if ($('.cd-stretchy-nav').length > 0) {
    var stretchyNavs = $('.cd-stretchy-nav');

    stretchyNavs.each(function() {
      var stretchyNav = $(this),
        stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

      stretchyNavTrigger.on('click', function(event) {
        event.preventDefault();
        stretchyNav.toggleClass('nav-is-visible');
      });
    });

    $(document).on('click', function(event) {
      (!$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span')) && stretchyNavs.removeClass('nav-is-visible');
    });
  }
});
$(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 20) {
$('#toTopBtn').fadeIn();
} else {
$('#toTopBtn').fadeOut();
}
});

$('#toTopBtn').click(function() {
$("html, body").animate({
scrollTop: 0
}, 1000);
return false;
});
});
 
</script>
</body></html>