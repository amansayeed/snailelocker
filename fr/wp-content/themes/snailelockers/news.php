<?php
/*
 * Template Name:ne 
 */

get_header(); ?>




<section class="container-flud news news-p pdg clearfix">
    	<h1>NOUVELLES BILINGUES</h1>
    	<div class="container">
            <ul>

			<?php
    $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'DESC','posts_per_page' => 6 ) );

    while ( $query->have_posts() ) :
	$query->the_post();?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                        
						<?php the_post_thumbnail(); // Other resolutions (height, width) ?>
                            <figcaption><?php echo substr(  get_the_excerpt(),0,55);  ?></figcaption>
                        </figure>
                    </a>
                </li>
				<?php	
endwhile;
?>
			</ul>
		
        </div>
    </section>


<?php
get_footer();?>
