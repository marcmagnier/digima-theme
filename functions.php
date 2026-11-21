<?php
/**
 * Digima — fonctions du thème.
 *
 * Les couleurs, la typographie et les espacements sont définis dans theme.json.
 * Ce fichier ne fait que le strict nécessaire.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Réglages du thème : feuille de style dans l'éditeur.
 */
add_action( 'after_setup_theme', function () {
	add_editor_style( 'style.css' );
} );

/**
 * Feuille de style complémentaire sur le site.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'digima', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
} );

/**
 * Catégorie de patterns « Digima » : les patterns du dossier patterns/
 * (en-tête « Categories: digima ») y sont rangés dans l'éditeur.
 */
add_action( 'init', function () {
	register_block_pattern_category(
		'digima',
		array(
			'label'       => __( 'Digima', 'digima' ),
			'description' => __( 'Sections prêtes à l’emploi aux couleurs de Digima.', 'digima' ),
		)
	);
} );
