<?php
/**
 * Template Name: Товары категории
 */

get_header(); ?>

<div id="inner">
            <div id="content" class="container">
                <div class="text">
                    <div id="pway" class="grey">
                    
                        <ul class="breadcrumbs">
                            <li><a href="/">Главная</a></li>
                            
                            <li><?php the_title(); ?></li>
                        </ul>
                    
                    </div>
                    <h1><?php the_title(); ?></h1>
                    
                    
                        <div class="text_area">
                        
                      <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
                        </div>
                    
                </div>
                 
            </div>
        </div>
		<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
