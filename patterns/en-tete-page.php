<?php
/**
 * Title: En-tête de page (verre)
 * Slug: digima/en-tete-page
 * Categories: digima, banner
 * Keywords: en-tête, titre, page, activité, verre
 * Viewport Width: 1400
 * Description: Ouverture bleu nuit plus basse que le hero de l'accueil, pour les pages d'activité et les pages intérieures (modèle « Page pleine largeur »). Contient le titre H1 de la page.
 *
 * @package digima
 */

?>
<!-- wp:cover {"overlayColor":"nuit","isUserOverlayColor":true,"minHeight":46,"minHeightUnit":"vh","isDark":true,"align":"full","className":"is-style-verre digima-hero digima-hero-page","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"textColor":"blanc","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull is-style-verre digima-hero digima-hero-page has-blanc-color has-text-color" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);min-height:46vh"><span aria-hidden="true" class="wp-block-cover__background has-nuit-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Nom de l’activité', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xxx-large","style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
<h1 class="wp-block-heading has-xxx-large-font-size" style="letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'La promesse de la page,', 'digima' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vert-color"><?php esc_html_e( 'en une phrase', 'digima' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"digima-hero-chapeau","textColor":"texte-secondaire","fontSize":"large"} -->
<p class="digima-hero-chapeau has-texte-secondaire-color has-text-color has-large-font-size"><?php esc_html_e( 'Deux lignes pour dire à qui s’adresse l’offre et ce qu’elle change.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Parlons de votre projet', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
