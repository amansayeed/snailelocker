<?php
/*
 * Template Name:Multi-Residential
 
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>

<?php endif; ?>






<?php
get_footer();?>
