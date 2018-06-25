<?php
/**
 * The main template file
 
*/
get_header(); ?>
<html class="js backgroundsize mdl-js"><head>
    <title>Продажа тротуарной плитки и брусчатки : Компания Славянка</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="продажа плитки брусчатки">
    <meta name="description" content="В нашем интернет-магазине тротуарной плитки вы можете купить и тротуарную плитку и брусчатка эконом и премиум класса.">
    <base href="/wp-content/themes/plitkatd/">
    
    <meta http-equiv="Last-Modified" content="Tue, 13 Mar 2018 16:50:38 GMT">
    <meta name="Document-state" content="Dynamic">
    <meta name="Resource-type" content="document">
    
    <meta name="viewport" content="width=device-width">
	<meta name="yandex-verification" content="52791f0ddbf7de29">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,100,300,700,500,900" rel="stylesheet" type="text/css">
    <!-- jquery && jqueryUI -->
    <link type="text/css" href="/frontend/jquery-ui-1.8.11/css/smoothness/jquery-ui-1.8.11.custom.css" rel="stylesheet">   
    <script async="" id="mango-js" src="//widgets.mango-office.ru/widgets/mango.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript" src="/frontend/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/frontend/jquery-ui-1.8.11/js/jquery-ui-1.8.11.custom.min.js"></script>
    <script src="/frontend/js/jquery1.11.1.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- Gritter -->
    <link rel="stylesheet" type="text/css" href="/frontend/gritter/css/jquery.gritter.css">
    <script type="text/javascript" src="/frontend/gritter/js/jquery.gritter.min.js"></script>
       
    <!-- colorbox -->
    <link rel="stylesheet" type="text/css" href="/frontend/colorbox/colorbox.css">
    <script type="text/javascript" src="/frontend/colorbox/jquery.colorbox.js"></script>  
    <script type="text/javascript">
        $(function() {
            $('a[rel=colorbox]').colorbox(); 
            $('a.colorbox').colorbox();
            $('a.colorbox').colorbox({rel:'gal'});
            $('a[rel=lightbox]').colorbox(); 
            $('a.lightbox').colorbox({title: function(){
              var alt = $(this).find('img').attr('alt');
              return alt;
            }});
        });
    </script>
    <script type="text/javascript" src="/frontend/index.js"></script>
    <script type="text/javascript" src="/frontend/modalLogin.js"></script>
    <script type="text/javascript" src="/frontend/BackgroundSlideshow/js/modernizr.custom.js"></script>
    <script src="/frontend/js/jquery.form.js"></script>
    <script src="/frontend/js/main-scripts.js"></script>
    <script type="text/javascript" src="/frontend/ajaxbasket.js"></script>
    <link rel="stylesheet" href="/frontend/BackgroundSlideshow/css/component.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/skel-noscript.css">
    <link rel="stylesheet" href="/frontend/css/style.css?v10">
    <link rel="stylesheet" href="/frontend/css/style-desktop.css">
    
    <!-- JS variables -->
    <script type="text/javascript"> 
        var base = 'https://plitkatd.ru/'; 
        var langpath = ''; 
        var path = 'main'; 
        var currentpath='pages/main';
        var tyniMCEpath='frontend/tiny_mce/';  
    </script>
    
    
	<meta name="google-site-verification" content="L-vdaCLPVqE4IAOqzQvaiA_XASllpMvDhX-OJtPASJQ">
<style type="text/css" data-ymaps="css-modules">.ymaps-2-1-64-pictogramCircleIconContent{display: block; background-size: contain; width: 22px; height: 22px; background-repeat: no-repeat; position: absolute; top: -11px; left: -11px;}
</style></head>
<body class="homepage">
	<div style="position:absolute; width:1px; height:1px; z-index:1; left: -2px; top: -2px; visibility: hidden; overflow: hidden;">
		<script type="text/javascript">
		document.write("<img src=\"https://counter.nn.ru/cgi-bin/counter.cgi?23415"+",,"+top.document.referrer+"\" width=\"1\" height=\"1\">");
		</script><img src="https://counter.nn.ru/cgi-bin/counter.cgi?23415,,https://plitkatd.ru/services" width="1" height="1">
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
                <img src="/img/close_btn.png" id="call_close_btn">
            </form>
        </div>
    </div>

    <!-- Header -->

                    <?php 
	$post = 2;
	get_post($post); 
?>
    <!-- Featured -->
        <div id="featured">
            
            <ul id="cbp-bislideshow" class="cbp-bislideshow">
            
                    
                        <li style="background-image: url(&quot;https://plitkatd.ru/pages/slider/gallery/10.jpg&quot;); opacity: 0;"><img src="/pages/slider/gallery/10.jpg" alt=""></li>
                    
                        <li style="background-image: url(&quot;https://plitkatd.ru/pages/slider/gallery/9.jpg&quot;); opacity: 0;"><img src="/pages/slider/gallery/9.jpg" alt=""></li>
                    
                        <li style="background-image: url(&quot;https://plitkatd.ru/pages/slider/gallery/8.jpg&quot;); opacity: 1;"><img src="/pages/slider/gallery/8.jpg" alt=""></li>
                    
                        <li style="background-image: url(&quot;https://plitkatd.ru/pages/slider/gallery/7.jpg&quot;);"><img src="/pages/slider/gallery/7.jpg" alt=""></li>
                    
                        <li style="background-image: url(&quot;https://plitkatd.ru/pages/slider/gallery/6.jpg&quot;);"><img src="/pages/slider/gallery/6.jpg" alt=""></li>
                    
            </ul>
            
            
            <div class="container">
               <!--  <a class="file_price">скачать прайс-лист</a>
                <a class="file_catalog">скачать каталог</a> -->

                <div class="cat_menu">
														  <?php

										// check if the repeater field has rows of data
										if( have_rows('cat_glav') ):

											// loop through the rows of data
											while ( have_rows('cat_glav') ) : the_row();

												// display a sub field value

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
                <div class="two_stoc">
                    <a href="/wp-content/themes/plitkatd/landshaftnyj-dizajn" class="stoc1">Ландшафтный дизайн в подарок</a>
                    <a href="/wp-content/themes/plitkatd/services" class="stoc2">Укладка тротуарной плитки</a>
                </div>
            </div>
            <div class="season_block">
                <div class="container vertical">
                    <a href="#" class="prev">‹</a>
                    <div class="carousel" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 670px;">
                        <ul style="margin: 0px; padding: 0px; position: relative; list-style: none; z-index: 1; height: 2680px; top: -2010px;"><li style="overflow: hidden; float: none; width: 0px; height: 670px;">
                                <div>
                                    <a href="/wp-content/themes/plitkatd/specials/3"><h2>Акция </h2></a>
                                    Тротуарная плитка по супер цене! Компания Славянка совместно с заводом БРАЕР объявляет акцию "Товар месяца" на тротуарную плитку. Срок действия акции до 30.06.2017 г.
                                </div>
                            </li>
                            
                            <li style="overflow: hidden; float: none; width: 0px; height: 670px;">
                                <div>
                                    <a href="/wp-content/themes/plitkatd/specials/4"><h2>«Дизайн-проект за пол цены» </h2></a>
                                    C 08.02.2017 по 01.07.2017 действует акция:&nbsp;«Дизайн-проект за пол цены»&nbsp;на тротуарную плитку BRAER.
                                </div>
                            </li>
                            
                            <li style="overflow: hidden; float: none; width: 0px; height: 670px;">
                                <div>
                                    <a href="/wp-content/themes/plitkatd/specials/3"><h2>Акция </h2></a>
                                    Тротуарная плитка по супер цене! Компания Славянка совместно с заводом БРАЕР объявляет акцию "Товар месяца" на тротуарную плитку. Срок действия акции до 30.06.2017 г.
                                </div>
                            </li>
                            
                        <li style="overflow: hidden; float: none; width: 0px; height: 670px;">
                                <div>
                                    <a href="/wp-content/themes/plitkatd/specials/4"><h2>«Дизайн-проект за пол цены» </h2></a>
                                    C 08.02.2017 по 01.07.2017 действует акция:&nbsp;«Дизайн-проект за пол цены»&nbsp;на тротуарную плитку BRAER.
                                </div>
                            </li></ul>  
                    </div>
                    <a href="#" class="next">›</a>
                    <div class="left_bborder"></div>
                </div>
            </div>
        </div>

    <!-- Main -->
        <div id="main">
            <div id="content" class="container">

                <div class="header_block">
                    <h1><?php the_field('tittle_2');?></h1>
                </div>
                <div class="header_block2">
                    <h2><?php the_field('tittle_1');?></h2>
                </div>
                <div class="text">
                    <article>
                        
                            <div class="text_area ">
                            <?php the_field('main_text');?>
                            </div>
                    </article>
                </div>
                <div class="advantages">
                    <div class="header_block3">
                        <h2>Наши преимущества</h2>
                    </div>
                    <table>
                        <tbody><tr>
                            <th><p><?php the_field('prem_tittle_1');?></p></th>
                            <th><p><?php the_field('prem_tittle_2');?></p></th>
                            <th><p><?php the_field('prem_tittle_3');?></p></th>
                            <th><p><?php the_field('prem_tittle_4');?></p></th>
                        </tr>
                        <tr>
                            <td>
                                <?php the_field('prem_text_1');?>
                            </td>
                            <td>
                                <?php the_field('prem_text_2');?>
                            </td>
                            <td>
                                <?php the_field('prem_text_3');?>
                            </td>
                            <td>
                                <?php the_field('prem_text_4');?>
                            </td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    <!-- main_news -->
        <div id="main_news">
            <div class="container">
                <section>
                    <div class="header_block4">
                        <p>Новости компании</p>
                    </div>
                    <div class="main_news_block">
                       
												   <?php

							// check if the repeater field has rows of data
							if( have_rows('new_company') ):

								// loop through the rows of data
								while ( have_rows('new_company') ) : the_row();

									// display a sub field value
									

							?>
                            <div class="main_news_item">
                                <div class="main_news_item_data"><span><?php the_sub_field('date_mouth');?>/</span><?php the_sub_field('date_ss');?></div>
                                <div class="main_news_item_block">
                                    
                                        <a href="<?php the_sub_field('links_news');?>"><img src="<?php the_sub_field('news_photo');?>" width="429px" height="206px"></a>
                                    
                                    
                                        <p class="mnib_header">
										<a href="<?php the_sub_field('links_news');?>"><?php the_sub_field('tittle_news');?></a>
										</p>
                                        <?php the_sub_field('desc_news');?>
                                </div>
                            </div>
                        
 <?php		endwhile;

							else :

								// no rows found

							endif;

							?>
                        
                       
                    </div>
                </section>
            </div>
        </div>
   	<?php wp_reset_postdata(); ?>     
<?php get_footer();?>
