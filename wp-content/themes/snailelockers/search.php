<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section class="container blog pdg clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
       
         
            <div class="col-lg-12 col-md-12 col-sm-12">
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
                    <a href="<?php the_permalink(); ?>"><div class="title"><?php echo wp_trim_words( get_the_title(), 5 ); ?> </div>
                    <p><?php echo wp_trim_words( get_the_excerpt(),50)  ?> </p>
                    </a>
                    
                    </div>
                </div>
                <a href="" class="share"><i class="fa fa-ellipsis-v"></i></a>
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

<?php
get_footer();

