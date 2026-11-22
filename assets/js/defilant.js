/**
 * Galeries « Logos défilants » : flèches précédent / suivant et points de pagination.
 * Le défilement lui-même est en CSS (scroll-snap) ; sans JavaScript, la bande reste défilable au doigt ou à la souris.
 */
( function () {
	'use strict';

	function bouton( classe, libelle, symbole ) {
		var b = document.createElement( 'button' );
		b.type = 'button';
		b.className = 'digima-defilant__fleche ' + classe;
		b.setAttribute( 'aria-label', libelle );
		b.innerHTML = '<span aria-hidden="true">' + symbole + '</span>';
		return b;
	}

	function initialiser( galerie ) {
		if ( ! galerie.querySelector( 'figure' ) ) {
			return;
		}

		var cadre = document.createElement( 'div' );
		cadre.className = 'digima-defilant';
		galerie.parentNode.insertBefore( cadre, galerie );
		cadre.appendChild( galerie );
		galerie.setAttribute( 'tabindex', '0' );
		galerie.setAttribute( 'role', 'region' );
		galerie.setAttribute( 'aria-label', 'Logos clients' );

		var prec = bouton( 'digima-defilant__fleche--prec', 'Logos précédents', '‹' );
		var suiv = bouton( 'digima-defilant__fleche--suiv', 'Logos suivants', '›' );
		var points = document.createElement( 'div' );
		points.className = 'digima-defilant__points';
		cadre.appendChild( prec );
		cadre.appendChild( suiv );
		cadre.appendChild( points );

		var nbPages = 0;

		function pageCourante() {
			var max = galerie.scrollWidth - galerie.clientWidth;
			if ( galerie.scrollLeft >= max - 2 ) {
				return nbPages - 1;
			}
			return Math.round( galerie.scrollLeft / galerie.clientWidth );
		}

		function allerA( page ) {
			if ( page < 0 ) {
				page = nbPages - 1;
			} else if ( page >= nbPages ) {
				page = 0;
			}
			galerie.scrollTo( { left: page * galerie.clientWidth, behavior: 'smooth' } );
		}

		function majPoints() {
			var courante = pageCourante();
			Array.prototype.forEach.call( points.children, function ( p, i ) {
				p.setAttribute( 'aria-current', i === courante ? 'true' : 'false' );
			} );
		}

		function construire() {
			var n = Math.max( 1, Math.ceil( ( galerie.scrollWidth - 2 ) / galerie.clientWidth ) );
			cadre.classList.toggle( 'est-statique', n < 2 );
			if ( n === nbPages ) {
				majPoints();
				return;
			}
			nbPages = n;
			points.innerHTML = '';
			for ( var i = 0; i < n; i++ ) {
				var p = document.createElement( 'button' );
				p.type = 'button';
				p.className = 'digima-defilant__point';
				p.setAttribute( 'aria-label', 'Page ' + ( i + 1 ) + ' sur ' + n );
				p.addEventListener( 'click', allerA.bind( null, i ) );
				points.appendChild( p );
			}
			majPoints();
		}

		prec.addEventListener( 'click', function () {
			allerA( pageCourante() - 1 );
		} );
		suiv.addEventListener( 'click', function () {
			allerA( pageCourante() + 1 );
		} );

		var attente;
		galerie.addEventListener( 'scroll', function () {
			window.clearTimeout( attente );
			attente = window.setTimeout( majPoints, 80 );
		}, { passive: true } );

		if ( 'ResizeObserver' in window ) {
			new ResizeObserver( construire ).observe( galerie );
		} else {
			window.addEventListener( 'resize', construire );
		}
		// Les logos chargés plus tard changent la largeur totale.
		galerie.querySelectorAll( 'img' ).forEach( function ( img ) {
			if ( ! img.complete ) {
				img.addEventListener( 'load', construire, { once: true } );
			}
		} );
		construire();
	}

	function demarrer() {
		document.querySelectorAll( '.wp-block-gallery.is-style-logos-defilants' ).forEach( initialiser );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', demarrer );
	} else {
		demarrer();
	}
}() );
