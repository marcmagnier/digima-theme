<?php
/**
 * Title: Arguments (4, sous filet vert)
 * Slug: digima/approche
 * Categories: digima, about
 * Keywords: approche, valeurs, arguments, façon de travailler, garanties
 * Viewport Width: 1400
 * Description: Quatre arguments courts sous un filet à trait vert (façon de travailler, garanties…). Textes à adapter ; pas de chiffres non vérifiables.
 *
 * @package digima
 */

$digima_arguments = array(
	array( __( 'J’écoute d’abord', 'digima' ), __( 'Je pars de votre besoin et je le traduis en solution technique, pas l’inverse.', 'digima' ) ),
	array( __( 'J’explique sans jargon', 'digima' ), __( 'Vous savez ce que vous achetez, comment ça marche et ce que ça coûte.', 'digima' ) ),
	array( __( 'Des coûts annoncés clairement', 'digima' ), __( 'La création, puis un forfait ou un abonnement : pas de surprise en cours de route.', 'digima' ) ),
	array( __( 'Vos données restent à vous', 'digima' ), __( 'Je privilégie les logiciels libres et des serveurs 100 % européens.', 'digima' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Façon de travailler', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Des outils que vous comprenez et que vous gardez', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group"><?php foreach ( $digima_arguments as $digima_argument ) : ?><!-- wp:group {"className":"is-style-filet-vert","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-filet-vert"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $digima_argument[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php echo esc_html( $digima_argument[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
