<?php
/**
 * Title: Page d'activité
 * Slug: digima/page-activite
 * Categories: digima, featured
 * Keywords: activité, offre, service, page, modèle
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1400
 * Description: Point de départ d'une page d'activité (à utiliser avec le modèle « Page pleine largeur ») : en-tête, offre avec illustration, garanties, méthode, témoignage, questions fréquentes et bandeau contact.
 *
 * @package digima
 */

foreach ( array( 'en-tete-page', 'texte-image', 'approche', 'etapes', 'temoignage', 'faq', 'cta-contact' ) as $digima_section ) {
	include __DIR__ . '/' . $digima_section . '.php';
	echo "\n\n";
}
