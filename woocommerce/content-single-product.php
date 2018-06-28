<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */

global $product;

if($product -> is_type('variable')){
    $var = $product->get_available_variations();
}

$regular_price = get_post_meta( get_the_ID(), '_regular_price', true);

if ($regular_price == ""){
    $available_variations = $product->get_available_variations();
    $variation_id=$available_variations[0]['variation_id']; 
    $variable_product1= new WC_Product_Variation( $variation_id );
    $regular_price = $variable_product1 ->regular_price;
}

?>

<?
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
    <div id="inner">
        <div id="content" class="container">
            <div class="text">
                <?php woocommerce_breadcrumb(); ?>
                <div class="text_area">
                    <div class="product_details">
                        <div class="top">
                            <div class="subname">
                                <div class="subname_wrapper">
                                    <div class="subtext">
                                        <h1><?php echo get_the_title( ); ?></h1>
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div id="regular_price"><?php echo $regular_price; ?></div>
                            <div class="slides">
                                <div id="tabs">
                                <?php custom_list_attr('variant', 1); ?>


    <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        //custom_list_attr('color');
    ?>

            <?php custom_list_attr('variant', 2); ?>
        </div>
    <div class="summary entry-summary">
        <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
        ?>
    </div>

    <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
// echo '<pre>';
// print_r($var);
// echo '</pre>';
    ?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
</div></div></div></div></div></div>
