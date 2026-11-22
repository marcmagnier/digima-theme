<?php
/**
 * Title: Page À propos
 * Slug: digima/page-a-propos
 * Categories: digima, featured
 * Keywords: à propos, qui suis-je, parcours, page, modèle
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1400
 * Description: Point de départ de la page À propos (modèle « Page pleine largeur ») : en-tête, portrait, parcours, façon de travailler et bandeau contact.
 *
 * @package digima
 */

foreach ( array( 'en-tete-page', 'portrait', 'parcours', 'approche', 'cta-contact' ) as $digima_section ) {
	include __DIR__ . '/' . $digima_section . '.php';
	echo "\n\n";
}
