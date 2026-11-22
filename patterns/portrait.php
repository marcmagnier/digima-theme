<?php
/**
 * Title: Portrait (photo et présentation)
 * Slug: digima/portrait
 * Categories: digima, about
 * Keywords: portrait, photo, à propos, qui suis-je
 * Viewport Width: 1400
 * Description: Photo à gauche (image vide à remplir depuis la médiathèque), courte présentation et lien vers la page À propos à droite.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"digima-photo"} -->
<figure class="wp-block-image size-large digima-photo"><img alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Qui suis-je', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Je suis Marc-Laurent Magnier. Digima, c’est moi.', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire","fontSize":"large"} -->
<p class="has-texte-secondaire-color has-text-color has-large-font-size"><?php esc_html_e( 'Deux lignes de présentation : la formation, l’expérience, ce qui fait la différence.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-lien"} -->
<div class="wp-block-button is-style-lien"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>"><?php esc_html_e( 'En savoir plus sur mon parcours', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
