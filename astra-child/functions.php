<?php

// Chargement du css
function load_css() {
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));
}
add_action( 'wp_enqueue_scripts', 'load_css' );

?>