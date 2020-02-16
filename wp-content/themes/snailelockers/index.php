<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<section class="container blog pdg clearfix">
    	<div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<div class="col-lg-9 col-md-12 col-sm-12">



           
         			   
<?php
			// Get the ID of a given category
			$category_news = get_cat_ID( 'news' );
			$category_best = get_cat_ID( 'best-practices' );
		
		
			// Get the URL of this category
			$category_news_link = get_category_link($category_news );
            $category_best_link  = get_category_link( $category_best );
            
        ?>
        
       
		
		<!-- Print a link to this category -->


		
	


            
                <ul class="page-menu clearfix">
                    <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Posts</a></li>
                    <li><a href="<?php echo esc_url( $category_news_link ); ?>">News / Nouvelles</a></li>
                    <li><a href="	<?php echo esc_url( $category_best_link ); ?>">Best Practices</a></li>
                    <li><a href="https://snailelockers.com/fr/category/les-meilleures-pratiques/">Les meilleures pratiques</a></li>
                </ul>
            </div>
         
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="search-container clearfix">
                    <?php get_search_form(); ?>
                    <!--<form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                    
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>-->
              </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 clearfix">

        <?php
        if ( have_posts() ) {
            	while ( have_posts() ) {
				the_post(); ?>
				<div class="box clearfix">
				<?php if(has_post_thumbnail()){ ?>
				
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array( 306, 196 ) ); // Other resolutions (height, width) ?></a>
                    </div>
				</div>
		<?php } ?>		
        	<?php if(has_post_thumbnail()){ ?>
                <div class="col-lg-7 col-md-12 col-sm-12">
            <?php } else{ ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
            <?php } ?>
                    <div class="box-content clearfix">
                    <a href="<?php the_permalink(); ?>"><div class="title"><?php echo  get_the_title(); ?> 
                    </div>
                    <p><?php echo substr(  get_the_excerpt(),0,300);  ?> </p>
                    </a>
                    
                    </div>
                </div>
                <a href="javascript:void(0)" class="share"><i class="fa fa-ellipsis-v"></i></a>
                <div id="shareToggle"><a href="#" data-toggle="modal" data-target="#sharepopup" rel=""><i class="fa fa-share"></i> Share Post</a></div>
                
            </div>
			<?php }
			//twentynineteen_the_posts_navigation();
        }else { ?>

			<div class="box clearfix">
                No Blog Found
            </div>

	<?php 	} ?>

        </div>
    </section>

<div id="sharepopup" class="modal fade" role="dialog">
  <div class="modal-dialog">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <!-- Modal content-->
    <div class="modal-content">
        
      <div class="modal-body">
        <div class="sharebox">
            <label>Share Post</label>
            <?php echo do_shortcode('[addtoany]'); ?>
        </div>
      </div>
      
    </div>

  </div>
</div>
    
    
    
<script>
    
    jQuery('.share').click(function() {
  //Use the current button which triggered the event
  jQuery(this)
    //Find the sibling you want to toggle, of a specified class
    .siblings('#shareToggle')
    //Toggle (hide or show) accordingly to the previous display status of the element
    .toggle();

});



</script>


<?php
get_footer();
