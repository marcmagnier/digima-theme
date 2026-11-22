/**
 * Groupe au style « Références » : chaque sous-groupe (logo + nom + explication) devient un onglet.
 * Les logos forment une rangée cliquable (niveaux de gris, l'actif en couleur) ; le nom et l'explication
 * du client actif s'affichent au-dessus. Passage automatique au suivant tant qu'on n'interagit pas.
 * Sans JavaScript, les références restent simplement affichées les unes sous les autres.
 */
( function () {
	'use strict';

	var DUREE = 6000;
	var mouvementReduit = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var compteur = 0;

	function initialiser( bloc ) {
		var items = Array.prototype.filter.call( bloc.children, function ( el ) {
			return el.classList.contains( 'wp-block-group' ) && el.querySelector( 'img' );
		} );
		if ( items.length < 2 ) {
			return;
		}

		var id = 'digima-ref-' + ( ++compteur );
		var textes = document.createElement( 'div' );
		textes.className = 'digima-references__textes';
		textes.setAttribute( 'aria-live', 'polite' );

		var logos = document.createElement( 'div' );
		logos.className = 'digima-references__logos';
		logos.setAttribute( 'role', 'tablist' );
		logos.setAttribute( 'aria-label', 'Références clients' );

		bloc.insertBefore( textes, items[ 0 ] );
		bloc.insertBefore( logos, items[ 0 ] );

		var onglets = items.map( function ( item, i ) {
			var img = item.querySelector( 'img' );
			var titre = item.querySelector( 'h1, h2, h3, h4, h5, h6' );
			var nom = ( titre && titre.textContent.trim() ) || img.alt || 'Référence ' + ( i + 1 );

			item.id = id + '-panneau-' + i;
			item.setAttribute( 'role', 'tabpanel' );
			item.classList.add( 'digima-references__panneau' );
			textes.appendChild( item );

			var onglet = document.createElement( 'button' );
			onglet.type = 'button';
			onglet.id = id + '-onglet-' + i;
			onglet.className = 'digima-references__onglet';
			onglet.setAttribute( 'role', 'tab' );
			onglet.setAttribute( 'aria-controls', item.id );
			onglet.setAttribute( 'aria-label', nom );
			var copie = img.cloneNode( true );
			copie.alt = '';
			copie.removeAttribute( 'srcset' );
			copie.removeAttribute( 'sizes' );
			copie.removeAttribute( 'style' );
			copie.loading = 'lazy';
			onglet.appendChild( copie );
			item.setAttribute( 'aria-labelledby', onglet.id );
			logos.appendChild( onglet );
			return onglet;
		} );

		var actif = 0;
		var minuterie = null;
		var survol = false;
		var focus = false;
		var enPause = mouvementReduit;

		var bascule = document.createElement( 'button' );
		bascule.type = 'button';
		bascule.className = 'digima-references__pause';
		bloc.appendChild( bascule );

		function majBascule() {
			bascule.textContent = enPause ? 'Reprendre le défilement' : 'Mettre en pause';
			bascule.setAttribute( 'aria-pressed', enPause ? 'true' : 'false' );
		}

		function afficher( n, donnerFocus ) {
			actif = ( n + items.length ) % items.length;
			onglets.forEach( function ( o, i ) {
				var oui = i === actif;
				o.setAttribute( 'aria-selected', oui ? 'true' : 'false' );
				o.tabIndex = oui ? 0 : -1;
				items[ i ].hidden = ! oui;
			} );
			// Relance l'animation de la barre de progression.
			bloc.classList.remove( 'est-en-cours' );
			void bloc.offsetWidth;
			if ( donnerFocus ) {
				onglets[ actif ].focus();
			}
			relancer();
		}

		function relancer() {
			window.clearTimeout( minuterie );
			var roule = ! enPause && ! survol && ! focus;
			bloc.classList.toggle( 'est-en-cours', roule );
			if ( roule ) {
				minuterie = window.setTimeout( function () {
					afficher( actif + 1 );
				}, DUREE );
			}
		}

		onglets.forEach( function ( o, i ) {
			o.addEventListener( 'click', function () {
				afficher( i );
			} );
		} );

		logos.addEventListener( 'keydown', function ( e ) {
			var cible = { ArrowRight: actif + 1, ArrowLeft: actif - 1, Home: 0, End: items.length - 1 }[ e.key ];
			if ( cible !== undefined ) {
				e.preventDefault();
				afficher( cible, true );
			}
		} );

		bascule.addEventListener( 'click', function () {
			enPause = ! enPause;
			majBascule();
			afficher( actif );
		} );

		bloc.addEventListener( 'mouseenter', function () {
			survol = true;
			relancer();
		} );
		bloc.addEventListener( 'mouseleave', function () {
			survol = false;
			afficher( actif );
		} );
		// Pause pendant la navigation au clavier seulement : après un clic, le défilement reprend
		// dès que la souris quitte la section.
		bloc.addEventListener( 'focusin', function ( e ) {
			var clavier = true;
			try {
				clavier = e.target.matches( ':focus-visible' );
			} catch ( err ) {}
			if ( clavier ) {
				focus = true;
				relancer();
			}
		} );
		bloc.addEventListener( 'focusout', function ( e ) {
			if ( ! bloc.contains( e.relatedTarget ) ) {
				focus = false;
				afficher( actif );
			}
		} );

		bloc.style.setProperty( '--dg-ref-duree', DUREE + 'ms' );
		bloc.classList.add( 'est-interactif' );
		majBascule();
		afficher( 0 );
	}

	function demarrer() {
		document.querySelectorAll( '.wp-block-group.is-style-references' ).forEach( initialiser );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', demarrer );
	} else {
		demarrer();
	}
}() );
