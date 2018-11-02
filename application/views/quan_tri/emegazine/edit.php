<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>
<form method="post" name="formUpdate" id="formUpdate" enctype="multipart/form-data">
	<div id="postTitle">
	<?php
		
		
		if (isset($errFileBlock))
			echo '<div class="alert alert-danger" role="alert">'.$errFileBlock.'</div>';
		if (isset($errFileTypeBlock))
			echo '<div class="alert alert-danger" role="alert">'.$errFileTypeBlock.'</div>';
		if (isset($ErrDb))
			echo '<div class="alert alert-info" role="alert">'.$ErrDb.'</div>';
		if (isset($errDbDlock))
			echo '<div class="alert alert-info" role="alert">'.$errDbDlock.'</div>';
		if (isset($finished))
			echo '<div class="alert alert-success" role="alert">'.$finished.'</div>';
	?>
		<?php 
			if (isset($EmegaArr) && !empty($EmegaArr)) {
				?>
					<input type="text" name="titleEmega" id="titleEmega" placeholder="Title" class="form-control" value="<?php if (isset($_POST['titleEmega'])) echo $_POST['titleEmega']; else echo $EmegaArr['tieu_de'] ?>"> 
					<?php 
						if (isset($errTitle))
							echo '<div class="alert alert-danger" role="alert">'.$errTitle.'</div>';
					?><br/>
					<input type="text" name="uri" id="uri" placeholder="Uri" class="form-control" value="<?php if (isset($_POST['uri'])) echo $_POST['uri']; else echo $EmegaArr['url'] ?>">
					
					<?php 
						if (isset($errUri))
							echo '<div class="alert alert-danger" role="alert">'.$errUri.'</div>';
					?>	
					<br/>
					<textarea class="form-control" name="description" id="description" placeholder="Description"><?php if (isset($_POST['description'])) echo $_POST['description']; else echo $EmegaArr['description'] ?></textarea> <br/>
					<textarea class="form-control" name="keywords" id="keywords" placeholder="Keywords"><?php if (isset($_POST['keywords'])) echo $_POST['keywords']; else echo $EmegaArr['keyword'] ?></textarea> <br/>
					<input type="file" name="image" id="image">
					<img id="blah" src="#" alt="image in here"/>

					<div id="dvPreview">
						<img src="<?php if (isset($_FILES['image']['name'])) echo base_url('public/EmegazineImage/title/'.$_FILES['image']['name']); else echo base_url('public/EmegazineImage/title/'.$EmegaArr['hinh']) ?>">
						<?php 
						if (isset($errFileType))
							echo '<div class="alert alert-danger" role="alert">'.$errFileType.'</div>';
						?>

					</div>
					<div id="loading"></div>
				<?php 
			} else {
				?>
					<input type="text" name="titleEmega" id="titleEmega" placeholder="Title" class="form-control"> <br/>
					<input type="text" name="uri" id="uri" placeholder="Uri" class="form-control"><br/>
					<textarea class="form-control" name="description" id="description" placeholder="Description"></textarea> <br/>
					<textarea class="form-control" name="keywords" id="keywords" placeholder="Keywords"></textarea> <br/>
					<input type="file" name="image" id="image">
					<img id="blah" src="#" alt="image in here"/>
					<div id="dvPreview"></div>
					<div id="loading"></div>
				<?php 
			}
		?>
			
	</div>	
		<h2>Block</h2>

	<?php  
		if (isset($blockArr) && !empty($blockArr)) {
			foreach ($blockArr as $key=>$item) {
				$key +=1;
			?>
				<div id="blockWrapp<?php echo $key; ?>" class="blockWrapp">
				<div id="remove">
				<?php 

					if ($key == 1) {
						?><button class="btn btn-warning">Block <?php echo $key; ?></button><?php 
					} else {
					?><button class="btn btn-warning remove" postid="<?php echo $item['postid']; ?>" version="old" index="<?php echo $item['idkey']; ?>" data-remove="blockWrapp<?php echo $key; ?>">Remove block <?php echo $key; ?></button><?php
					}
				?>
				</div>
				<input type="hidden" name="maxblock[]" id="maxblock" class="maxblock" value="<?php echo $key; ?>"> 
				<div id="ckeditor<?php echo $key; ?>" class="ckeditorWrapp">
					<textarea class="ckeditor" name="editor<?php echo $key; ?>"><?php if (isset($_POST['editor'.$key])) echo $_POST['editor'.$key]; else echo $item['content'] ?></textarea>
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
				<div id="img<?php echo $key; ?>" class="img">
					<input type="file" data-href="1" name="img<?php echo $key; ?>" id="img<?php echo $key; ?>" class="upload">
					<input type="hidden" name="version<?php echo $key; ?>" value="old">
					<img id="blah<?php echo $key; ?>" src="#" alt="image in here"/>
					<div id="dvPreview<?php echo $key; ?>">

						<img src="<?php echo base_url('public/EmegazineImage/block/'.$item['img']) ?>">
						<input type="text" name="index" value="<?php echo $item['idkey'] ?>">
					</div>
					<div id="loading<?php echo $key; ?>"></div>
				</div>
			</div><!--/blockWrapp-->
			<?php 
			}
		}

	?>
	
<div class="row" id="btn">
	<div class="col-md-6">
		<button style="margin: 40px 0" class="btn btn-warning" id="addblock"><span class="glyphicon glyphicon-plus"></span> Add block</button>
	</div>
	<div class="col-md-6">
		<input type="submit" name="submit" value="submit" class="btn btn-primary" style="float: right">
	</div>
</div>
</form><!--/Form-->
