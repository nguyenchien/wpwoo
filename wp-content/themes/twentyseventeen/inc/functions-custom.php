<?php
// Remove srcset image
function meks_disable_srcset( $sources ) {
    return false;
}
add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );

// Disable PostCode/Zip Field on the Checkout Page
add_filter( 'woocommerce_default_address_fields' , 'chien_custom_checkout_fields' );
function chien_custom_checkout_fields( $fields ) {
    unset($fields['postcode']);
    return $fields;
}