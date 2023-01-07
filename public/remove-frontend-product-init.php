<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://upwork.com/freelancers/walledmahmoudsoliman
 * @since      1.0.0
 *
 * @package    Remove_Frontend_Product
 * @subpackage Remove_Frontend_Product/public
 */

class Remove_Frontend_Product_Init {


    public function remove_product_button() {

        if ( current_user_can( 'manage_options' ) ) {
            global $product;
            $product_id = $product->get_id();
            echo '<button type="button" class="remove-product button alt" data-product-id="' . $product_id . '">Remove Product</button>';
        }
    }

    public function remove_product() {

        check_ajax_referer( 'remove_product_nonce', 'security' );

        $product_id = intval( $_POST['product_id'] );

        if ( current_user_can( 'manage_options' ) ) {
            wp_trash_post( $product_id );
            wp_send_json_success( get_permalink( wc_get_page_id( 'shop' ) ) );
        } else {
            wp_send_json_error( 'Unauthorized' );
        }
    }

}