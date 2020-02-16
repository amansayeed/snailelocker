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
              <!-- <li data-target="#myCarousel2" data-slide-to="2"></li> -->
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">"Après avoir évalué les fournisseurs de casiers à colis au Canada, Snaile nous a démontré qu'ils avaient la bonne solution pour l'industrie canadienne de la construction."</p>
                  <div class="name">- Erin Fenn, vice-président des ventes et du marketing chez 1VALET, Québec, traduit de l'anglais</div>
                </div>
              </div>
        
              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">“La collecte du colis était sans faille. Excellent système.”</h3>
                  <div class="name">—  Alan,  Purity Gas, Oakville  (locataire, traduit de l'anglais)</div>
                </div>
              </div>

              <div class="item">
                <div class="carousel-caption">
                  <h3 class="title">COMMENTAIRES DES CLIENTS</h3>
                  <p class="text">“Nous sommes très satisfaits des nouveaux casiers et les locataires nous ont bien répondu. Nous apprécions également le fait que nous utilisons une entreprise canadienne pour ce service.”</h3>
                  <div class="name">—  Ben Alexander, KingSett Capital (Toronto), traduit de l'anglais</div>
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


</body>
</html>


