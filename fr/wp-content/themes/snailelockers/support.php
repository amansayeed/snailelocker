<?php
/*
 * Template Name:support
 
 */

get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>

<?php endif; ?>


<section class="container-flud contactus-sec  contactus-sec2 pdg clearfix">
    	<div class="container">
            
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="bdr-right">
                <img src="https://snailedev.omdev.ca/fr/wp-content/uploads/2019/08/email-icon-contact.png" alt="">
                <h6 class="frm-text"><span>Assistance Française et Anglaise par courriel</h6>
                <ul class="quick-c">
                    <li><a href="mailto:support@snaile.com">support@snaile.com</a></li>
                    
                </ul>
                <img src="https://snailedev.omdev.ca/fr/wp-content/uploads/2019/08/phone-icon-contact.png" alt="">
                <h6 class="frm-text"><span>Assistance Française et Anglaise par télèphone</h6>
                <ul class="quick-c">
                    <li><a href="tel:833-200-5169">833-200-5169</a></li>
                </ul>
                
                <ul class="quick-c">
                <h6 class="frm-text"><span>SALES</span><span style="color:#555"> French & Englisht</span></h6>
                    <li>Email: <a href="mailto:info@snaile.com">info@snaile.com</a></li>
                    <li>Tel: <a href="tel:1 800-750-6538 x 100">1 800-750-6538 x 100</a><li>
                </ul>
            </div>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h6 class="frm-title">Support Web anglais et français</h6>
          
                <div class="row" id="con">

                <?php echo do_shortcode('[contact-form-7 id="274" title="support"]'); ?>
            
               </div>
              
            </div>
        </div>
    </section>


<?php
get_footer();?>


