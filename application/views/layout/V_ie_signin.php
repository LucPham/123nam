<script type="text/javascript">
	$(document).ready(function() {
		$('[data-popup-open]').on('click', function(e) {
			var target_popup_class = $(this).attr('data-popup-open');
			$('[data-popup="'+target_popup_class+'"]').fadeIn(50);
			e.preventDefault();
		});

		$('[data-popup-close]').on('click', function(e) {
			var target_popup_class = $(this).attr('data-popup-close');
			$('[data-popup="'+target_popup_class+'"]').fadeOut(50);
			e.preventDefault();
		});


		$(document).keypress(function(e) {
			if(e.which == 13)
			{
				$('#btnLogin').click();
			}
		});
		$('#btnLogin').on('click', function() {
			var emailLogin = $('#emalLogin');
			var passwordLogin = $('#passwordLogin');
			var remember = $('#rememberMe:checked').val();
			if (emailLogin.val() == '')
			{
				$('.EmailLoginErr').show();
			} else $('.EmailLoginErr').hide();
			if (passwordLogin.val() == '')
			{
				$('.PasswordLoginErr').show();
			} else $('.PasswordLoginErr').hide();

			if (emailLogin.val() != '' && passwordLogin.val() != '')
			{
				$.ajax({
					url: "<?php echo base_url('nguoi_dung/C_nguoi_dung/dang_nhap') ?>",
					type: "post",
					data: { email: emailLogin.val(), pass: passwordLogin.val(), rememberMe: remember},
					beforeSend: function() {
						$('#reload').show();
					},
					success: function(result){
						console.log(result);
						if (result == true)
						{
							location.reload();
						} else
						{
							$('.loginFeedback').html(result);
							$('#reload').hide();
						}
					}
				})
			}
		})// button click
		//end login

		//out
		$('.dang_xuat').on('click', function(e) {
			//alert('dang xuat');
				$.ajax({
					url: "<?php echo base_url('nguoi_dung/C_nguoi_dung/dang_xuat') ?>",
					type: "post",
					success: function(result){
						location.reload();
					}
				});
			e.preventDefault();

		})//end out


	}) //document


</script>