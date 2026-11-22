<?php
/**
 * Title: Étapes (comment ça se passe)
 * Slug: digima/etapes
 * Categories: digima, text
 * Keywords: étapes, méthode, processus, comment ça se passe
 * Viewport Width: 1400
 * Description: Quatre étapes numérotées en cartes : écoute, proposition, réalisation, suivi. Textes à adapter.
 *
 * @package digima
 */

$digima_etapes = array(
	array( __( 'Écoute', 'digima' ), __( 'On se rencontre et vous m’expliquez votre besoin, sans jargon.', 'digima' ) ),
	array( __( 'Proposition', 'digima' ), __( 'Je vous propose une solution et un coût clairs, par écrit.', 'digima' ) ),
	array( __( 'Réalisation', 'digima' ), __( 'Je construis et je mets en ligne, en vous tenant au courant.', 'digima' ) ),
	array( __( 'Suivi', 'digima' ), __( 'J’héberge, je mets à jour et je reste votre contact au quotidien.', 'digima' ) ),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section-brume","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-section-brume" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Méthode', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Comment ça se passe', 'digima' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"digima-etapes","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group digima-etapes"><?php foreach ( $digima_etapes as $digima_etape ) : ?><!-- wp:group {"className":"is-style-carte digima-etape","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-carte digima-etape"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $digima_etape[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php echo esc_html( $digima_etape[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
