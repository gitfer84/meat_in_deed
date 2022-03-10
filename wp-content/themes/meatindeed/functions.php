<?php
function meat_in_deed_files(){
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap' );
}
add_action('wp_enqueue_scripts', 'meat_in_deed_files');