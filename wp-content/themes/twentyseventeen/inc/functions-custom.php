<?php
// Disable PostCode/Zip Field on the Checkout Page
add_filter( 'woocommerce_default_address_fields' , 'chien_custom_checkout_fields' );
function chien_custom_checkout_fields( $fields ) {
    unset($fields['postcode']);
    return $fields;
}