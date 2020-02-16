<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

    
    
    
<section class="container-flud clearfix">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
              <li data-target="#myCarousel2" data-slide-to="3"></li>
              <li data-target="#myCarousel2" data-slide-to="4"></li>
              <li data-target="#myCarousel2" data-slide-to="5"></li>
              <li data-target="#myCarousel2" data-slide-to="6"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">  “Thank you so much for everything! You (Snaile) are absolutely awesome to deal with” </h3>
                  <div class="name">— Victoria Hayes, BentallGreenOak Residential Services</div>
                </div>
              </div>
           
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">“We’re very pleased with the new lockers, and getting some good feedback from the tenants. We also like the fact that we are using a Canadian company for this service.”</h3>
                  <div class="name">—  Ben Alexander, KingSett Capital (Toronto)</div>
                </div>
              </div>

              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">“I was challenged to come up with new and more efficient ways of doing things when it came to accepting inbound and processing outbound packages, after much research, it was a no brainer to go with Snaile.  The software is super user friendly and easy to navigate, and the support staff is also very helpful, friendly, and easy to deal with”</h3>
                  <div class="name">—  Frank Donia, Ontario Power Generation</div>
                </div>
              </div>

              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">“You (Snaile) have been very supportive even though we have so many questions, we really appreciate your help” </h3>
                  <div class="name">— Yeseul Kim, Bentall Kennedy (Canada) Limited Partnership</div>
                </div>
              </div>

              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">"After evaluating parcel locker providers in Canada, Snaile demonstrated to us they have the right solution for the Canadian building industry." </p>
                  <div class="name">—  Erin Fenn, Vice President of Sales and Marketing at 1VALET</div>
                </div>
              </div>
        
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">“Collection of the package was flawless. Great system.” </h3>
                  <div class="name">—  Alan,  Purity Gas, Tenant (Oakville)</div>
                </div>
              </div>
            
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">CUSTOMER FEEDBACK</h3>
                  <p class="text">  “Thank you (Snaile) kindly for all your support; you’ve been exceptionally efficient and helpful” </h3>
                  <div class="name">—  Daniel Zackodnik, Resident at a Bentall Kennedy managed building in Toronto</div>
                </div>
              </div>
          
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>


    
    <footer class="container-flud footer-sec pdg clearfix">
    	<div class="container">
        <a href="#" class="back-to-top">BACK TO TOP</a>
        	<div class="col-lg-6 col-md-6 col-sm-12">

            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-1') ) ?>
                <!-- <ul>
                    <li><a href="#">About Snaile</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul> -->
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-2') ) ?>
            	<!-- <ul>
                    <li><a href="#"><img src="<?php /* echo get_stylesheet_directory_uri()*/?>/images/instagrapm-icon.webp" /></a></li>
                    <li>Copyright © 2019 Snaile Inc.</li>
                </ul> -->
              
            </div>
            
        </div>
    </footer>
    
</body>
</html>




<?php wp_footer(); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script>
  $('.has-menu a').on('click', function(event){
   event.preventDefault();
   $('html,body').animate({scrollTop:$(this.hash).offset().top -90}, 500);
});
</script>


<script type="text/javascript" src="<?php  echo get_stylesheet_directory_uri()?>/js/wow.js"></script>
<script type="text/javascript" src="<?php  echo get_stylesheet_directory_uri()?>/js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
 
 <script>
$("#cont").click(function() {
    $('html, body').animate({
        scrollTop: $("#con").offset().top
    }, 2000);
});
</script>

<script>
$("#menu-item-104").click(function() {
    $('html, body').animate({
        scrollTop: $("#con").offset().top
    }, 2000);
});
</script>



</body>
</html>
