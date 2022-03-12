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