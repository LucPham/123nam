<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>
<div class="row">
	<div class="col-md-12">


		<form method="post" enctype="multipart/form-data">

		<div id="postTitle" class="row">
		<?php 
			if (isset($errForm))
				echo '<div class="alert alert-danger" role="alert">'.$errForm.'</div>';
			if (isset($errBlock))
				echo '<div class="alert alert-danger" role="alert">'.$errBlock.'</div>';
			if (isset($errDb))
				echo '<div class="alert alert-info" role="alert">'.$errDb.'</div>';

			if (isset($success)) 
				echo '<div class="jumbotron" style="background: #D8F3D4">
						  <h1 style="color: #24AC04">Well done!</h1>
						  <p style="color: #24AC04">'.$success.'</p>
						  <p><a class="btn btn-success btn-lg" href="#" role="button"><span class="glyphicon glyphicon-flag"></span></a></p>
					 </div>';
		?>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<input type="text" name="titleEmega" id="titleEmega" placeholder="Title" class="form-control" value="<?php if (isset($_POST['titleEmega'])) echo $_POST['titleEmega']; ?>"> <br/>
				<input type="text" name="uri" id="uri" placeholder="Uri" class="form-control" value="<?php if (isset($_POST['uri'])) echo $_POST['uri']; ?>"><br/>
				<textarea class="form-control" name="description" id="description" placeholder="Description"><?php if (isset($_POST['description'])) echo $_POST['description']; ?></textarea> <br/>
				<textarea class="form-control" name="keywords" id="keywords" placeholder="Keywords"><?php if (isset($_POST['keywords'])) echo $_POST['keywords']; ?></textarea> <br/>
				
				<input type="text" name="userArr" id="userArr" class="form-control" value="<?php if (isset($_POST['userArr'])) echo $_POST['userArr']; ?>">

				<input type="file" name="image" id="image">
				<img id="blah" src="#" alt="image in here"/>
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
							<option value="public">Public</option>
							<option value="privated">Privated</option>
						</select>
					</div><!-- col mode option-->
				</div> <!-- end row -->

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
				</div> <!-- end row -->

			</div> <!-- end col-md-6 col-sm-6 col-xs-12 -->

	</div> <!-- end row-->




	<h2>Block</h2>
	<div id="blockWrapp1" class="blockWrapp">
		<div id="remove"><button class="btn btn-primary">Webpage</button></div>
		<input type="hidden" name="maxblock[]" id="maxblock" class="maxblock" value="1"> 
		<div id="ckeditor1" class="ckeditorWrapp">
			<textarea class="ckeditor" name="editor1"></textarea>
			<script type="text/javascript">

						var path = "<?php echo base_url(); ?>";
						CKEDITOR.replace( 'editor1', {
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
			<input type="file" data-href="1" name="img1" id="img1" class="uploadEmega">
			
			<img id="blah1" src="#" alt="image in here" class="img-responsive" />
			<input type="text" name="index" value="1">
			<div id="dvPreview1"></div>
			<div id="loading1"></div>
		</div>
	</div><!--/blockWrapp-->
	<button style="margin: 40px 0" class="btn btn-warning" id="addblock"><span class="glyphicon glyphicon-plus"></span> Add block</button>
	
	<input type="submit" name="submit" value="submit" class="btn btn-danger">
	<input type="text" name="maxindex" id="maxindex" class="form-control" value="1">
	</div>
</div>
