<div class="row" style="margin: 0; padding: 0;">
	
	<div  id="borderTop">
		<a title="Trang cá nhân của tôi" alt="Trang cá nhân của tôi" href="<?php echo site_url('profile') ?>"><button class="btn btn-primary" id="infoUpdateBtn">Cá nhân</button></a>

		<a title="Thay đổi địa chỉ Email" alt="Thay đổi địa chỉ Email" href="<?php echo site_url('profile/email') ?>"><button class="btn btn-danger" id="emailUpdateBtn">Thay đổi email</button></a>
	</div>
</div>

<div class="row" style="margin: 0; padding: 20px 0 0 0;">
	<!-- ERROR-->
	<div class="col-md-6">
		<?php  
			if (isset($success))
			{
				?>
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $success; ?>
				</div>
				<?php 
			}
		?>
	</div>
</div>

<div class="row" style="margin: 0; padding: 20px 0 0 0;">
	<!-- ERROR-->
	<div class="col-md-6">
		<?php  
			if (isset($errInfo))
			{
				?>
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $errInfo; ?>
				</div>
				<?php 
			}
		?>
	</div>
</div>

<div class="row" style="margin: 0; padding: 20px 0 0 0;">
	<!-- ERROR-->
	<div class="col-md-6">
		<?php  
			if (isset($err))
			{
				?>
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $err; ?>
				</div>
				<?php 
			}
		?>
	</div>
</div>

<div class="row" style="margin: 0; padding: 0;">
	<div class="col-md-12">
		<span class="label label-primary">Thay đổi Email</span>
	</div>
</div>

<div class="row" style="margin: 0; padding: 0;">
	<div class="col-md-6" id="profileMain">
		<?php 
			if (isset($username) && !empty($username))
			{
				?>
					<div class="col-md-12">
					<form method="post" enctype="multipart/form-data">
						<input type="text" name="" disabled="disabled" class="form-control" value="<?php echo $username['email'] ?>"> <br/>
						<input type="password" name="pw" id="pw" class="form-control" placeholder="Mật khẩu">
						<br/>
						<input type="email" name="email" id="newEmail" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" placeholder="Email mới"><br/>
						<span class="Err" style="font-size: 12px; color: #FA0000; display: none;">Vui lòng nhập đủ email mới và xác nhận email mới bạn muốn đổi</span>
						<div class="loading" style="text-align: center; display: none;">
							Loading ... <img class="pacmanGif" src="<?php echo base_url('public/icon/pacman.gif') ?>">
						</div>
						<input type="submit" name="changeEmailBtn" id="changeEmailBtn" class="btn btn-danger changeEmailBtn" value="Cập nhật" data="<?php echo $username['id'] ?>" style="float: right">
					</form>
				</div>
					</div>
				<?php 
			}
		?>
	</div>



