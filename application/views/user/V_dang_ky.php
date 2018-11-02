<div class="row" style="margin-top: 40px;">
	<div class="col-md-6">
		<?php 
		if (isset($err))
		{
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong><span class="glyphicon glyphicon-warning-sign"></span></strong> <?php echo $err ?>
			</div>
			<?php
		}

	?>


	<?php 
		if (isset($success))
		{
			?>
			<div class="alert alert-success" role="alert"><?php echo $success ?></div>
			<?php
		}
		
	?>
	</div>
	
<div class="col-md-12" id="ie-register-wrapp">
	

	<div class="container_dangky">
		<span class="label label-success">Đăng ký 123nam ID</span>
		<br>
			<!--[if IE]>
			<div id="fieldName">
				<div id="fieldNameHoten">
					<span class="label label-default">Họ & tên đệm</span>
				</div>
				<div id="fieldNameTen">
					<span class="label label-default">Tên</span>
				</div>
			</div>
		<![endif]-->
		<form method="post" enctype="multipart/form-data" id="registerForm">
		
		<input type="text" name="lastName" id="lastName" placeholder="Họ & tên đệm" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>">

		<input type="text" name="firstName" id="firstName" placeholder="Tên" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
			<p class="full_name_feedback" style="width: 90%; color: #FD0202; font-size: 12px; display: none">Bạn vui lòng nhập đầy đủ tên của mình!</p>
		<br>
		<!--[if IE]>
			<div id="fieldRow"><span class="label label-default">Email</span></div>
		<![endif]-->
		<input type="email" name="email" id="email" placeholder="Email (dùng để đăng nhập)" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
			<p class="email_feedback" style="color: #FD0202; font-size: 12px; display: none">Bạn vui lòng nhập email của mình và sử dụng nó trong trường hợp đổi hoặc lấy lại mật khẩu!</p>
		<br>
		<!--[if IE]>
			<div id="fieldRow"><span class="label label-default">Mật khẩu</span></div>
		<![endif]-->
		<input type="password" name="mat_khau_dk" id="mat_khau_dk" placeholder="Mật khẩu" value="<?php if (isset($_POST['mat_khau_dk'])) echo $_POST['mat_khau_dk']; ?>">
			<p class="password_feedback" style="width: 90%; color: #FD0202; font-size: 12px; display: none">Bạn cần tạo một mật khẩu cho mình!</p>
		<br>
		<!--[if IE]>
			<div id="fieldRow"><span class="label label-default">Nhập lại mật khẩu</span></div>
		<![endif]-->
		<input type="password" name="nhap_lai_mk" id="nhap_lai_mk" placeholder="Nhập lại mật khẩu">
			<p class="re_pass_feedback" style="width: 90%; color: #FD0202; font-size: 12px; display: none">Bạn vui lòng lại mật khẩu một lần nữa!</p>
		<br>

		<div class="ngay_sinh">
			<select name="ngay_sinh" id="ngay_sinh">
			<option value="0">Ngày sinh</option>
			<?php 
				for ($i = 1; $i <=31; $i ++)
				{
					?>
				<option value="<?php echo $i ?>">
					<?php  
						if ($i < 10)
							echo '0'.$i;
						else
							echo $i;
					?>
				</option>
				<?php
				}
			?>
			</select>

			<select name="thang_sinh" id="thang_sinh">
				<option value="0">Tháng sinh</option>
				<?php 
				for ($i = 1; $i <=12; $i ++)
				{
					?>
				<option value="<?php echo $i ?>">
					<?php  
						if ($i < 10)
							echo 'Tháng 0'.$i;
						else
							echo 'Tháng '.$i;
					?>

				</option>
				<?php
				}
			?>
			</select>

			<select name="nam_sinh" id="nam_sinh">
				<option value="0">Năm sinh</option>
				<?php 
				for ($i = date('Y')-1; $i >1940 ; $i --)
				{
					?>
				<option value="<?php echo $i ?>">
					<?php  
							echo $i;
					?>

				</option>
				<?php
				}
			?>
			</select>

		</div>
		<p class="birthday_feedback" style="width: 90%; color: #FD0202; font-size: 12px; display: none">Bạn vui lòng chọn đầy đủ ngày, tháng, năm sinh!</p>
		<br>
		<div class="gioi_tinh">
			<span>Giới tính: </span>
			<input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="1">Nam  
			<input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="0"> Nữ
			<input type="radio" name="gioi_tinh" id="gioi_tinh_khac" value="01"> Khác
		</div>
			<p class="gender_feedback" style="width: 90%; color: #FD0202; font-size: 12px; display: none">Bạn cần chọn một giới tính!</p>
		<br>
		<div class="row">
			<div class="col-md-12 wrappBtnRegister">
				<!--[if !IE]><!-->
					<input type="button"  name="btn_dangky" id="btn_dangky" value="Đăng ký">
				<!--<![endif]-->
				<!--[if IE]>
					<input type="submit"  name="btn_dangky" id="btn_dangky" value="Đăng ký">
				<![endif]-->
			</div>
		</div>
		</form>
	</div> <!-- container-dang-ky-->
</div>
</div>