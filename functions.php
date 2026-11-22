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

// Réalisations = articles de la catégorie « Réalisations » (boucles, exclusion des listes d'actus).
require_once __DIR__ . '/inc/realisations.php';

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

	// Lueur qui suit le pointeur sur les couvertures « Verre » (chargé seulement si besoin, voir plus bas).
	wp_register_script(
		'digima-verre',
		get_theme_file_uri( 'assets/js/verre.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
} );

/**
 * Charge le script de la couverture « Verre » uniquement sur les pages qui en affichent une.
 */
add_filter( 'render_block_core/cover', function ( $html, $block ) {
	$classes = $block['attrs']['className'] ?? '';
	if ( str_contains( $classes, 'is-style-verre' ) ) {
		wp_enqueue_script( 'digima-verre' );
	}
	return $html;
}, 10, 2 );

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

	// Couverture « Verre » (hero) et paragraphe « Étiquette ». Les styles sont dans style.css.
	register_block_style(
		'core/cover',
		array(
			'name'  => 'verre',
			'label' => __( 'Verre', 'digima' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'etiquette',
			'label' => __( 'Étiquette', 'digima' ),
		)
	);

	// Icône dans une pastille ronde (cartes d'activité) et groupe sous filet à trait vert (arguments).
	register_block_style(
		'core/image',
		array(
			'name'  => 'pastille',
			'label' => __( 'Pastille', 'digima' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'filet-vert',
			'label' => __( 'Filet à trait vert', 'digima' ),
		)
	);

	// Liste à coches vertes (points forts d'une offre) et citation « Témoignage ».
	register_block_style(
		'core/list',
		array(
			'name'  => 'coches',
			'label' => __( 'Coches', 'digima' ),
		)
	);
	register_block_style(
		'core/quote',
		array(
			'name'  => 'temoignage',
			'label' => __( 'Témoignage', 'digima' ),
		)
	);

	// Liste sans puces (pied de page, listes de liens). Le style est dans style.css.
	register_block_style(
		'core/list',
		array(
			'name'  => 'sans-puces',
			'label' => __( 'Sans puces', 'digima' ),
		)
	);
} );

/**
 * Favicon de repli (symbole « d ») tant qu'aucune icône de site
 * n'est définie dans Réglages > Général.
 */
add_action( 'wp_head', function () {
	if ( has_site_icon() ) {
		return;
	}
	printf(
		'<link rel="icon" href="%s" type="image/svg+xml" />' . "\n",
		esc_url( get_theme_file_uri( 'assets/images/logo/digima-symbole.svg' ) )
	);
} );
