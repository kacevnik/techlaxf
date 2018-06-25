<?php
/**
 * Template Name: Подкаталог
 */

get_header(); ?>
<div id="inner">
            <div id="content" class="container">
                <div class="text">
                    <div id="pway" class="grey">
                    
                        <ul class="breadcrumbs">
                            <li><a href="/">Главная</a></li>
                            
                                <li><a href="/catalog">Каталог</a></li>
                            
                            <li><?php the_title(); ?></li>
                        </ul>
                    
                    </div>
                    <h1><?php the_title(); ?></h1>
                    
                    
                        <div class="text_area">
                        <?php

										// check if the repeater field has rows of data
										if( have_rows('cat_glav_pod') ):

											// loop through the rows of data
											while ( have_rows('cat_glav_pod') ) : the_row();
											?>
            	<div class="product_item" style="height: 157px;">
		<a href="<?php the_sub_field('link_cat_pod'); ?> " class="image " title="Брусчатка BRAER">
			<span class="in-img">
							
								<img src="<?php the_sub_field('image_cat_pod'); ?>" width="150" height="80" style="width: 150px; height: 80px;" alt="Брусчатка BRAER" title="Брусчатка BRAER">
							
							
			</span>
			<h2><?php the_sub_field('name_cat_pod'); ?></h2>
		</a>
	</div>
	<?php
													endwhile;

										else :

											// no rows found

										endif;

										?> 
	
	

	
	
		

	
	
		
	



	
			

                        </div>
                    
                </div>
                 
            </div>
        </div>



		<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
