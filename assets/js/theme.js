/**
 * Forge front-end interactions.
 * Vanilla JS: scroll reveals, count-up stats, back-to-top, sticky header.
 * Honors prefers-reduced-motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	// Scroll reveal.
	var revealEls = document.querySelectorAll( '.forge-reveal' );
	if ( revealEls.length && ! reduceMotion && 'IntersectionObserver' in window ) {
		var io = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-visible' );
					io.unobserve( entry.target );
				}
			} );
		}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' } );
		revealEls.forEach( function ( el ) { io.observe( el ); } );
	} else {
		revealEls.forEach( function ( el ) { el.classList.add( 'is-visible' ); } );
	}

	// Count-up stats: elements with [data-forge-count] animate to the value.
	var counters = document.querySelectorAll( '[data-forge-count]' );
	function animateCount( el ) {
		var target = parseFloat( el.getAttribute( 'data-forge-count' ) );
		var suffix = el.getAttribute( 'data-forge-suffix' ) || '';
		if ( reduceMotion || isNaN( target ) ) {
			el.textContent = ( isNaN( target ) ? 0 : target ) + suffix;
			return;
		}
		var duration = 1400;
		var start = null;
		function frame( ts ) {
			if ( ! start ) { start = ts; }
			var p = Math.min( ( ts - start ) / duration, 1 );
			var eased = 1 - Math.pow( 1 - p, 3 );
			var value = target * eased;
			el.textContent = ( target % 1 === 0 ? Math.round( value ) : value.toFixed( 1 ) ) + suffix;
			if ( p < 1 ) { requestAnimationFrame( frame ); }
		}
		requestAnimationFrame( frame );
	}
	if ( counters.length && 'IntersectionObserver' in window ) {
		var cio = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					animateCount( entry.target );
					cio.unobserve( entry.target );
				}
			} );
		}, { threshold: 0.4 } );
		counters.forEach( function ( el ) { cio.observe( el ); } );
	} else {
		counters.forEach( animateCount );
	}

	// Back to top.
	var topBtn = document.querySelector( '.forge-top' );
	if ( topBtn ) {
		window.addEventListener( 'scroll', function () {
			if ( window.scrollY > 600 ) {
				topBtn.classList.add( 'is-shown' );
			} else {
				topBtn.classList.remove( 'is-shown' );
			}
		}, { passive: true } );
		topBtn.addEventListener( 'click', function () {
			window.scrollTo( { top: 0, behavior: reduceMotion ? 'auto' : 'smooth' } );
		} );
	}

	// Sticky header shadow.
	var header = document.querySelector( '.forge-site-header' );
	if ( header ) {
		window.addEventListener( 'scroll', function () {
			header.classList.toggle( 'is-stuck', window.scrollY > 24 );
		}, { passive: true } );
	}
})();
