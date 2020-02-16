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
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner1.webp" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span> CANADIEN</span>SYSTÈME DE CASIERS AUTOMATIQUE</h3>
                </div>
              </div>
        
              <div class="item">
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner2.webp" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span>NOTIFICATION</span>DE LIVRAISON</h3>
                </div>
              </div>
            
              <div class="item">
                <img src="<?php  echo get_stylesheet_directory_uri()?>/images/banner3.webp" alt="" style="width:100%;">
                <div class="carousel-caption">
                  <h3 class="title"><span>INTÉGRÉE</span>À VOS SYSTÈMES D'INFORMATION</h3>
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
        <h2 class="title">NOUVELLES EN VEDETTE</h2>
        <?php
    $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'ASC','posts_per_page' => 3, ) );

    while ( $query->have_posts() ) :
	$query->the_post();?>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
        
        
        <?php the_post_thumbnail( array( 306, 196 ) ); // Other resolutions (height, width) ?>
        
            <h4><?php echo wp_trim_words( get_the_title(), 5 ); ?></h4>
            <p><?php echo wp_trim_words( get_the_excerpt(), 30)  ?> </p>


            
            <span class="bdr"></span>
            <a href="<?php the_permalink(); ?>" class="btn">LIRE LA SUITE</a>
        </div>
        <?php	
endwhile;
?>
        
        <!-- <div class="col-lg-4 col-md-4 col-sm-12">
        	<img src="images/new2.webp" title=""  alt=""/>
            <h4>Snaile Joins Forces with 1VALET to Streamline Parcel Delivery </h4>
            <p>Toronto, Ontario, Jan 15, 2019 – Award-winning automated parcel locker firm Snaile (www.snaile.com) is collaborating with 1VALET (www.1valet.com), a Quebec-based business providing a full multi-residential building automation platform, to simplify the process of receiving packages. This partnership between the two Canadian companies allows parcels to be safely deposited at recipients' multi-family building and delivery notifications integrated with the 1VALET platform.</p>
            <span class="bdr"></span>
            <a href="#" class="btn">READ MORE</a>
        </div> -->
        
        <!-- <div class="col-lg-4 col-md-4 col-sm-12">
        	<img src="images/new3.webp" title=""  alt=""/>
            <h4>Snaile Completes Yardi Integration</h4>
            <p>Toronto, ON - December 20, 2018 – Snaile completes integration with Yardi to allow seamless updates to current tenant contact information (email and/or SMS) so that parcel deliveries notify the current resident.   Snaile updates its directory daily via an API call to Yardi.   The first two Canadian customers, one in Ottawa and one in Toronto, will be up and running with this new integration Q1 2019. Established in 1984, Yardi has grown dramatically over the last three decades to become the leading provider of high-performance software solutions for the real estate industry. </p>
            <span class="bdr"></span>
            <a href="#" class="btn">READ MORE</a>
        </div> -->
    </section>

    <section class="container-flud clearfix">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">«Après avoir évalué les fournisseurs de casiers à colis au Canada, Snaile nous a démontré qu'ils avaient la bonne solution pour l'industrie canadienne de la construction.» </p>
                  <div class="name">— Erin Fenn, vice-président des ventes et du marketing chez 1VALET, Québec, traduit de l'anglais</div>
                </div>
              </div>
        
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">«La collecte du colis était sans faille. Excellent système.» </h3>
                  <div class="name">— Alan,  Purity Gas, Tenant (Oakville), traduit de l'anglais</div>
                </div>
              </div>
            
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">«Nous sommes très satisfaits des nouveaux casiers et les locataires nous ont bien répondu. Nous apprécions également le fait que nous utilisons une entreprise canadienne pour ce service.»</h3>
                  <div class="name">— Ben Alexander, KingSett Capital (Toronto), traduit de l'anglais</div>
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


    <section class="container-flud contactus-sec pdg clearfix">
    	<div class="container">
            <h2 class="title">CONTACT</h2>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h5>SUPPORT FRANÇAIS ET ANGLAIS</h5>
                <ul class="quick-c">
                    <li><a href="mailto:support@snaile.com">support@snaile.com</a></li>
                    <li>Support: <a href="tel:833-200-5169">833-200-5169</a><li>
                </ul>
                <h5>INSTALLATIONS DE DISTRIBUTION</h5>
                <address>
                6140 Vipond Dr, Mississauga, ON L5T 2B2
                </address>
                <ul class="quick-c">
                    <li>Email: <a href="mailto:info@snaile.com">info@snaile.com</a></li>
                    <li>Tel: <a href="tel:1 800-750-6538 x 100">1 800-750-6538 x 100</a><li>
                </ul>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h5>POUR LE SUPPORT, <a href="#">cliquez ici,</a>, pour des demandes générales, veuillez remplir le formulaire ci-dessous</h5>
          
                <div class="row" id="con">

                <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="" placeholder="First Name / prénom"  class="form-control" >
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="" placeholder="Last Name / nom de famille"  class="form-control" >
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="email" value="" required placeholder="Email / courriel"  class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="tel" value="" placeholder="Phone / téléphone"  class="form-control">
                    </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea placeholder="Type your message here / tapez votre message ici" class="form-control"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                          <button type="submit" class="btn float-right">Submit</button>
                    </div> -->
               </div>
              
            </div>
        </div>
    </section>




































<?php
get_footer();?>

