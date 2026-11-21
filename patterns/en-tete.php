<?php
/**
 * Title: En-tête du site
 * Slug: digima/en-tete
 * Categories: digima, header
 * Block Types: core/template-part/header
 * Inserter: no
 * Description: Bandeau bleu nuit : logo, menu principal et bouton « Prendre rendez-vous ».
 *
 * @package digima
 */

$digima_logo    = get_theme_file_uri( 'assets/images/logo/digima-logo-blanc.svg' );
$digima_contact = home_url( '/contactez-nous/' );
?>
<!-- wp:group {"align":"full","className":"is-style-section-nuit digima-entete","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-nuit digima-entete" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"104px","sizeSlug":"full","linkDestination":"custom","className":"digima-logo"} -->
<figure class="wp-block-image size-full is-resized digima-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $digima_logo ); ?>" alt="<?php echo esc_attr__( 'Digima, retour à l’accueil', 'digima' ); ?>" style="width:104px"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"textColor":"blanc","overlayBackgroundColor":"nuit","overlayTextColor":"blanc","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center"},"style":{"layout":{"selfStretch":"fill"},"spacing":{"blockGap":"var:preset|spacing|50"}}} /-->

<!-- wp:buttons {"className":"digima-entete-action"} -->
<div class="wp-block-buttons digima-entete-action"><!-- wp:button {"className":"is-petit"} -->
<div class="wp-block-button is-petit"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $digima_contact ); ?>"><?php esc_html_e( 'Prendre rendez-vous', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
