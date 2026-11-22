<?php
/**
 * Title: Parcours (frise)
 * Slug: digima/parcours
 * Categories: digima, about
 * Keywords: parcours, frise, chronologie, expérience, à propos
 * Viewport Width: 1400
 * Description: Frise verticale des étapes d'un parcours (titre et une ligne par étape). Ajouter ou retirer des étapes.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Parcours', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'D’où je viens', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-frise","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group digima-frise"><?php for ( $digima_i = 1; $digima_i <= 3; $digima_i++ ) : ?><!-- wp:group {"className":"digima-frise-etape","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group digima-frise-etape"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Fonction, organisation', 'digima' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Ce que j’y ai fait, en une ligne.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
