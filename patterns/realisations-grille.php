<?php
/**
 * Title: Toutes les réalisations (grille paginée)
 * Slug: digima/realisations-grille
 * Categories: digima, portfolio
 * Keywords: réalisations, projets, portfolio, grille
 * Viewport Width: 1400
 * Description: Grille de toutes les réalisations (catégorie « Réalisations », slug realisations), 12 par page avec pagination. Pour la page Réalisations.
 *
 * @package digima
 */

require_once __DIR__ . '/../inc/realisations.php';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--90)"><?php echo digima_boucle_realisations( 12, true ); // phpcs:ignore WordPress.Security.EscapeOutput -- balisage de blocs construit et échappé dans la fonction. ?></div>
<!-- /wp:group -->
