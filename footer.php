<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
                    <?php 
	$post = 21;
	get_post($post); 
?>
<div class="delivery">
           <div class="container">
               <div class="d_icon"><img src="<?php the_field('Advantage_photo');?>"></div>
               <div class="d_text">
                   <p class="d_header"><?php the_field('Advantage_tittle');?></p>
                   <?php the_field('Advantage_text');?>
               </div>
           </div>
        </div>

    <!-- Footer -->
        <div id="footer">
            <div class="container">
                <section>
                    <div class="f_contact">
                        <div class="f_address">
                            <p>
                                <a target="_blank" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%97%D0%B2%D0%B5%D0%B7%D0%B4%D0%B8%D0%BD%D0%BA%D0%B0,+7,+%D0%9D%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9+%D0%9D%D0%BE%D0%B2%D0%B3%D0%BE%D1%80%D0%BE%D0%B4,+%D0%9D%D0%B8%D0%B6%D0%B5%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+603000/@56.316147,43.9970408,18z/data=!3m1!4b1!4m5!3m4!1s0x4151d5b2c8b70b27:0x806c6f0d77ad4ff8!8m2!3d56.316147!4d43.997673">
								<?php the_field('adress_1');?>
								</a><br>
                                <?php the_field('tell_1');?><br>
                                <a href="<?php the_field('email_1');?>"><?php the_field('email_1');?></a>
                            </p><br>
                            <p>
                                <a target="_blank" href="https://www.google.com/maps?q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.%D0%90%D0%B4%D0%BC%D0%B8%D1%80%D0%B0%D0%BB%D0%B0+%D0%9C%D0%B0%D0%BA%D0%B0%D1%80%D0%BE%D0%B2%D0%B0,+%D0%B4.6&amp;entry=gmail&amp;source=g">
								<?php the_field('adress_2');?>
								</a><br>
                                <a class="mgo-number-1305" href="<?php the_field('tell_2');?>"><?php the_field('tell_2');?></a><br>
                                <a href="mailto:slavyankatd@yandex.ru"><?php the_field('email_2');?></a>
                            </p>
                        </div>
                    </div>
                    <div class="f_form">
                        <form enctype="multipart/form-data" id="mf_footer" method="post" action="https://plitkatd.ru/feedback/?action=send.form" onsubmit="return checkInputValue('vopros','')">
                             <ul>
                                <li>
                                    <input type="text" id="person" name="person" value="" class="mf_name" placeholder="*Имя">
                                </li>
                                <li>
                                    <input type="text" id="email" name="email" value="" class="mf_email" placeholder="*E-mail">
                                </li>
                                <li>
                                    <textarea name="vopros" id="vopros" cols="30" rows="5" placeholder="*Сообщение"></textarea>
                                </li>
                            </ul>
                            <input type="submit" class="btn" data-validate="submit" value="Написать">
                        </form>
                        <p class="ff_slogan">Напишите нам и мы с удовольствием свяжемся с Вами!</p>
                    </div>
                    <div class="f_menu">
                        <div class="fb_menu">
                            
                            <ul>
                                <?php

// check if the repeater field has rows of data
if( have_rows('down_menu') ):

 	// loop through the rows of data
    while ( have_rows('down_menu') ) : the_row();
?>
        

                                   <li class=""><a href="<?php the_sub_field('link_on_page');?>"><?php the_sub_field('name_menu');?></a></li>
                                <?php
    endwhile;

else :

    // no rows found

endif;

?>
                            </ul>
                            
                        </div>
                        <div class="f_copyright"><span>©</span> 2009-2017</div>
						<!--Begin Counter.NN.RU v2.0 code-->
						<script type="text/javascript">
						document.write("<a href=\"https://counter.nn.ru/?23415\">"+
						"<img src=\"/images/counter.gif?23415"+
						",,"+top.document.referrer+"\" width=\"88\" height=\"31\" border=\"0\" alt=\"Counter.NN.RU\"></a>");
						</script><a href="https://counter.nn.ru/?23415"><img src="/images/counter.gif?23415,,https://plitkatd.ru/services" width="88" height="31" border="0" alt="Counter.NN.RU"></a>
						<noscript>
						<a href="https://counter.nn.ru/?23415">
						<img src="/images/counter.gif?23415"
						width="88" height="31" border="0" alt="NN counter top100"></a>
						</noscript>
						<!--End Counter.NN.RU code-->
                    </div>
                </section>
            </div>
        </div>

    <!-- Copyright -->
       <!--  <div id="copyright">
           <div class="container">
               Design: <a href="https://templated.co">TEMPLATED</a> Images: <a href="https://unsplash.com">Unsplash</a> (<a href="https://unsplash.com/cc0">CC0</a>)
           </div>
       </div> -->
        <script src="/frontend/BackgroundSlideshow/js/jquery.imagesloaded.min.js"></script>
        <script src="/frontend/BackgroundSlideshow/js/cbpBGSlideshow.min.js"></script>
        <script src="/frontend/js/jquery.easing-1.3.js"></script>
        <script src="/frontend/js/jquery.mousewheel-3.1.12.js"></script>
        <script src="/frontend/js/jquery.jcarousellite.min.js"></script>

	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter40044175 = new Ya.Metrika({
						id:40044175,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true
					});
				} catch(e) { }
			});
	 
			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";
	 
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/40044175" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42549904 = new Ya.Metrika2({
                    id:42549904,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42549904" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	 
	  ga('create', 'UA-85263834-1', 'auto');
	  ga('send', 'pageview');
	 
	</script>
<script src="/goals.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.saas-support.com/widget/cbk.css">
<script type="text/javascript" src="https://cdn.saas-support.com/widget/cbk.js?wcb_code=0c27accc5e2d54246df6f9ecc82383db" charset="UTF-8" async=""></script>
<script>
    (function(w, d, u, i, o, s, p) {
        if (d.getElementById(i)) { return; } w['MangoObject'] = o; 
        w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
        s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
        p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
    }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
    mgo({calltracking: {id: 1305, elements: [{selector: '.mgo-number-1305'}]}});
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><iframe name="_ym_native" frameborder="0" style="opacity: 0; width: 0px; height: 0px; position: absolute; left: 100%; bottom: 100%;"></iframe><div class="_ym_zoom" style="bottom: 100%; position: fixed; width: 100vw;"></div><div class="_ym_viewport" style="bottom: 100%; position: fixed; width: 100%; height: 100%;"></div>
    <?php wp_footer(); ?>
</div></body></html>