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
    
    <footer class="container-flud footer-sec pdg clearfix">
    	<div class="container">
        <a href="#" class="back-to-top">RETOUR EN HAUT DE PAGE</a>
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

</body>
</html>


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