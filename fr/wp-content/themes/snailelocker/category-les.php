<?php
/**
* les Category Template
*/
 
get_header(); ?>


<section class="container blog pdg clearfix">
    	<div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<div class="col-lg-9 col-md-12 col-sm-12">

            <?php
			// Get the ID of a given category
			$category_news = get_cat_ID( 'news' );
            $category_best = get_cat_ID( 'best-practices' );
            $category_les = get_cat_ID( 'les-meilleures-pratiques' );
		
		
			// Get the URL of this category
			$category_news_link = get_category_link($category_news );
            $category_best_link  = get_category_link( $category_best );
            $category_les_link  = get_category_link( $category_les );
            
        ?>
        
       
		
		<!-- Print a link to this category -->


		
	


            
                <ul class="page-menu clearfix">
                    <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Posts</a></li>
                    <li><a href="<?php echo esc_url( $category_news_link ); ?>">News / Nouvelles</a></li>
                    <li><a href="	<?php echo esc_url( $category_best_link ); ?>">Best Practices</a></li>
                    <li><a href="<?php echo esc_url( $category_les_link ); ?>">Les meilleures pratiques</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="search-container clearfix">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
              </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 clearfix">

        <?php
         $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'ASC', 'post_status' => 'publish','category_name' => 'les-meilleures-pratiques', 'post_type' => 'post', 'posts_per_page' => 50, ) );
			

				/* Start the Loop */
                while ( $query->have_posts() ) :
                    $query->the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					
            ?>	
            


            


		
        	<div class="box clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array( 306, 196 ) ); // Other resolutions (height, width) ?></a>
                    </div>
				</div>
				

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="box-content clearfix">
                    <a href="<?php the_permalink(); ?>"><div class="title"><?php echo wp_trim_words( get_the_title(), 5 ); ?> </div>
                    <p><?php echo wp_trim_words( get_the_excerpt(),50)  ?> </p>
                    </a>
                    
                    </div>
                </div>
                <a href="" class="share"><i class="fa fa-ellipsis-v"></i></a>
            </div>




            
			<?php	endwhile; // End of the loop.
							?>
							
              
            
        
        </div>
    </section>

<?php
get_footer();
