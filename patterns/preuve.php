<?php
/**
 * Title: Preuve (phrase forte et logos clients)
 * Slug: digima/preuve
 * Categories: digima, testimonials
 * Keywords: preuve, confiance, logos, clients, références
 * Viewport Width: 1400
 * Description: Une phrase de preuve mise en avant, puis une bande de logos clients (images vides à remplir ; logos affichés seulement avec l'accord des clients).
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-brume","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-brume" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Ils me font confiance', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Une phrase de preuve, courte et vérifiable', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"digima-chapeau","textColor":"texte-secondaire"} -->
<p class="has-text-align-center digima-chapeau has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Une ligne de contexte : depuis quand, pour qui, quoi.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-logos","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group digima-logos"><!-- wp:image {"height":"48px","sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img alt="" style="height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"48px","sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img alt="" style="height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"48px","sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img alt="" style="height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"48px","sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img alt="" style="height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
