jQuery(document).ready(function($) {
	$('#contact-form').validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		errorElement: 'div'
	});
});