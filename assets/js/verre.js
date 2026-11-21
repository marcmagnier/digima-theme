/**
 * Digima — couverture « Verre » : la lueur suit le pointeur.
 *
 * Met à jour les variables CSS --digima-x et --digima-y (en %) de chaque
 * couverture .is-style-verre ; la lueur est dessinée en CSS (style.css).
 * Mouvement amorti, calculé seulement pendant que la lueur se déplace.
 * Inactif sur écran tactile et si « réduire les animations » est activé :
 * la lueur reste alors à sa position de repos.
 */
( function () {
	'use strict';

	var REPOS_X = 72;
	var REPOS_Y = 32;
	var AMORTI = 0.08;

	if (
		! window.matchMedia ||
		window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ||
		! window.matchMedia( '(hover: hover) and (pointer: fine)' ).matches
	) {
		return;
	}

	function activer( el ) {
		var x = REPOS_X;
		var y = REPOS_Y;
		var cibleX = REPOS_X;
		var cibleY = REPOS_Y;
		var image = 0;

		function etape() {
			x += ( cibleX - x ) * AMORTI;
			y += ( cibleY - y ) * AMORTI;
			el.style.setProperty( '--digima-x', x.toFixed( 2 ) + '%' );
			el.style.setProperty( '--digima-y', y.toFixed( 2 ) + '%' );

			if ( Math.abs( cibleX - x ) > 0.05 || Math.abs( cibleY - y ) > 0.05 ) {
				image = window.requestAnimationFrame( etape );
			} else {
				image = 0;
			}
		}

		function lancer() {
			if ( ! image ) {
				image = window.requestAnimationFrame( etape );
			}
		}

		el.addEventListener(
			'pointermove',
			function ( e ) {
				var r = el.getBoundingClientRect();
				cibleX = ( ( e.clientX - r.left ) / r.width ) * 100;
				cibleY = ( ( e.clientY - r.top ) / r.height ) * 100;
				lancer();
			},
			{ passive: true }
		);

		el.addEventListener( 'pointerleave', function () {
			cibleX = REPOS_X;
			cibleY = REPOS_Y;
			lancer();
		} );
	}

	document.querySelectorAll( '.wp-block-cover.is-style-verre' ).forEach( activer );
} )();
