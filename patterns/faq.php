<?php
/**
 * Title: Questions fréquentes
 * Slug: digima/faq
 * Categories: digima, text
 * Keywords: faq, questions, réponses, accordéon
 * Viewport Width: 1400
 * Description: Questions et réponses dépliables (blocs Détails). Ajouter ou retirer des questions selon la page.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Questions fréquentes', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Vos questions, mes réponses', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-faq","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group digima-faq"><?php for ( $digima_i = 1; $digima_i <= 3; $digima_i++ ) : ?><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Une question que l’on vous pose souvent ?', 'digima' ); ?></summary><!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Une réponse courte et directe.', 'digima' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
