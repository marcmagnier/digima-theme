<?php
/**
 * Title: Grille des 4 activités
 * Slug: digima/activites
 * Categories: digima, services
 * Keywords: activités, services, cartes, grille
 * Viewport Width: 1400
 * Description: Les quatre activités à égalité, en cartes avec icône, une phrase et un lien vers la page de l'activité. Textes à adapter.
 *
 * @package digima
 */

$digima_icones = get_theme_file_uri( 'assets/images/icones/' );
$digima_cartes = array(
	array( 'web', __( 'Sites web', 'digima' ), __( 'Un site conçu, hébergé et entretenu par la même personne, sous WordPress.', 'digima' ), '/sites-web/', __( 'Découvrir les sites web', 'digima' ) ),
	array( 'cloud', __( 'Cloud souverain', 'digima' ), __( 'Vos fichiers restent en Belgique, sous droit européen, sur un Nextcloud que je gère pour vous.', 'digima' ), '/cloud-souverain/', __( 'Découvrir le cloud souverain', 'digima' ) ),
	array( 'open-data', __( 'Open Data', 'digima' ), __( 'Faire parler vos données publiques : quoi publier, comment, et les data stories qui les rendent lisibles.', 'digima' ), '/open-data/', __( 'Découvrir l’Open Data', 'digima' ) ),
	array( 'ia', __( 'Intelligence artificielle', 'digima' ), __( 'Une IA utile, sans le battage : conseil, formation et IA au service de votre site.', 'digima' ), '/intelligence-artificielle/', __( 'Découvrir l’offre IA', 'digima' ) ),
);
?>
<!-- wp:group {"anchor":"activites","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="activites" class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-etiquette"} -->
<p class="is-style-etiquette"><?php esc_html_e( 'Activités', 'digima' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Quatre métiers qui se complètent', 'digima' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"digima-chapeau","textColor":"texte-secondaire","fontSize":"large"} -->
<p class="digima-chapeau has-texte-secondaire-color has-text-color has-large-font-size"><?php esc_html_e( 'Des besoins différents, la même personne pour vous écouter, construire et entretenir.', 'digima' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
<div class="wp-block-group"><?php foreach ( $digima_cartes as $digima_carte ) : ?><!-- wp:group {"className":"is-style-carte","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-carte"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","className":"is-style-pastille"} -->
<figure class="wp-block-image size-full is-resized is-style-pastille"><img src="<?php echo esc_url( $digima_icones . $digima_carte[0] . '.svg' ); ?>" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $digima_carte[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"texte-secondaire"} -->
<p class="has-texte-secondaire-color has-text-color"><?php echo esc_html( $digima_carte[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-lien"} -->
<div class="wp-block-button is-style-lien"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( $digima_carte[3] ) ); ?>"><?php echo esc_html( $digima_carte[4] ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
