
var elms = document.getElementsByClassName( 'splide' );

for ( var i = 0; i < elms.length; i++ ) {
  new Splide( elms[ i ] ,{

		perPage    : 3,
		breakpoints: {
			900: {
				perPage: 2,
			},
			390: {
					perPage: 1,
				},
		},
    
  } ).mount();
}