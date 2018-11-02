<div class="row" style="margin: 0; padding: 0;">
	
	<div  id="borderTop">
		<a title="Trang cá nhân của tôi" alt="Trang cá nhân của tôi" href="<?php echo site_url('profile') ?>"><button class="btn btn-primary" id="infoUpdateBtn">Cá nhân</button></a>

		<a title="Thay đổi địa chỉ Email" alt="Thay đổi địa chỉ Email" href="<?php echo site_url('profile/email') ?>"><button class="btn btn-danger" id="emailUpdateBtn">Thay đổi email</button></a>
	</div>
</div>
<div class="row" style="margin: 14px 0 0 0; padding: 0;">
	<div class="col-md-12">
		<span class="label label-primary">Cập nhật thông tin</span>
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

<?php
	if (isset($username) && !empty($username))
	{
		if (!isset($success))
		{
		?>
			<div class="row" style="margin: 14px 0 0 0; padding: 0">
	<form method="post" enctype="multipart/form-data" id="form1">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="lastName" id="lastName" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; else echo $username['lastName'] ?>" class="form-control" placeholder="Họ & tên đệm">
				<span class="lastNameErr" style="color: #FB0000; display: none;">Vui lòng nhập họ & tên đệm của bạn</span>
				<br/>
				<input type="text" name="firstName" id="firstName" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; else echo $username['firstName'] ?>" class="form-control" placeholder="Tên">
				<span class="firstNameErr" style="color: #FB0000; display: none;">Vui lòng nhập tên của bạn</span>
				<br/>
				<select name="ngay_sinh" id="ngay_sinh" class="form-control">
				<option value="0">Ngày sinh</option>
				<?php 
					for($i=1; $i <=31; $i++)
					{
						?>

						<option value="<?php echo $i ?>" <?php if ($username['ngay_sinh']==$i) echo 'selected="selected"' ?> <?php if (isset($_POST['ngay_sinh']) && $_POST['ngay_sinh'] == $i) echo 'selected="selected"' ?> ><?php if($i<10) echo '0'.$i; else echo $i ?></option>
						<?php 
					}
				?>
				</select> <br/>
				<span class="ngay_sinhErr" style="color: #FB0000; display: none;">Vui lòng chọn ngày sinh</span>
				<select name="thang_sinh" id="thang_sinh" class="form-control">
					<option value="0">Tháng sinh</option>
					<?php 
						for($i=1; $i <=12; $i++)
						{
							?>
							<option value="<?php echo $i ?>" <?php if ($username['thang_sinh']==$i) echo 'selected="selected"' ?> <?php if (isset($_POST['thang_sinh']) && $_POST['thang_sinh'] == $i) echo 'selected="selected"' ?> ><?php if($i<10) echo '0'.$i; else echo $i ?></option>
							<?php 
						}
					?>
				</select> <br/>
				<span class="thang_sinhErr" style="color: #FB0000; display: none;">Vui lòng chọn tháng sinh</span>
				<select name="nam_sinh" id="nam_sinh" class="form-control">
					<option value="0">Năm sinh</option>
					<?php 
						for($i=date("Y")-1; $i >1940; $i--)
						{
							?>
							<option value="<?php echo $i ?>" <?php if ($username['nam_sinh']==$i) echo 'selected="selected"' ?> <?php if (isset($_POST['nam_sinh']) && $_POST['nam_sinh'] == $i) echo 'selected="selected"' ?> ><?php echo $i ?></option>
							<?php 
						}
					?>
				</select> <br/>
				<span class="nam_sinhErr" style="color: #FB0000; display: none;">Vui lòng chọn năm sinh</span>
				<br/>
				<input type="submit" name="profileUpdateBtn" id="profileUpdateBtn" class="btn btn-primary" value="Lưu thay đổi" style="float: right">
			</div>
		</form>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<?php 
					if (isset($username) && !empty($username))
					{
						?>
							<div class="media">
							  <div class="media-left">
							      <span class="glyphicon glyphicon-user iconUser"></span>
							  </div>
							  <div class="media-body">
							    <h3 class="media-heading"><?php echo $username['lastName'].' '.$username['firstName'] ?></h3>
							    	<p>Email: <?php echo $username['email'] ?></p>
							    	<p>Ngày sinh: <?php echo $username['ngay_sinh'].'-'.$username['thang_sinh'].'-'.$username['nam_sinh'] ?> <br/>
							    	<p>Giới tính: <?php if($username['gioi_tinh'] == 0) echo 'Nữ'; else echo 'Nam' ?></p>
							    	<p class="editInfo"><a title="Đổi mật khẩu" alt="Đổi mật khẩu" href="<?php echo site_url('doi-mat-khau') ?>" style="font-size: 12px"><span class="glyphicon glyphicon-pencil"></span> <i>Đổi mật khẩu</i></a></p>
							  </div>
							</div>
						<?php 
					}
				?>
			</div>
		</div>
		<?php
		} else {
			?>
				<div class="row" style="margin: 0; padding: 0">
					<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-primary">
				  <div class="panel-heading">Thông tin cá nhân của bạn đã được cập nhật thành công</div>
				  <div class="panel-body">
						<div class="media">
							  <div class="media-left">
							      <span class="glyphicon glyphicon-user iconUser"></span>
							  </div>
							  <div class="media-body">
							    <h3 class="media-heading"><?php echo $_POST['lastName'].' '.$_POST['firstName'] ?></h3>
							    	<p>Email: <?php echo $username['email'] ?></p>
							    	<p>Ngày sinh: <?php echo $_POST['ngay_sinh'].'-'.$_POST['thang_sinh'].'-'.$_POST['nam_sinh'] ?> <br/>
							    	<p>Giới tính: <?php if($username['gioi_tinh'] == 0) echo 'Nữ'; else echo 'Nam' ?></p>
							    	<p class="editInfo"><a title="Đổi mật khẩu" alt="Đổi mật khẩu" href="#" style="font-size: 12px"><span class="glyphicon glyphicon-pencil"></span> <i>Đổi mật khẩu</i></a></p>
							  </div>
							</div>
				  </div>
				</div>
				</div>
				</div>
			<?php 
		} 
	} else echo 'Not found';
?>
