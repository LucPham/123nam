<div class="row" style="margin: 0; padding: 0;">
	
	<div  id="borderTop">
		<a title="Trang cá nhân của tôi" alt="Trang cá nhân của tôi" href="<?php site_url('profile') ?>"><button class="btn btn-primary" id="infoUpdateBtn">Cá nhân</button></a>
		<a title="Thay đổi địa chỉ Email" alt="Thay đổi địa chỉ Email" href="<?php echo site_url('profile/email') ?>"><button class="btn btn-danger" id="emailUpdateBtn">Thay đổi email</button></a>
	</div>
	
	<div class="col-md-6" id="profileMain">
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
					    	<p class="editInfo"><a title="Cập nhật thông tin" alt="Cập nhật thông tin" href="<?php echo site_url('profile/cap-nhat-thong-tin') ?>" style="font-size: 12px"><span class="glyphicon glyphicon-pencil"></span> <i>Cập nhật thông tin</i></a> 

					    	<a title="Đổi mật khẩu" alt="Đổi mật khẩu" href="<?php echo site_url('doi-mat-khau') ?>" style="font-size: 12px"><span class="glyphicon glyphicon-pencil"></span> <i>Đổi mật khẩu</i></a></p>

					  </div>
					</div>
				<?php 
			}
		?>
	</div>
</div>