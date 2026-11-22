<?php
/**
 * Title: Pied de page du site
 * Slug: digima/pied-de-page
 * Categories: digima, footer
 * Block Types: core/template-part/footer
 * Inserter: no
 * Description: Bandeau bleu nuit : présentation, activités, coordonnées, mentions légales.
 *
 * @package digima
 */

$digima_logo = get_theme_file_uri( 'assets/images/logo/digima-logo-blanc.svg' );
?>
<!-- wp:group {"align":"full","className":"is-style-section-nuit digima-pied","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-nuit digima-pied" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"width":"112px","sizeSlug":"full","linkDestination":"custom","className":"digima-logo"} -->
<figure class="wp-block-image size-full is-resized digima-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $digima_logo ); ?>" alt="<?php echo esc_attr__( 'Digima, retour à l’accueil', 'digima' ); ?>" style="width:112px"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"digima-pied-texte"} -->
<p class="digima-pied-texte"><?php esc_html_e( 'Sites web, cloud souverain, Open Data et IA, à Andenne. Un seul interlocuteur, de la conception à la maintenance.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"small","textColor":"vert"} -->
<h2 class="wp-block-heading has-vert-color has-text-color has-small-font-size"><?php esc_html_e( 'Activités', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-sans-puces"} -->
<ul class="wp-block-list is-style-sans-puces"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/sites-web/' ) ); ?>"><?php esc_html_e( 'Sites web', 'digima' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/cloud-souverain/' ) ); ?>"><?php esc_html_e( 'Cloud souverain', 'digima' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/open-data/' ) ); ?>"><?php esc_html_e( 'Open Data', 'digima' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/intelligence-artificielle/' ) ); ?>"><?php esc_html_e( 'Intelligence artificielle', 'digima' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"small","textColor":"vert"} -->
<h2 class="wp-block-heading has-vert-color has-text-color has-small-font-size"><?php esc_html_e( 'Contact', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Digima SNC<br>Chaussée de Ciney 174A1<br>5300 Andenne</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+32487167132">0487/16.71.32</a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Écrire un message', 'digima' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"digima-pied-bas","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group digima-pied-bas"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Digima SNC · TVA BE 0849.467.305</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>"><?php esc_html_e( 'Mentions légales', 'digima' ); ?></a> · <a href="<?php echo esc_url( home_url( '/conditions-generales/' ) ); ?>"><?php esc_html_e( 'Conditions générales', 'digima' ); ?></a> · <a href="<?php echo esc_url( home_url( '/confidentialite/' ) ); ?>"><?php esc_html_e( 'Confidentialité et cookies', 'digima' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
