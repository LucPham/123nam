<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>


<form method="post" name="formUpdate" id="formUpdate" enctype="multipart/form-data">
	<div id="postTitle" class="row">
	<?php
		
		
		if (isset($errFileBlock))
			echo '<div class="alert alert-danger" role="alert">'.$errFileBlock.'</div>';
		if (isset($errFileTypeBlock))
			echo '<div class="alert alert-danger" role="alert">'.$errFileTypeBlock.'</div>';
		if (isset($errBlock))
			echo '<div class="alert alert-danger" role="alert">'.$errBlock.'</div>';
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
				<div class="col-md-6 col-sm-6 col-xs-12">
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

					
					
					<textarea class="form-control" name="usertaged" id="usertaged" style="display: none;"><?php 
							if (isset($usertags)) {
								foreach ($usertags as $item) {
								echo $item['userid'].','; 
							}
						}
						?></textarea>
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
					</div> <!-- col left-->
					<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="row">
						<div class="col-md-3">
						<button class="btn btn-danger">Mode</button>
						</div> <!-- col mode btn-->
						
						<div class="col-md-9">
							<select name="mode" id="mode" class="form-control">
							<option value="public" <?php if ($EmegaArr['privated'] == 0) echo 'selected' ?>>Public</option>
							<option value="privated" <?php if ($EmegaArr['privated'] == 1) echo 'selected' ?>>Privated</option>
						</select>
						</div><!-- col mode option-->
					</div>
					<br/>
					<div class="row" id="box_tags">
					<div class="col-md-12" id="tags">
						<?php 
							if (isset($usertags) && !empty($usertags)) {
								foreach ($usertags as $user) {
									$username = $this->M_nguoi_dung->getUserFromSession($user['userid']);
									?>
									<div id="wrapp_user_tag<?php echo $user['userid']; ?>" class="wrapp_user_tag">
										<div id="username"><?php echo $username['lastName'].' '.$username['firstName'] ?></div>
										<div id="delete" class="delete" uid="<?php echo $user['userid']; ?>"><a href="#">x</a></div>
									</div>
									<?php 
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
					</div>
				
				</div> <!--Col right -->
				<?php 
			} else {
				?>
					<input type="text" name="titleEmega" id="titleEmega" placeholder="Title" class="form-control"> <br/>
					<input type="text" name="uri" id="uri" placeholder="Uri" class="form-control"><br/>
					<textarea class="form-control" name="description" id="description" placeholder="Description"></textarea> <br/>
					<textarea class="form-control" name="keywords" id="keywords" placeholder="Keywords"></textarea> <br/>
					<input type="file" name="image" id="image" class="uploadEmega">
					<img id="blah" src="#" alt="image in here" class="img-responsive"/>
					<div id="dvPreview"></div>
					<div id="loading"></div>
					</div> <!-- col left-->
		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="row">
			<div class="col-md-3">
			<button class="btn btn-danger">Mode</button>
			</div> <!-- col mode btn-->
			
			<div class="col-md-9">
				<select name="mode" id="mode" class="form-control">
				<option value="public">Public</option>
				<option value="privated">Privated</option>
			</select>
			</div><!-- col mode option-->
		</div>
		<br/>
		<div class="row" id="box_tags">
		<div class="col-md-12" id="tags">
		
		</div>
			<div class="col-md-3">
				<button class="btn btn-danger">User tags</button>
			</div> <!-- col mode btn-->
			
			<div class="col-md-9">
				<textarea class="form-control" id="query"></textarea>
				<div id="searchpreview">
					
				</div>
			</div><!-- col mode option-->
		</div>
	
	</div> <!--Col right -->
				<?php 
			}
		?>
		</div> <!-- col left-->

	</div>	
		<h2>Block</h2>

	<?php  
		if (isset($blockArr) && !empty($blockArr)) {
			foreach ($blockArr as $key=>$item) {
				$key +=1;
				$index = $key;
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

						<img src="<?php echo base_url('public/EmegazineImage/block/'.$item['img']) ?>" class="img-responsive">
						<input type="text" name="index" value="<?php echo $item['idkey'] ?>">
					</div>
					<div id="loading<?php echo $key; ?>"></div>
				</div>
			</div><!--/blockWrapp-->
			<?php 
			}
		}

	?>
	

<div class="postAppend">
	
</div>
<div class="row app" id="btn">
	<div class="col-md-12">
		<input type="text" name="maxindex" id="maxindex" class="form-control" value="<?php if (isset($index)) echo $index; ?>">
	</div>
	<div class="col-md-6">
		<button style="margin: 40px 0" class="btn btn-warning" id="addblock"><span class="glyphicon glyphicon-plus"></span> Add block</button>
	</div>
	<div class="col-md-6">
		<input type="submit" name="submit" value="submit" id="submit" class="btn btn-primary" style="float: right"/>
	</div>
</div>
</form><!--/Form-->
