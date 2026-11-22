<?php
/**
 * Title: Références clients (logos cliquables)
 * Slug: digima/preuve
 * Categories: digima, testimonials
 * Keywords: preuve, confiance, logos, clients, références
 * Viewport Width: 1400
 * Description: Quatre références : chaque sous-groupe contient un logo, le nom du client et une phrase. Sur le site, les logos sont cliquables (niveaux de gris, l'actif en couleur), le texte du client actif s'affiche au-dessus et l'on passe au suivant automatiquement. Logos affichés seulement avec l'accord des clients.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-brume","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-brume" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Références', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Ils me font confiance', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-references","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-references"><?php for ( $digima_i = 1; $digima_i <= 4; $digima_i++ ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Nom du client', 'digima' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"digima-chapeau","textColor":"texte-secondaire"} -->
<p class="has-text-align-center digima-chapeau has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Ce que j’ai réalisé pour lui, en une phrase.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
