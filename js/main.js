$('#myModal').modal('fade')
$('#myModal').modal('toggle')

(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip()

	var myModal = document.getElementById('myModal')
	var myInput = document.getElementById('myInput')
	
	myModal.addEventListener('shown.bs.modal', function () {
	myInput.focus()
	});

})(jQuery);
