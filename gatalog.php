<?php
/**
 * Template Name: Каталог
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
	$post = 2;
	get_post($post); 
?>
	<div class="catalog_body cat_menu">
														  <?php

										// check if the repeater field has rows of data
										if( have_rows('cat_glav') ):

											// loop through the rows of data
											while ( have_rows('cat_glav') ) : the_row();

												echo '<a href="';
												the_sub_field('link_cat');
												echo '" class="cat_menu_item" id="service_item_1">';
												echo '<img src="';
												the_sub_field('image_cat');
												echo '">';
												the_sub_field('name_cat');
												echo '</a>';
											endwhile;

										else :

											// no rows found

										endif;

										?>  
                        
                    
                </div>
	
		

	
	
		
	



                        </div>
                    
                </div>
                 
            </div>
        </div>
		<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
