<?php
/**
 * Title: Hero — verre cannelé
 * Slug: digima/hero
 * Categories: digima, banner
 * Keywords: hero, accueil, couverture, verre
 * Viewport Width: 1400
 * Description: Grande section d'ouverture bleu nuit à effet de verre cannelé : étiquette, titre, chapeau et deux boutons.
 *
 * @package digima
 */

?>
<!-- wp:cover {"overlayColor":"nuit","isUserOverlayColor":true,"minHeight":82,"minHeightUnit":"vh","isDark":true,"align":"full","className":"is-style-verre digima-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"textColor":"blanc","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull is-style-verre digima-hero has-blanc-color has-text-color" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);min-height:82vh"><span aria-hidden="true" class="wp-block-cover__background has-nuit-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Agence web à Andenne', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"display","style":{"typography":{"lineHeight":"1.07","letterSpacing":"-0.02em"}}} -->
<h1 class="wp-block-heading has-display-font-size" style="letter-spacing:-0.02em;line-height:1.07"><?php esc_html_e( 'Des outils web', 'digima' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vert-color"><?php esc_html_e( 'qui vous appartiennent', 'digima' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"digima-hero-chapeau","textColor":"texte-secondaire","fontSize":"large"} -->
<p class="digima-hero-chapeau has-texte-secondaire-color has-text-color has-large-font-size"><?php esc_html_e( 'Sites web, cloud souverain, Open Data et conseil IA. Un seul interlocuteur, du conseil à l’hébergement.', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contactez-nous/' ) ); ?>"><?php esc_html_e( 'Prendre rendez-vous', 'digima' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#activites"><?php esc_html_e( 'Découvrir nos activités', 'digima' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
