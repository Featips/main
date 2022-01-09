
var elms = document.querySelector('.splide' );


  new Splide( elms,{

		perPage    : 3,
		breakpoints: {
			900: {
				perPage: 4,
			},
			390: {
					perPage: 2,
				},
		},
    
  } ).mount();