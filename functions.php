<?php
add_action( 'wp_enqueue_scripts', 'enqueue_styles_from_parent_theme' );
function enqueue_styles_from_parent_theme() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
?>