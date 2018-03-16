(( function ( w, d) {
	'use strict';

	var $input = document.querySelectorAll("[data-js='input']");

	var $submit = document.querySelector("[data-js='submit']");

	for (var i = 0; i <= $input.length; i++) {

	}

	$submit.addEventListener( 'submit', function (s) {

		// for (var i = 0; i <= $input.length; i++) {
		// 	if (!$input[i].value) {
		// 		s.preventDefault();
		// 		alert("Informe " + $input[i].placeholder);
		// 		break;
		// 	}
		// 	if ($input[i]['type'] === 'radio' && $input[i]['value'] == true && $input[i+1]['type'] === 'text') {
		// 		alert("Informe " + $input[i+1].placeholder);
		// 	}			
		// }

	},false);

})( window, document));