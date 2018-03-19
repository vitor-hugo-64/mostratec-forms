// (( function ( w, d) {
// 	'use strict';

// 	var $input = document.querySelectorAll("[data-js='input']");
// 	var $radio = document.querySelectorAll("[data-js='radio']");

// 	var $submit = document.querySelector("[data-js='submit']");

// 	$submit.addEventListener( 'submit', function (s) {

// 		for (var i = 0; i <= $input.length; i++) {
// 			// if (!$input[i].value) {
// 			// 	s.preventDefault();
// 			// 	alert("Informe " + $input[i].placeholder);
// 			// 	break;
// 			// }
// 			if ($input[i].type === 'radio' && $input[i].checked && $input[i+1].type === 'text' && !$input[i+1].value) {
// 				s.preventDefault();
// 				alert("Informe " + $input[i+1].placeholder);
// 			}

// 			if ($input[i].type === 'checkbox' && $input[i].checked && $input[i+1].type === 'number' && !$input[i+1].value && $input[i+2].type === 'number' && !$input[i+2].value) {
// 				s.preventDefault();
// 				alert("Informe " + $input[i+1].placeholder + " Do Nível De Ensino " + $input[i].placeholder);
// 				alert("Informe " + $input[i+2].placeholder + " Do Nível De Ensino " + $input[i].placeholder);
// 			}
// 		}

// 		for (var i = 0; i <= $radio.length; i++) {
// 			var cont;
// 			var name = false;
// 			if($radio[i].checked && $radioname) {
// 				cont = true;
// 			}
// 		}		

// 	},false);

// })( window, document));