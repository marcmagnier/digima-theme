<?php
/**
 * Title: Contact (coordonnées et formulaire)
 * Slug: digima/contact
 * Categories: digima, contact
 * Keywords: contact, coordonnées, formulaire, adresse, téléphone
 * Viewport Width: 1400
 * Description: Coordonnées dans une carte à gauche, emplacement du formulaire à droite (le formulaire vient d'une extension, à insérer à la place du paragraphe).
 *
 * @package digima
 */

$digima_icones = get_theme_file_uri( 'assets/images/icones/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"is-style-carte","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-carte"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Coordonnées', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"digima-coordonnee","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group digima-coordonnee"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none","className":"is-style-pastille"} -->
<figure class="wp-block-image size-full is-resized is-style-pastille"><img src="<?php echo esc_url( $digima_icones . 'telephone.svg' ); ?>" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="tel:+32487167132">0487/16.71.32</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-coordonnee","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group digima-coordonnee"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none","className":"is-style-pastille"} -->
<figure class="wp-block-image size-full is-resized is-style-pastille"><img src="<?php echo esc_url( $digima_icones . 'contact.svg' ); ?>" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'adresse@exemple.be', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-coordonnee","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group digima-coordonnee"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none","className":"is-style-pastille"} -->
<figure class="wp-block-image size-full is-resized is-style-pastille"><img src="<?php echo esc_url( $digima_icones . 'carte.svg' ); ?>" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Chaussée de Ciney 174A1<br>5300 Andenne</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"texte-secondaire","fontSize":"small"} -->
<p class="has-texte-secondaire-color has-text-color has-small-font-size"><?php esc_html_e( 'Je réponds sous deux jours ouvrables, souvent bien plus vite.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Écrivez-moi', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php esc_html_e( 'Emplacement du formulaire : nom, organisation, activité concernée, message.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
