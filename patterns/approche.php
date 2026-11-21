<?php
/**
 * Title: Approche (4 arguments)
 * Slug: digima/approche
 * Categories: digima, about
 * Keywords: approche, valeurs, arguments, pourquoi
 * Viewport Width: 1400
 * Description: Section brume : quatre arguments courts sous un filet avec trait vert. Textes à adapter ; pas de chiffres non vérifiables.
 *
 * @package digima
 */

$digima_arguments = array(
	array( __( 'Vous gardez la maîtrise', 'digima' ), __( 'Logiciels open source et données hébergées en Europe : vos outils restent les vôtres.', 'digima' ) ),
	array( __( 'Un seul interlocuteur', 'digima' ), __( 'Du premier conseil à l’hébergement, la même équipe suit votre projet.', 'digima' ) ),
	array( __( 'Du concret', 'digima' ), __( 'Pas de jargon : des outils utiles, expliqués simplement, que vos équipes savent utiliser.', 'digima' ) ),
	array( __( 'Une agence proche', 'digima' ), __( 'Basés à Andenne, joignables directement par téléphone.', 'digima' ) ),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section-brume","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-brume" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Notre approche', 'digima' ); ?></p>
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
