$(document).ready(function(){
	$('#contact_form').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			name: {
				required: true
			},
			phone: {
				required: true,
				phoneUS: true
			},
			message: {
				required: true
			}
		}, // end rules
		messages: {
			email: {
				required: "Please enter your email address",
				email: "Please enter a valid email address"
			},
			name: {
				required: "Please enter your name"
			},
			phone: {
				required: "Please enter your phone",
				phoneUS: "Please enter a valid phone number"
			},
			message: {
				required: "Please enter a message"
			}
		}, // end messages
	});
});