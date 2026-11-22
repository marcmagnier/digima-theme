/**
 * Défilement : ombre sous l'en-tête collant dès que la page a défilé, en-tête plus compact après 100 px,
 * et pastille « Retour en haut » qui apparaît après un écran de défilement.
 */
( function () {
	'use strict';

	var racine = document.documentElement;
	var bouton = document.createElement( 'button' );
	bouton.type = 'button';
	bouton.className = 'digima-haut';
	bouton.setAttribute( 'aria-label', 'Retour en haut de la page' );
	bouton.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 19V5M5 12l7-7 7 7" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	document.body.appendChild( bouton );

	var enAttente = false;
	function maj() {
		enAttente = false;
		var y = window.scrollY || window.pageYOffset;
		racine.classList.toggle( 'digima-a-defile', y > 0 );
		// En-tête compact : seuils différents à l'aller et au retour pour éviter un effet de saut.
		if ( y > 100 ) {
			racine.classList.add( 'digima-entete-compacte' );
		} else if ( y < 20 ) {
			racine.classList.remove( 'digima-entete-compacte' );
		}
		var visible = y > window.innerHeight;
		bouton.classList.toggle( 'est-visible', visible );
		// Invisible = hors de l'ordre de tabulation.
		bouton.tabIndex = visible ? 0 : -1;
	}

	window.addEventListener( 'scroll', function () {
		if ( ! enAttente ) {
			enAttente = true;
			window.requestAnimationFrame( maj );
		}
	}, { passive: true } );
	window.addEventListener( 'resize', maj );

	bouton.addEventListener( 'click', function () {
		var reduit = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		window.scrollTo( { top: 0, behavior: reduit ? 'auto' : 'smooth' } );
		// Le focus clavier repart du haut de la page (logo de l'en-tête).
		var cible = document.querySelector( '.digima-entete a' );
		if ( cible ) {
			cible.focus( { preventScroll: true } );
		}
	} );

	maj();
}() );
