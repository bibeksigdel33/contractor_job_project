$(document).ready(function() {
	$('#contractor_registration_form_email').change(function() {
		var email = $('#contractor_registration_form_email').val();
		if (email != "bob@gmail.com") {
			alert("Email incorrect");
		}
	});
	//Email
	//PostCode
	//Re-enter Password
});