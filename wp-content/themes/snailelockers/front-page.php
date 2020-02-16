<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

  
<section class="container-flud clearfix">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner1.jpg" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span>CANADIAN</span>SMART LOCKER SYSTEM</h3>
                </div>
              </div>
        
              <div class="item">
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner2.jpg" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span>PARCEL</span>DELIVERY NOTIFICATION</h3>
                </div>
              </div>
            
              <div class="item">
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner3.jpg" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span>Seamless</span>INTEGRATED WITH YOUR INFORMATION TECHNOLOGY</h3>
                </div>
              </div>
          
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
 <!-- front page content code start from admin  -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>

<?php endif; ?>


 <!-- front page content code end from admin  -->


  <!-- post code start   -->





<section class="container news pdg">
        <h2 class="title">FEATURED NEWS</h2>
        <?php
    $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'ASC','category_name' => 'news', 'post_status' => 'publish', 'post_type' => 'post', 'posts_per_page' => 3, ) );



    while ( $query->have_posts() ) :
	$query->the_post();?>
        
        <div class="col-lg-4 col-md-4 col-sm-12 box">
        
        
        <?php the_post_thumbnail( ); // Other resolutions (height, width) ?>
        
            <h4><?php/* echo wp_trim_words( get_the_title(), 5 ); */?></h4>
            <h4><?php echo  get_the_title(); ?></h4>
            <p><?php echo substr(  get_the_excerpt(),0,300); ?> </p>
            
          
            <p><?php /* echo  get_the_excerpt();  */ ?> </p>


            <div class="bottom-align">
            <span class="bdr" id="contact1"></span>
            <a href="<?php the_permalink(); ?>" class="btn">READ MORE</a>
            </div>
        </div>
        <?php	
endwhile;
?>

    </section>

   

    <section class="container-flud contactus-sec pdg clearfix">
    	<div class="container">
            <h2 class="title">CONTACT</h2>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h5 class="wow fadeIn">FRENCH & ENGLISH SUPPORT</h5>
                <ul class="quick-c">
                    <li><a href="mailto:support@snaile.com">support@snaile.com</a></li>
                    <li>Support: <a href="tel:833-200-5169">833-200-5169</a><li>
                </ul>
                <h5 class="wow fadeIn">DISTRIBUTION FACILITIES</h5>
                <address>
                    6140 Vipond Dr, Mississauga, ON L5T 2B2
                </address>
                <ul class="quick-c">
                    <li>Email: <a href="mailto:info@snaile.com">info@snaile.com</a></li>
                    <li>Tel: <a href="tel:1 800-750-6538 x 100">1 800-750-6538 x 100</a><li>
                </ul>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h5 class="wow fadeIn">FOR SUPPORT <a href="/support/">click here</a>, for general inquiries, please fill in the contact form below:</h5>
          
                <div class="row" id="con">

                <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?>
          
               </div>
              
            </div>
        </div>
    </section>


<?php
get_footer();?>

