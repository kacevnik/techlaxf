   $(document).ready(function() {

        $(".woocommerce-product-gallery__wrapper div").each(function(index, value) {
            $('[data-number-img = '+ index +']').find('img').attr('src', $(this).attr('data-thumb'));
        });

        $('.woocommerce-product-gallery__image').prepend('<div class="price_img"><span class="split_price">'+ $('#regular_price').text() +'</span><br>руб</div>');
        $('.woocommerce-product-gallery__image').prepend('<a href="#" data-fancybox data-src="#show_add_cart" href="javascript:;" class="product_zakaz">Заказать</a>');
        
        $('.tab_default a').click(function(event) {
            $('#variant').val($(this).html()).trigger('change');
            var text = $('.entry-summary span.price').text();
            var arr = text.split('.');
            setTimeout(function(){
                $('.split_price').text(arr[1]);
            }, 300);

        });

        $('.color_attribute').click(function(event) {
            $('#color').val($(this).attr('data-select')).trigger('change');
            var text = $('.entry-summary span.price').text();
            var arr = text.split('.');
            setTimeout(function(){
                $('.split_price').text(arr[1]);
            }, 300);

        });

        jQuery('.attributes_color').owlCarousel({
            items: 4,
            margin: 6,
            nav: true,
            navText: ['<div class="nav_color left"></div>','<div class="nav_color right"></div>']
        });

   });