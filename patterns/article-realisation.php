<?php
/**
 * Title: Article de réalisation
 * Slug: digima/article-realisation
 * Categories: digima, portfolio
 * Keywords: réalisation, projet, étude de cas, article, modèle
 * Post Types: post
 * Block Types: core/post-content
 * Viewport Width: 1200
 * Description: Structure d'un article de la catégorie « Réalisations » : contexte, ce que j'ai fait, résultat, témoignage, captures d'écran et lien vers l'activité concernée.
 *
 * @package digima
 */

?>
<!-- wp:paragraph {"className":"digima-chapeau","textColor":"texte-secondaire","fontSize":"large"} -->
<p class="digima-chapeau has-texte-secondaire-color has-text-color has-large-font-size"><?php esc_html_e( 'Le projet en deux lignes : le client, ce qu’il voulait, ce que ça a donné.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Le contexte', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Qui est le client, quel était son besoin, quelles contraintes.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Ce que j’ai fait', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-coches"} -->
<ul class="wp-block-list is-style-coches"><!-- wp:list-item -->
<li><?php esc_html_e( 'Première étape ou fonction', 'digima' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Deuxième étape ou fonction', 'digima' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Le résultat', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Ce qui a changé pour le client, concrètement.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-temoignage"} -->
<blockquote class="wp-block-quote is-style-temoignage"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Prénom Nom, fonction, organisation', 'digima' ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'En images', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"wide","className":"digima-photo digima-capture"} -->
<figure class="wp-block-image alignwide size-large digima-photo digima-capture"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"is-style-carte","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-carte" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><strong><?php esc_html_e( 'Un projet similaire ?', 'digima' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-petit"} -->
<div class="wp-block-button is-petit"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/sites-web/' ) ); ?>"><?php esc_html_e( 'Découvrir l’offre', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
