$(document).ready( function() {

	/** 
	 * Clear form fields
	 *
	 * @param {string} form forms with fields to clean
	 */
	function emptyFields(form) {
		$(form).children().each( function(index, element) {
			if ($(element).is('input:not([type=submit])') || $(element).is('textarea')) {
				$(element).val('');
			}
		});
	}

	$('#contact').submit( function( event){

		event.preventDefault();
		var msg = $('div#message');

		$.ajax({
			url: '../../pages/forms/mail.php',
			type: 'POST',
			data: {
				name: $('input#name').val(),
				email: $('input#email').val(),
				subject: $('input#subject').val(),
				content: $('textarea#content').val()
			},
			success: function(response) {
				msg.text('E-mail enviado com sucesso!');
				msg.addClass('alert-success');
				msg.slideDown();
				emptyFields('form#contact');
			},
			error: function(xhr, status, error) {
				msg.text('Houve um erro :( Tente mais tarde');
				msg.addClass('alert-danger');
				msg.slideDown();
				emptyFields('form#contact');
			}
		});

		return false;
	});
});