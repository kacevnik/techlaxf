<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<html class="js backgroundsize mdl-js"><head>
    <title>Компания Славянка</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <meta http-equiv="Last-Modified" content="Wed, 13 Jun 2018 03:30:23 GMT">
    <meta name="Document-state" content="Dynamic">
    <meta name="Resource-type" content="document">
    
    <meta name="viewport" content="width=device-width">
	<meta name="yandex-verification" content="52791f0ddbf7de29">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,100,300,700,500,900" rel="stylesheet" type="text/css">
    <!-- jquery && jqueryUI -->
    <link type="text/css" href="<?php get_site_url(); ?>/frontend/jquery-ui-1.8.11/css/smoothness/jquery-ui-1.8.11.custom.css" rel="stylesheet">   
    <script async="" id="mango-js" src="//widgets.mango-office.ru/widgets/mango.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript" src="<?php get_site_url(); ?>/frontend/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/jquery-ui-1.8.11/js/jquery-ui-1.8.11.custom.min.js"></script>
    <!--script src="frontend/js/jquery1.11.1.js"></script-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- Gritter -->
    <link rel="stylesheet" type="text/css" href="<?php get_site_url(); ?>/frontend/gritter/css/jquery.gritter.css">
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/gritter/js/jquery.gritter.min.js"></script>
       
    <!-- colorbox -->
    <link rel="stylesheet" type="text/css" href="<?php get_site_url(); ?>/frontend/colorbox/colorbox_gallery.css">
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/colorbox/jquery.colorbox.js"></script>  
    <script type="text/javascript">
        $(function() {
            $('a[rel=colorbox]').colorbox(); 
            $('.colorbox').colorbox();
            $('.colorbox').colorbox({rel:'gal'});
            $('a[rel=lightbox]').colorbox(); 
            $('a.lightbox').colorbox({title: function(){
              var alt = $(this).find('img').attr('alt');
              return alt;
            }});
            $(".inline").colorbox({inline:true, width:"960px"});
            $('.inline').colorbox({rel:'gal'});
        });
    </script>
    

    <!-- main styles and JS -->
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/index.js"></script>
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/modalLogin.js"></script>
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/BackgroundSlideshow/js/modernizr.custom.js"></script>
    <script src="<?php get_site_url(); ?>/frontend/js/jquery.form.js"></script>
    <script src="<?php get_site_url(); ?>/frontend/js/scripts.js"></script>
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/ajaxbasket.js"></script>
    <script type="text/javascript" src="<?php get_site_url(); ?>/frontend/js/jquery.mThumbnailScroller.min.js"></script>    
    <link rel="stylesheet" href="<?php get_site_url(); ?>/frontend/BackgroundSlideshow/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php get_site_url(); ?>/frontend/css/skel-noscript.css">
    <link rel="stylesheet" href="<?php get_site_url(); ?>/frontend/css/style.css">
    <link rel="stylesheet" href="<?php get_site_url(); ?>/frontend/css/style-desktop.css">    
	<meta name="google-site-verification" content="L-vdaCLPVqE4IAOqzQvaiA_XASllpMvDhX-OJtPASJQ">
<style type="text/css" data-ymaps="css-modules">.ymaps-2-1-64-pictogramCircleIconContent{display: block; background-size: contain; width: 22px; height: 22px; background-repeat: no-repeat; position: absolute; top: -11px; left: -11px;}
</style>
    <?php wp_head(); ?>
</head>
<body class="innerpage post<?php echo $post->ID; ?>">
    <div class="woocommerce">
	<div style="position:absolute; width:1px; height:1px; z-index:1; left: -2px; top: -2px; visibility: hidden; overflow: hidden;">
		<script type="text/javascript">
		document.write("<img src=\"https://counter.nn.ru/cgi-bin/counter.cgi?23415"+",,"+top.document.referrer+"\" width=\"1\" height=\"1\">");
		</script><img src="https://counter.nn.ru/cgi-bin/counter.cgi?23415,,https://plitkatd.ru/" width="1" height="1">
		<noscript>
		<img src="https://counter.nn.ru/cgi-bin/counter.cgi?23415" width="1" height="1">
		</noscript>
	</div>
    <div class="fixed_block">
        <div class="fixed_icons">
            <img src="/img/fixed_icons.png">
        </div>
        <div class="fixed_call">
            <img src="/img/fixed_call.png" id="fxcimg">
            <form enctype="multipart/form-data" id="mf_call" method="post" action="https://plitkatd.ru/call/?action=send.form" onsubmit="return true">
                 <ul>
                    <li>
                        <input type="text" id="fname" name="fname" value="" class="fname" placeholder="*Имя">
                    </li>
                    <li>
                        <input type="text" id="phone" name="phone" value="" class="phone" placeholder="*Телефон">
                    </li>
                </ul>
                <input type="submit" class="btn" data-validate="submit" value="Заказать">
                <img src="img/close_btn.png" id="call_close_btn">
            </form>
        </div>
    </div>
	       <div id="header">
            <div id="nav-wrapper" class=""> 
                <!-- Nav -->
                <nav id="nav">
				
                    <?php 
	$post = 88;
	get_post($post); 
?>

                    <ul>
                        
                           <li class=""><a href="/каталог-2/" id="top_item_catalog">Каталог
						   <div class="afnav">
                    


                        <ul class="afcatmenu_1">
                        					<?php

// check if the repeater field has rows of data
if( have_rows('catalog_menu') ):

 	// loop through the rows of data
    while ( have_rows('catalog_menu') ) : the_row();

        // display a sub field value
        
		?>
                           <li class=""><a href="<?php the_sub_field('catalog_menu_cat_link');?>" class="" id="service_item_1"><img src="<?php the_sub_field('catalog_menu_photo');?>"><br><?php the_sub_field('catalog_menu_cat');?></a>
                        <ul class="afcatmenu_2">
                        <?php

// check if the repeater field has rows of data
if( have_rows('catalog_menu_podcat') ):

 	// loop through the rows of data
    while ( have_rows('catalog_menu_podcat') ) : the_row();

        // display a sub field value
        
		?>
                           <li class=""><a href="<?php the_sub_field('catalog_menu_podcat_link');?>" class="" id="service_item_317"> <?php the_sub_field('catalog_menu_podcat_name');?></a></li>
                        
                     
                        
                        
                        
<?php						
    endwhile;

else :

    // no rows found

endif;

?>
   </ul>
                    </li>
<?php						
    endwhile;

else :

    // no rows found

endif;

?>
</ul>
<?php wp_reset_postdata(); ?>
                    <?php 
	$post = 21;
	get_post($post); 
?>                   
                </div></a></li>
                        
                           
														<?php

														// check if the repeater field has rows of data
														if( have_rows('top_menu') ):

															// loop through the rows of data
															while ( have_rows('top_menu') ) : the_row();

																// display a sub field value
																
echo '<li class=""><a href="';the_sub_field('top_menu_link');echo '" id="top_item_gallery">';the_sub_field('top_menu_text');
																echo '</a></li>';
																
																
															endwhile;

														else :

															// no rows found

														endif;

														?>
                        
                    </ul>
                    
                </nav>
                
            </div>
            <div id="nav2-wrapper"> 
                <nav id="nav2">
                    <div class="container"> 
                        <div id="logo">
                            <a href="/">Славянка</a>
                        </div>
                        <div id="topM">
                            <p class="tPhone">
                                <span><?php the_field('adress_1');?></span>
                                <a class="mgo-number-1305" href="tel:<?php the_field('tell_1');?>"><?php the_field('tell_1');?></a>
                                <a href="mailto:<?php the_field('email_1');?>"><?php the_field('email_1');?></a>
                            </p> 
                        </div>
                        <div id="topNN">
                            <p class="tPhone">
                                <span><?php the_field('adress_2');?></span>
                                <a href="tel:<?php the_field('tell_2');?>"><?php the_field('tell_2');?></a>
                            </p> 
                            <p><a href="mailto:<?php the_field('email_2');?>"><?php the_field('email_2');?></a></p>
                        </div>
                        <a href="/cart" class="cart1">
                            <span class="basket_sum"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
                        </a>
                        <div id="logo_kvek">
                        </div>
                    </div>
                </nav>
            </div>
            
        </div>
		
		<?php wp_reset_postdata(); ?>