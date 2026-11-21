<?php
/**
 * Title: Bandeau contact (bleu nuit)
 * Slug: digima/cta-contact
 * Categories: digima, call-to-action
 * Keywords: contact, rendez-vous, bandeau
 * Viewport Width: 1400
 * Description: Bloc bleu nuit arrondi en fin de page : une invitation à prendre contact. Un seul par page.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"className":"is-style-section-nuit digima-motif-cercle","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-section-nuit digima-motif-cercle" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Parlons de votre projet', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"digima-chapeau","textColor":"texte-secondaire"} -->
<p class="digima-chapeau has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Décrivez-nous votre besoin en quelques lignes : nous revenons vers vous pour en discuter.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contactez-nous/' ) ); ?>"><?php esc_html_e( 'Prendre rendez-vous', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
