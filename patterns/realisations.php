<?php
/**
 * Title: Réalisations récentes
 * Slug: digima/realisations
 * Categories: digima, portfolio
 * Keywords: réalisations, projets, portfolio, références
 * Viewport Width: 1400
 * Description: Les trois dernières réalisations (articles de la catégorie « Réalisations », slug realisations) en cartes, avec un lien vers toutes les réalisations.
 *
 * @package digima
 */

require_once __DIR__ . '/../inc/realisations.php';
?>
<!-- wp:group {"align":"full","className":"is-style-section-brume","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-brume" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Réalisations', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Quelques projets récents', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-lien"} -->
<div class="wp-block-button is-style-lien"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( digima_url_realisations() ); ?>"><?php esc_html_e( 'Toutes les réalisations', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php echo digima_boucle_realisations( 3, false ); // phpcs:ignore WordPress.Security.EscapeOutput -- balisage de blocs construit et échappé dans la fonction. ?></div>
<!-- /wp:group -->
