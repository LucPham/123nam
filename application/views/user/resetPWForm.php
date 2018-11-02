<div class="row" style="margin-top: 70px;" id="ie-label-rspw-wrapp">
	<div class="col-md-12">
		<span class="label label-primary">Thay đổi mật khẩu</span>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-sm-8">
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
<div class="row">
	<div class="col-md-6 col-sm-8">
		<?php
			
				if (isset($errVerifyPW))
				{
					?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <?php echo $errVerifyPW; ?>
						</div>
					<?php 
				}
			
		?>
	</div>
	<div class="col-md-6 col-sm-8">
		<?php
			
				if (isset($formErr))
				{
					?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <?php echo $formErr; ?>
						</div>
					<?php 
				}
			
		?>
	</div>
</div>
<?php  
	if (isset($expireOut))
	{
		?>
		<div class="row">
			<div class="col-md-8">
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $expireOut; ?>
			</div>
			</div>	
		</div>	  
		<?php 
	} else {
		?>
		<div class="row" id="ie-resetpw-form-wrapp">
			<form method="post">
				<div class="col-md-3 col-sm-3 hidden-xs"></div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<form method="post">
						<input type="password" id="iput-type" name="password" placeholder="Mật khẩu mới" class="form-control"> <br/>
						<input type="password" id="input-type" name="re-password" placeholder="Nhập lại mật khẩu" class="form-control">
						<br/>
						<input type="submit" name="resetBtn" value="Xác nhận" class="btn btn-success" style="float: right;">
					</form>
				</div>
				<div class="col-md-3 col-sm-3 hidden-xs"></div>
			</form>
		</div>
		<?php
	}
?>