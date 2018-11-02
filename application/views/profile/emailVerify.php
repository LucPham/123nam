<div class="row" style="margin: 0; padding: 20px 0 0 0;">
	<div class="col-md-6">
	<span class="label label-primary">Xác nhận thay đổi Email</span>
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
	<div class="col-md-8">
		<?php  
			if (isset($successInfo))
			{
				?>
				<div class="panel panel-primary">
				  <div class="panel-heading">Thay đổi địa chỉ Email thành công</div>
				  <div class="panel-body">
						Bạn đã thay đổi địa chỉ Email thành công, địa chỉ email mới của bạn là: <?php echo $successInfo['email'] ?>, Email này dùng để đăng nhập, quản lý sự kiện và nhiều chức năng khác trên <a title="Trang chủ 123nam.com" alt="Trang chủ 123nam.com" href="<?php echo base_url() ?>">123nam.com</a>.
				  </div>
				</div>
				<?php 
			}
		?>
	</div>
</div>