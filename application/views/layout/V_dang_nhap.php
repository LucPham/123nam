<style type="text/css">
	@media all and (max-width: 320px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 90%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	@media all and (min-width: 321px) and (max-width: 480px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 90%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	@media all and (min-width: 481px) and (max-width: 600px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 70%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	@media all and (min-width: 601px) and (max-width: 800px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 50%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	@media all and (min-width: 801px) and (max-width: 1024px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 50%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	@media all and (min-width: 1025px)
	{
		.popup
		{
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			z-index: 500;
			position: fixed;
			background-color: rgba(1,1,1,0.6);
			text-align: center;
			display: none;
		}
		.popup-inner
		{
			background-color: #fff;
			width: 40%;
			height: 320px;
			margin-top: 15px;
			margin-right: 10px;
			float: right;
		}
		.feild_login
		{
			width: 80%;
			height: auto;
			margin: auto;
		}
		.popup-close
		{
			top: 20px;
			right: 20px;
			position: fixed;
			color: #000;
			font-weight: bold;
		}	
	}
	#forgotPW
	{
		color: #424040;
	}
	#forgotPW:hover
	{
		color: #D70303
	}
</style>
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
						//alert(result);
						
						if (result == 1)
							location.reload();
						else {

							$('.loginFeedback').html(result);
							$('#reload').hide();
						}
					}
				})
			}
		});// button click

		$('.dang_xuat').on('click', function(e) {
				e.preventDefault();
				$.ajax({
					url: "<?php echo base_url('nguoi_dung/C_nguoi_dung/dang_xuat') ?>",
					type: "post",
					success: function(result) {
						
						if (result == 1) 
							location.reload();
					}
				});
		}) //dang_xuat

	}) //document

	

</script>

<div class="popup" data-popup="popup-login">

	<div class="popup-inner">
	<h3>Đăng nhập</h3>
		<div class="feild_login">
			
	        <form method="post" enctype="multipart/form-data">
	        	<input type="email" name="emalLogin" id="emalLogin" placeholder="Email" class="form-control"> 
	        	<p class="EmailLoginErr" style="color: red; display: none">Vui lòng nhập email!</p>
	        	<br>
	        	<input type="password" name="passwordLogin" id="passwordLogin" placeholder="Mật khẩu" class="form-control">	
	        	<p class="PasswordLoginErr" style="color: red; display: none">Vui lòng nhập mật khẩu!</p>

	        	<br/>
	        	<input type="checkbox" name="rememberMe" id="rememberMe" value="1"> Duy trì đăng nhập
	        	<br>
	        	<a href="<?php echo site_url('quen-mat-khau') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Quên mật khẩu?</a>
	        	<a href="<?php echo site_url('register') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Đăng ký</a> <input type="button" name="btnLogin" id="btnLogin" value="Đăng nhập" class="btn btn-success" style="float: right">
	        </form>
	        <div class="loginFeedback" style="color: red"></div>
	        <img id="reload" src="<?php echo base_url('public/icon/reload.gif') ?>" style="display: none">
       </div>
       <a href="#" class="popup-close" data-popup-close="popup-login">X</a>

    </div>
</div>