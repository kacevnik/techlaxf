<?php
/**
 * Template Name: Галерея
 */

get_header(); ?>
    <!-- Content -->
        <div id="inner">
            <div id="content" class="container">
                <div id="pway">
                
                    <ul class="breadcrumbs">
                        <li><a href="https://plitkatd.ru/">Главная</a></li>
                        
                        <li>Галерея</li>
                    </ul>
                
                </div>
                <div class="text">
                    <h1>Галерея</h1>
                    
                    
                        <div class="text_area">
	
	<div class="photo_block">
		
		
		
		<ul class="photo_area">
			<?php
$i=1;
// check if the repeater field has rows of data
if( have_rows('gallery') ):

 	// loop through the rows of data
    while ( have_rows('gallery') ) : the_row();

?>
        
		
		
		
		
		
				<li>
					<div class="photo">
						<a href="#id<?php $i++; echo $i; ?>" class="inline cboxElement" rel="inline">
							<img class="decorated" src="<?php the_sub_field('photo_gallery'); ?>" width="157" height="144" alt="Тротуарная плитка: увеличить (19.43 Kb)">
						</a>
						<div class="photo_wrapper" style="display:none;">
							<div id="id<?php echo $i; ?>" class="pop_block">
								<img src="<?php the_sub_field('photo_gallery'); ?>">
								<div class="pop_text_block">
									<h3><?php the_sub_field('adress_gallery'); ?></h3>
									<div class="pop_text">
										<h2><?php the_sub_field('name_gallery'); ?></h2>
										<p>Тип: <?php the_sub_field('type_gallery'); ?></p>
										<p>Поверхность: <?php the_sub_field('surface_gallery'); ?></p>
										<p>Цвет: <?php the_sub_field('color_gallery'); ?></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="fs90 p10 admphoto_edit">
						</div>
					</div>
				</li>
			
			
		<?php
    endwhile;

else :

    // no rows found

endif;

?>	
		</ul>
		
		
		
	</div>
	
	
</div>
                    
                    
                </div>
                 
            </div>
        </div>
<?php get_footer(); ?>