document.querySelector( '.open-search' ).addEventListener( 'click', () => {
	document.querySelector( '.logo' ).style.display = 'none';
	document.querySelector( '.open-search' ).style.display = 'none';

	document.querySelector( '.search' ).classList.add( 'col-10' );
	document.querySelector( '.search-div' ).classList.remove( 'd-none' );
} );
