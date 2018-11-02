<h1>album</h1>
<div class="row" style="margin: 0; padding: 0">
	<?php 
		if (isset($err))
		{
			?>
		<div class="alert alert-warning" role="alert"><?php echo $err ?></div>

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
<div class="row" style="margin: 0; padding: 0">
	<div class="col-md-6 col-sm-8 col-xs-12">
		<form method="post" id="form_album" enctype="multipart/form-data">
			<input type="text" name="albumName" id="albumName" class="form-control" placeholder="Album name">
			<br>
			<input type="file" name="albumFile" id="albumFile">
			<hr>	
			<img src="#" id="preview" alt="Image preview">
			<br>
			<input type="button" name="albumSubmit" id="albumSubmit" class="btn btn-sm btn-primary" value="Tạo Album" style="float: right; width: 120px; ">
		</form>
	</div>
</div>


