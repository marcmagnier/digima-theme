<?php
/**
 * Title: Témoignage client
 * Slug: digima/temoignage
 * Categories: digima, testimonials
 * Keywords: témoignage, avis, citation, client
 * Viewport Width: 1400
 * Description: Une citation de client mise en avant, avec son nom et son organisation. Texte provisoire en lorem ipsum, à remplacer par un vrai témoignage.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:quote {"className":"is-style-temoignage"} -->
<blockquote class="wp-block-quote is-style-temoignage"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Prénom Nom, fonction, organisation', 'digima' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->
