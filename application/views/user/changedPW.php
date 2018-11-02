<div class="row">
	<div class="col-md-12" style="padding-left: 20px">
		<h3>Đổi mật khẩu</h3>
	</div>
</div>

<div class="row">
	<?php 
		if (isset($formErr))
		{
	?>
	<div class="col-md-8" style="padding-left: 20px">
		<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <?php echo $formErr; ?>
		</div>
	</div>
	<?php 
		}
	?>
</div>
<div class="row">
	<div class="col-md-8">
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
	<div class="col-md-8" style="padding-left: 20px;">
		<form method="post">
			<span>Mật khẩu cũ:</span> <input type="password" name="pwold" class="form-control" value="<?php if(isset($_POST['pwold'])) echo $_POST['pwold'] ?>">
			<br/>
			<span>Mật khẩu mới:</span> <input type="password" name="pwnew" class="form-control">
			<br/>
			<span>Nhập lại mật khẩu mới:</span> <input type="password" name="repwnew" class="form-control">
			<br/>
			<input type="submit" name="submit" class="btn btn-success" value="Thay đổi" style="float: right">	
		</form>
	</div>
</div>