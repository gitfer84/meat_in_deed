<?php
function meat_in_deed_files(){
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap' );
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'meat_in_deed_files');

// Modificar el footer

function meatindeed_creditos(){
    remove_action('storefront_footer', 'storefront_credit', 20 );
    add_action('storefront_after_footer', 'meatindeed_nuevo_footer', 20);
}

add_action('init', 'meatindeed_creditos');

function meatindeed_nuevo_footer(){
    echo '<div class="reservados">';
    echo    "Derechos Reservados &copy " . get_bloginfo('name') . " " .  date('Y');
    echo '</div>';

}

/* Hace los campos del formulario de pago obligatorios */

add_filter('woocommerce_billing_fields', 'force_billing_fields', 1000, 1);

function force_billing_fields($fields) {

$fields['billing_first_name']['required'] = true; //First Name

$fields['billing_last_name']['required'] = true; //Last Name

$fields['billing_email']['required'] = true; //Email

$fields['billing_phone']['required'] = true; //Phone number

return $fields;

}

add_filter( 'woocommerce_default_address_fields', 'customize_extra_fields', 1000, 1 );

function customize_extra_fields( $address_fields ) {

$address_fields['company']['required'] = false; //Company name

$address_fields['address_1']['required'] = true; //Address

$address_fields['country']['required'] = false; //Country

$address_fields['city']['required'] = true; //City

$address_fields['state']['required'] = true; //State

$address_fields['postcode']['required'] = true; //Postcode

return $address_fields;

}

// Ocultar otros métodos de envío cuando el envío gratuito está disponible.
function my_hide_shipping_when_free_is_available( $rates ) {
    $free = array();
    foreach ( $rates as $rate_id => $rate ) {
    if ( 'free_shipping' === $rate->method_id ) {
    $free[ $rate_id ] = $rate;
    break;
    }
    }
    return ! empty( $free ) ? $free : $rates;
    }
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );