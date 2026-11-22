<?php
/**
 * Title: Texte et illustration
 * Slug: digima/texte-image
 * Categories: digima, text
 * Keywords: texte, image, illustration, offre, problème, solution
 * Viewport Width: 1400
 * Description: Section en deux colonnes : texte (étiquette, titre, paragraphe, liste) et illustration (image vide à remplir). Inverser les colonnes pour alterner.
 *
 * @package digima
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Étiquette', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Un titre qui dit une seule idée', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Un paragraphe court qui développe l’idée, en mots simples.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-coches"} -->
<ul class="wp-block-list is-style-coches"><!-- wp:list-item -->
<li><?php esc_html_e( 'Premier point', 'digima' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Deuxième point', 'digima' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Troisième point', 'digima' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"digima-photo"} -->
<figure class="wp-block-image size-large digima-photo"><img alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
