<?php

// Chargement du css
function load_css() {
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));
}
add_action( 'wp_enqueue_scripts', 'load_css' );

// Supprimer les balises p rajoutées par Contact Form7
add_filter('wpcf7_autop_or_not', '__return_false');

// Configuration du captcha vers .net pour éviter charger cookies tiers
add_filter( 'wpcf7_use_recaptcha_net', '__return_true' );

// Changer le texte "Note de commandes" dans la page de validation de comande
function shopper_override_checkout_fields ($fields) {
$fields["order"]["order_comments"]["placeholder"] = __("Je souhaite une dédicace pour « saisissez le prénom ».", "shopper");
return $fields;
}
add_filter( "woocommerce_checkout_fields" , "shopper_override_checkout_fields" );

?>