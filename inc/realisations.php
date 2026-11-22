<?php
/**
 * Digima — réalisations : articles de la catégorie « Réalisations » (slug realisations).
 *
 * Fonctions utilisées par les patterns digima/realisations et digima/realisations-grille
 * pour produire le balisage de blocs. Le contenu (les projets) reste dans les articles.
 *
 * @package digima
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'DIGIMA_SLUG_REALISATIONS' ) ) {
	define( 'DIGIMA_SLUG_REALISATIONS', 'realisations' );
}

if ( ! function_exists( 'digima_id_realisations' ) ) {
	/**
	 * Identifiant de la catégorie « Réalisations », ou 0 si elle n'existe pas.
	 *
	 * @return int
	 */
	function digima_id_realisations() {
		$categorie = get_term_by( 'slug', DIGIMA_SLUG_REALISATIONS, 'category' );
		return $categorie ? (int) $categorie->term_id : 0;
	}
}

/*
 * Les réalisations ont leur propre section et leur propre page : on les retire
 * des listes d'actus (page Blog et boucles d'articles sans filtre de catégorie,
 * comme « Derniers articles »). Une boucle filtrée sur une catégorie n'est pas touchée.
 */
add_filter(
	'query_loop_block_query_vars',
	function ( $vars, $block ) {
		$id = digima_id_realisations();
		if ( ! $id || ! empty( $block->context['query']['taxQuery'] ) ) {
			return $vars;
		}
		$type = $vars['post_type'] ?? 'post';
		if ( 'post' !== $type && array( 'post' ) !== (array) $type ) {
			return $vars;
		}
		$vars['category__not_in'] = array_merge( (array) ( $vars['category__not_in'] ?? array() ), array( $id ) );
		return $vars;
	},
	10,
	2
);

add_action(
	'pre_get_posts',
	function ( $query ) {
		if ( is_admin() || ! $query->is_main_query() || ! $query->is_home() ) {
			return;
		}
		$id = digima_id_realisations();
		if ( $id ) {
			$query->set( 'category__not_in', array_merge( (array) $query->get( 'category__not_in' ), array( $id ) ) );
		}
	}
);

if ( ! function_exists( 'digima_url_realisations' ) ) {
	/**
	 * Adresse de la liste des réalisations : la page publiée « realisations » si elle existe,
	 * sinon l'archive de la catégorie, sinon l'adresse prévue (/realisations/).
	 *
	 * @return string
	 */
	function digima_url_realisations() {
		$page = get_page_by_path( 'realisations' );
		if ( $page && 'publish' === $page->post_status ) {
			return get_permalink( $page );
		}
		$categorie = get_term_by( 'slug', DIGIMA_SLUG_REALISATIONS, 'category' );
		if ( $categorie ) {
			return get_category_link( $categorie );
		}
		return home_url( '/realisations/' );
	}
}

if ( ! function_exists( 'digima_boucle_realisations' ) ) {
	/**
	 * Balisage d'une boucle de requête sur la catégorie « Réalisations ».
	 *
	 * @param int  $nombre   Nombre de réalisations par page.
	 * @param bool $paginer  Ajouter la pagination.
	 * @return string Balisage de blocs.
	 */
	function digima_boucle_realisations( $nombre, $paginer ) {
		$categorie = get_term_by( 'slug', DIGIMA_SLUG_REALISATIONS, 'category' );

		// Sans la catégorie, une boucle afficherait tous les articles : on affiche une consigne à la place.
		if ( ! $categorie ) {
			return '<!-- wp:paragraph {"textColor":"texte-secondaire"} -->' . "\n"
				. '<p class="has-texte-secondaire-color has-text-color">'
				. esc_html__( 'Créez la catégorie d’articles « Réalisations » (slug : realisations) et rangez-y vos projets, puis insérez à nouveau cette section.', 'digima' )
				. '</p>' . "\n" . '<!-- /wp:paragraph -->';
		}

		$requete = array(
			'queryId' => $paginer ? 21 : 20,
			'query'   => array(
				'perPage'  => (int) $nombre,
				'pages'    => 0,
				'offset'   => 0,
				'postType' => 'post',
				'order'    => 'desc',
				'orderBy'  => 'date',
				'author'   => '',
				'search'   => '',
				'exclude'  => array(),
				'sticky'   => '',
				'inherit'  => false,
				'taxQuery' => array( 'category' => array( (int) $categorie->term_id ) ),
			),
		);

		$pagination = '';
		if ( $paginer ) {
			$pagination = "\n\n" . '<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->' . "\n"
				. '<!-- wp:query-pagination-previous /-->' . "\n\n"
				. '<!-- wp:query-pagination-numbers /-->' . "\n\n"
				. '<!-- wp:query-pagination-next /-->' . "\n"
				. '<!-- /wp:query-pagination -->';
		}

		return '<!-- wp:query ' . wp_json_encode( $requete ) . ' -->' . "\n"
			. '<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->' . "\n"
			. '<!-- wp:group {"className":"is-style-carte digima-carte-article","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->' . "\n"
			. '<div class="wp-block-group is-style-carte digima-carte-article" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->' . "\n\n"
			. '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->' . "\n"
			. '<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->' . "\n\n"
			. '<!-- wp:post-excerpt {"excerptLength":18,"textColor":"texte-secondaire"} /--></div>' . "\n"
			. '<!-- /wp:group --></div>' . "\n"
			. '<!-- /wp:group -->' . "\n"
			. '<!-- /wp:post-template -->'
			. $pagination . "\n\n"
			. '<!-- wp:query-no-results -->' . "\n"
			. '<!-- wp:paragraph {"textColor":"texte-secondaire"} -->' . "\n"
			. '<p class="has-texte-secondaire-color has-text-color">' . esc_html__( 'Aucune réalisation publiée pour l’instant.', 'digima' ) . '</p>' . "\n"
			. '<!-- /wp:paragraph -->' . "\n"
			. '<!-- /wp:query-no-results --></div>' . "\n"
			. '<!-- /wp:query -->';
	}
}

/*
 * Pages de catégorie : on n'y liste que les articles du blog (les réalisations
 * ont leur page), sauf sur l'archive de la catégorie « Réalisations » elle-même.
 */
add_action(
	'pre_get_posts',
	function ( $query ) {
		if ( is_admin() || ! $query->is_main_query() || ! $query->is_category() ) {
			return;
		}
		$id = digima_id_realisations();
		if ( ! $id || $query->is_category( $id ) ) {
			return;
		}
		$query->set( 'category__not_in', array_merge( (array) $query->get( 'category__not_in' ), array( $id ) ) );
	}
);

if ( ! function_exists( 'digima_filtrer_categories_blog' ) ) {
	/**
	 * Retire de la liste « Réalisations » et les catégories qui ne contiennent que des réalisations.
	 *
	 * @param array $termes Termes renvoyés par get_terms().
	 * @return array
	 */
	function digima_filtrer_categories_blog( $termes ) {
		$id = digima_id_realisations();
		if ( ! $id || ! is_array( $termes ) ) {
			return $termes;
		}
		return array_values(
			array_filter(
				$termes,
				function ( $terme ) use ( $id ) {
					if ( ! $terme instanceof WP_Term || 'category' !== $terme->taxonomy ) {
						return true;
					}
					if ( (int) $terme->term_id === $id ) {
						return false;
					}
					$articles = get_posts(
						array(
							'post_type'        => 'post',
							'posts_per_page'   => 1,
							'fields'           => 'ids',
							'no_found_rows'    => true,
							'cat'              => (int) $terme->term_id,
							'category__not_in' => array( $id ),
						)
					);
					return ! empty( $articles );
				}
			)
		);
	}
}

/*
 * Bloc « Catégories » : sans les réalisations (filtre actif seulement pendant le rendu du bloc).
 */
add_filter(
	'pre_render_block',
	function ( $rendu, $block ) {
		if ( 'core/categories' === ( $block['blockName'] ?? '' ) ) {
			add_filter( 'get_terms', 'digima_filtrer_categories_blog' );
		}
		return $rendu;
	},
	10,
	2
);

add_filter(
	'render_block_core/categories',
	function ( $html, $block ) {
		remove_filter( 'get_terms', 'digima_filtrer_categories_blog' );

		// Style « Pastilles » : première pastille « Tous les articles » vers la page Blog.
		if ( ! str_contains( $block['attrs']['className'] ?? '', 'is-style-pastilles' ) || ! empty( $block['attrs']['displayAsDropdown'] ) ) {
			return $html;
		}
		$page_blog = get_option( 'page_for_posts' ) ? get_post( get_option( 'page_for_posts' ) ) : get_page_by_path( 'blog' );
		if ( ! $page_blog ) {
			return $html;
		}
		$actif = is_page( $page_blog->ID ) || ( is_home() && (int) get_option( 'page_for_posts' ) === $page_blog->ID );
		$tous  = sprintf(
			'<li class="cat-item cat-item-tous%1$s"><a href="%2$s"%3$s>%4$s</a></li>',
			$actif ? ' current-cat' : '',
			esc_url( get_permalink( $page_blog ) ),
			$actif ? ' aria-current="page"' : '',
			esc_html__( 'Tous les articles', 'digima' )
		);
		return preg_replace( '/(<ul\b[^>]*>)/', '$1' . $tous, $html, 1 );
	},
	10,
	2
);
