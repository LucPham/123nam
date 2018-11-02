<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>
<div class="row">
	<div class="col-md-12">
	<?php 
		if (isset($errForm))
				echo '<div class="alert alert-danger" role="alert">'.$errForm.'</div>';
		if (isset($errFileType))
				echo '<div class="alert alert-danger" role="alert">'.$errFileType.'</div>';

		if (isset($errBlock))
				echo '<div class="alert alert-danger" role="alert">'.$errBlock.'</div>';

		if (isset($errFileBlock))
				echo '<div class="alert alert-danger" role="alert">'.$errFileBlock.'</div>';

		if (isset($errFileTypeBlock))
				echo '<div class="alert alert-danger" role="alert">'.$errFileTypeBlock.'</div>';

		if (isset($ErrDb))
				echo '<div class="alert alert-info" role="alert">'.$ErrDb.'</div>';

		if (isset($errDbBlock))
				echo '<div class="alert alert-info" role="alert">'.$errDbBlock.'</div>';




		if (isset($success)) 
			echo '<div class="jumbotron" style="background: #D8F3D4">
				  <h1 style="color: #24AC04">Well done!</h1>
				  <p style="color: #24AC04">'.$success.'</p>
				  <p><a class="btn btn-success btn-lg" href="#" role="button"><span class="glyphicon glyphicon-flag"></span></a></p>
			 </div>';

	?>

		<form method="post" enctype="multipart/form-data">

			<?php 
				if (isset($EmegaArr) && !empty($EmegaArr)) {
					
			?>
			
			<div id="postTitle" class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
			
				<input type="text" name="titleEmega" id="titleEmega" placeholder="Title" class="form-control" value="<?php if (isset($EmegaArr['tieu_de'])) echo $EmegaArr['tieu_de']; ?>"> <br/>
				<input type="text" name="uri" id="uri" placeholder="Uri" class="form-control" value="<?php if (isset($EmegaArr['url'])) echo $EmegaArr['url']; ?>"><br/>
				<textarea class="form-control" name="description" id="description" placeholder="Description"><?php if (isset($EmegaArr['description'])) echo $EmegaArr['description']; ?></textarea> <br/>
				<textarea class="form-control" name="keywords" id="keywords" placeholder="Keywords"><?php if (isset($EmegaArr['keyword'])) echo $EmegaArr['keyword']; ?></textarea> <br/>
				<textarea class="form-control" name="usertaged" id="usertaged" style=""><?php 
							if (isset($usertags)) {
								foreach ($usertags as $item) {
								echo $item['userid'].','; 
							}
						}
						?></textarea>
				<input type="text" name="userArr" id="userArr" class="form-control">

				<input type="file" name="image" id="image">
				<img id="blah" src="<?php if (isset($EmegaArr['hinh'])) echo base_url('public/EmegazineImage/title/'.$EmegaArr['hinh']) ?>" alt="image in here"/>
				<div id="dvPreview"></div>
				<div id="loading"></div>
				
			</div> <!-- col left-->

			

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-md-3">
						<button class="btn btn-danger">Mode</button>
					</div> <!-- col mode btn-->
					
					<div class="col-md-9">
						<select name="mode" id="mode" class="form-control mode">
							<option value="public" <?php if ($EmegaArr['privated'] == 0) echo 'selected' ?>>Public</option>
							<option value="privated" <?php if ($EmegaArr['privated'] == 1) echo 'selected' ?>>Privated</option>
						</select>
					</div><!-- col mode option-->
				</div> <!-- end row -->

				<div class="row" id="box_tags">
					<div class="col-md-12" id="tags">
					<?php 
							if (isset($usertags) && !empty($usertags)) {
								foreach ($usertags as $item) {
								$user = $this->M_nguoi_dung->getUserFromSession($item['userid']);
								if (!empty($user)) {
								?>
									<div id="wrapp_user_tag<?php echo $item['userid']; ?>" class="wrapp_user_tag">
										<div id="username"><?php echo $user['lastName'].' '.$user['firstName'] ?></div>
										<div id="delete" class="delete" uid="<?php echo $item['userid']; ?>"><a href="#">x</a></div>
									</div>
								<?php 
								}
							}
						}
					?>
					</div>
					<div class="col-md-3">
						<button class="btn btn-danger">User tags</button>
					</div> <!-- col mode btn-->
					
					<div class="col-md-9">
						<textarea class="form-control" id="query"></textarea>
						<div id="searchpreview">
							
						</div>
					</div><!-- col mode option-->
				</div> <!-- end row -->

			</div> <!-- end col-md-6 col-sm-6 col-xs-12 -->

		
	</div> <!-- end row-->
<?php
	} else {
		?>
			<div class="page-header">
			  <h1>Opps! Không tìm thấy dữ liệu.</h1>
			</div>
		<?php 
	} 
?>


<?php 
	if (isset($blockArr) && !empty($blockArr)) {
		foreach ($blockArr as $key=>$item) {
			$key += 1;
			$index = $key;
?>

	
	<div id="blockWrapp<?php echo $key; ?>" class="blockWrapp">
	<h2>Block</h2>
		<div id="remove"><button class="btn btn-warning remove" version="old" data-remove="blockWrapp<?php echo $key; ?>" index="<?php echo $key; ?>" idkey="<?php echo $item['idkey']; ?>" postid="<?php echo $EmegaArr['id']; ?>">Remove block <?php echo $key; ?> </button></div>
		<input type="hidden" name="maxblock[]" id="maxblock" class="maxblock" value="<?php echo $key; ?>"> 
		<div id="ckeditor<?php echo $key; ?>" class="ckeditorWrapp">
			<textarea class="ckeditor" name="editor<?php echo $key; ?>"><?php if (isset($item['content'])) echo $item['content']; ?></textarea>
			<script type="text/javascript">

						var path = "<?php echo base_url(); ?>";
						CKEDITOR.replace( 'editor<?php echo $key; ?>', {
					    filebrowserBrowseUrl: path+'public/ckfinder_tintuc/ckfinder.html',
					    filebrowserUploadUrl: path+'public/ckfinder_tintuc/core/connector/php/connector.php?command=QuickUpload&type=Files',

					    filebrowserFlashBrowseUrl : path+'public/ckfinder_tintuc/ckfinder.html?type=Flash',
				
						filebrowserImageUploadUrl : path+'public/ckfinder_tintuc/core/connector/php/connector.php?command=QuickUpload&type=Images',
					    filebrowserWindowWidth: '1000',
					    filebrowserWindowHeight: '700'
					} );
					</script>
		</div>
		<div id="img1" class="img">
			<input type="text" name="idblock<?php echo $key; ?>" id="idblock" value="<?php echo $item['id']; ?>" class="form-control">
			<input type="file" data-href="<?php echo $key; ?>" name="img<?php echo $key; ?>" id="img<?php echo $key; ?>" class="uploadEmega">
			<input type="hidden" name="version<?php echo $key; ?>" value="old">
			
			<img id="blah<?php echo $key; ?>" src="<?php if (isset($item['img'])) echo base_url('public/EmegazineImage/block/'.$item['img']) ?>" alt="image in here" class="img-responsive" />
			<input type="text" name="index<?php echo $key; ?>" value="<?php echo $key; ?>">
			<div id="dvPreview<?php echo $key; ?>"></div>
			<div id="loading<?php echo $key; ?>"></div>
		</div>
	</div><!--/blockWrapp-->

<?php
	}
	} else {
		?>
			<div class="page-header">
			  <h1>Opps! Không tìm thấy dữ liệu.</h1>
			</div>
		<?php 
	} 
?>

	<button style="margin: 40px 0" class="btn btn-warning" id="addblock"><span class="glyphicon glyphicon-plus"></span> Add block</button>
	
	<input type="submit" name="submit" value="submit" class="btn btn-danger">
	<input type="text" name="maxindex" id="maxindex" class="form-control" value="<?php echo $index; ?>">
	</div>
</div>

