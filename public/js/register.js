$(document).ready(function() {

	$('#btn_dangky').click(function(e) {
		//e.preventDefault();
		var lastName = $('#lastName');
		var firstName = $('#firstName');

		var email = $('#email');
		var password = $('#mat_khau_dk');
		var re_pass = $('#nhap_lai_mk');
		var day_of_birth = $('#ngay_sinh');
		var month_of_birth = $('#thang_sinh');
		var year_of_birth = $('#nam_sinh');
		var gender = $('input:radio:checked').val();

		if (lastName.val() == '' || lastName.val() == '')
		{

			$('.full_name_feedback').show();
			lastName.keyup(function() {
				$('.full_name_feedback').hide();
			});
			firstName.keyup(function() {
				$('.full_name_feedback').hide();
			})
		} 
		if (email.val() == '')
		{
			$('.email_feedback').show();
			email.keyup(function() {
				$('.email_feedback').hide();
			})
		}


		if (password.val() == '')
		{
			$('.password_feedback').show();
			password.keyup(function() {
				$('.password_feedback').hide();
			})
		}

		if (re_pass.val() == '')
		{
			$('.re_pass_feedback').show();
			re_pass.keyup(function() {
				$('.re_pass_feedback').hide();
			})
		}

		if (day_of_birth.val() == '0' || month_of_birth.val() == '0' || year_of_birth.val() == '0'	)
		{	
			$('.birthday_feedback').show();
		} else {$('.birthday_feedback').hide();}
		
		if (gender)
		{
			$('.gender_feedback').hide();
			re_pass.keyup(function() {
				$('.gender_feedback').hide();
			})
		} else {
			$('.gender_feedback').show();
			re_pass.keyup(function() {
				$('.gender_feedback').hide();
			})
		}

		if (
			firstName.val() != '' && 
			lastName.val() != '' && 
			email.val() != '' && 
			password.val() != '' && 
			re_pass.val() != '' && 
			day_of_birth.val() != '0' &&
			month_of_birth.val() != '0' &&
			year_of_birth.val() != '0' &&
			gender
			) {
			$('#btn_dangky').attr('type','submit');
		}
	});
})