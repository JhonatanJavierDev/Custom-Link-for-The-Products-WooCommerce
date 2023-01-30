<?php
/*
Plugin Name: Custom Link for The Products WooCommerce
Description: Add a custom link to the products on your page with woocommerce.
Version: 1.1
Author: Author: <a href="https://github.com/jhonatanjavierdev">TioJhon07</a>

*/
add_filter( 'woocommerce_product_get_permalink', 'custom_product_url', 10, 2 );
function custom_product_url( $url, $product ) {
    $product_id = $product->get_id();
    switch ($product_id) {
        //The ID that appears in the cases is the ID of the product in question
        case 6632:
            $redirect_url = 'https://test.com/';
            break;
        case 6633:
            $redirect_url = 'https://test.com/';
           break;
        default:
            return $url;
    }
    return $redirect_url;
}
add_action( 'woocommerce_before_single_product', 'call_custom_product_url' );
function call_custom_product_url() {
    global $product;
        custom_product_url( '', $product );
}

