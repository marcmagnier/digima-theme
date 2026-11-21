<?php
/**
 * Digima — fonctions du thème.
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'digima', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
} );
