<?php
/**
 * Title: Page d'accueil complète
 * Slug: digima/page-accueil
 * Categories: digima, featured
 * Keywords: accueil, page, modèle
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1400
 * Description: Point de départ de la page d'accueil : hero, un seul interlocuteur, activités, preuve, réalisations, portrait, derniers articles et bandeau contact. Textes d'exemple à remplacer.
 *
 * @package digima
 */

// Assemble les sections : chaque fichier ne produit que du balisage de blocs.
foreach ( array( 'hero', 'interlocuteur', 'activites', 'preuve', 'realisations', 'portrait', 'derniers-articles', 'cta-contact' ) as $digima_section ) {
	include __DIR__ . '/' . $digima_section . '.php';
	echo "\n\n";
}
