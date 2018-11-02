<div class="row">
<div class="col-md-12">
	<?php 
		if (isset($emailNull))
		{
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $emailNull; ?>
			</div>
			<?php 
		}
	?>
</div>

<div class="col-md-12">
	<?php 
		if (isset($sendSuccess))
		{
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $sendSuccess; ?>
			</div>
			<?php 
		}
	?>
</div>
	
</div>

<div class="row" style="margin-top: 70px;" id="ie-resetpw-wrapp">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<p style="background-color: #676565; color: #ffffff; font-weight: bold; padding: 4px; border-radius: 5px 5px;">Hãy nhập địa chỉ email của bạn để đặt lại mật khẩu:</p>
		<form method="post">
			<input type="email" name="email" class="form-control" placeholder="Email">
			<br/>
			<input type="submit" name="submitEmail" value="Gửi" class="btn btn-success" style="float: right">
		</form>
	</div>
</div>