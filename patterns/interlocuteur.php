<?php
/**
 * Title: Un seul interlocuteur (3 arguments)
 * Slug: digima/interlocuteur
 * Categories: digima, about
 * Keywords: interlocuteur, arguments, promesse, indépendant
 * Viewport Width: 1400
 * Description: La promesse centrale en trois arguments courts sous filet vert. Textes à adapter.
 *
 * @package digima
 */

$digima_arguments = array(
	array( __( 'Je fais tout moi-même', 'digima' ), __( 'Conception, développement, hébergement, maintenance et formation : la personne qui vous écoute est celle qui réalise.', 'digima' ) ),
	array( __( 'Je parle votre langue', 'digima' ), __( 'Pas de jargon. J’écoute votre besoin et je le traduis en solution technique, en vous expliquant chaque choix.', 'digima' ) ),
	array( __( 'Pas d’équipe commerciale à payer', 'digima' ), __( 'Pas de frais de structure qui gonflent la facture : vous payez le travail, rien d’autre.', 'digima' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Un seul interlocuteur', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'De la première idée à la maintenance, c’est moi', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
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
