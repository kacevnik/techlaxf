   $(document).ready(function() {

        $('.wp-post-image').parent().addClass('no_link');
        $('.no_link').click(function(event) {
            return false;
        });

        $(".woocommerce-product-gallery__wrapper div").each(function(index, value) {
            $('[data-number-img = '+ index +']').find('img').attr('src', $(this).attr('data-thumb'));
        });

        $('.cart .product-price .rur').remove();
        $('.cart .product-subtotal .rur').remove();
        $('.cart .product-subtotal .woocommerce-Price-currencySymbol').remove();

        $('.woocommerce-product-gallery__image').prepend('<div class="price_img"><span class="split_price">'+ $('#regular_price').text() +'</span><br>руб</div>');
        $('.woocommerce-product-gallery__image').prepend('<a href="#" data-fancybox data-src="#show_add_cart" href="javascript:;" class="product_zakaz">Заказать</a>');
        
        $('.tab_default a').click(function(event) {
            $('#variant').val($(this).html()).trigger('change');
            $('#color').val('серый').trigger('change');
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

        $('.minus_quantity').click(function(event) {
            var val = $(this).next().find('[type = number]').val();
            if(val > 0){
                val--;
                $(this).next().find('[type = number]').val(val);
            }
        });

        $('.plus_quantity').click(function(event) {
            var val = $(this).prev().find('[type = number]').val();
            val++;
            $(this).prev().find('[type = number]').val(val);
        });

        $('[type = number]').bind('change', function(event) {
            console.log($(this).val());
        });

   });