<?php
/**
 * Title: Page Réalisations
 * Slug: digima/page-realisations
 * Categories: digima, featured, portfolio
 * Keywords: réalisations, projets, portfolio, page, modèle
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1400
 * Description: Point de départ de la page Réalisations (modèle « Page pleine largeur ») : en-tête, grille des articles de la catégorie « Réalisations » et bandeau contact.
 *
 * @package digima
 */

foreach ( array( 'en-tete-page', 'realisations-grille', 'cta-contact' ) as $digima_section ) {
	include __DIR__ . '/' . $digima_section . '.php';
	echo "\n\n";
}
