<h1>ALBUM UPLOADER</h1>
<style type="text/css">
	textarea {
		font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	}

</style>
<?php
	if (isset($err))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $err ?></div>
		<?php
	}
?>
<?php
	if (isset($errAlbum))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $errAlbum ?></div>
		<?php
	}
?>
<?php
	if (isset($success))
	{
		?>
		<div class="alert alert-success" role="success"><?php echo $success ?></div>
		<?php
	}

?>

<?php
	if (isset($uploadInfo) && !empty($uploadInfo))
	{
		?>
			<div class="alert alert-info" role="success">Tải lên thành công, hình: 
				<?php
				for ($i=0; $i < count($uploadInfo); $i++)
				{
					echo $uploadInfo[$i].', ';
				}
				?>
			</div>
			<?php 
	}
?>

<?php
	if (isset($errInfo) && !empty($errInfo))
	{
		?>
			<div class="alert alert-warning" role="success">Hình lỗi: 
				<?php
				for ($i=0; $i < count($errInfo); $i++)
				{
					echo $errInfo[$i].', ';
				}
				?>
			</div>
			<?php
	}
?>

<div class="col-md-6 col-sm-8 col-xs-12 upload" style="border: solid 1px #AAAAAA; margin-bottom: 30px; padding: 20px 0;">

	<form method="post" class="form" id="form-album-upload" enctype="multipart/form-data">
	<div class="album">
		<input type="text" name="albumName" id="albumName" value="<?php if (isset($_POST['albumName'])) echo $_POST['albumName'] ?>" class="form-control" placeholder="Album name">
		<input type="text" name="urlalbum" id="urlalbum" class="form-control" placeholder="url">
		<br/>
		<div class="wrapp_loai_tin_album_upload">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<span class="label label-danger">Loại tin:</span>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<select name="loai_tin_album_upload" id="loai_tin_album_upload" class="form-control">
			 <option value="0">---Loại tin---</option>
			 <option value="al">ALBUM</option>
			 <?php  
			 	if (isset($loai_tin)) {
			 		if (!empty($loai_tin)) {
			 			foreach ($loai_tin as $name) {
			 				?>
							<option value="<?php echo $name['ma_loai'] ?>" <?php if (isset($_POST['loai_tin_album_upload']) && $_POST['loai_tin_album_upload'] == $name['ma_loai']) echo 'selected="selected"' ?> ><?php echo $name['loai_tin'] ?></option>
			 				<?php 
			 			}
			 		}
			 	}
			 ?>
			 <?php  
			 	if (isset($loai_tin_nhat_ky)) {
			 		if (!empty($loai_tin_nhat_ky)) {
			 			foreach ($loai_tin_nhat_ky as $name2) {
			 				?>
							<option value="<?php echo $name2['ma_loai'] ?>" <?php if (isset($_POST['loai_tin_album_upload']) && $_POST['loai_tin_album_upload'] == $name['ma_loai']) echo 'selected="selected"' ?> ><?php echo $name2['loai_tin'] ?></option>
			 				<?php 
			 			}
			 		}
			 	}
			 ?>
			</select>
			</div>
			
		</div><!-- end wrapp_loai_tin_album_upload-->
		<br/>
		<div class="wrapp_tom_tat_album_upload" style="margin: 20px 0">
			<textarea name="tom_tat_album_upload" id="tom_tat_album_upload" class="form-control" placeholder="Tóm tắt nội dung" value="<?php if (isset($_POST['tom_tat_album_upload'])) echo $_POST['tom_tat_album_upload'] ?>"></textarea>

			<!--user tags-->
			<input type="text" name="userArr" id="userArr" class="form-control" value="<?php if (isset($_POST['userArr'])) echo $_POST['userArr']; ?>">
			<!--/user tags-->
		</div>
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
		

	

		<div id="album-descript">
			<textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>	
		</div>
		<div id="album-keyword">
			<textarea name="keyword" id="keyword" class="form-control" placeholder="Keyword"></textarea>
		</div>
		<div id="viewload"><img src="#" class="img-responsive" style="display: none"></div>
		<br/>
		<div class="col-md-3 col-sm-3 col-xs-3">
				<label class="label label-danger">Hình tiêu đề</label>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9">
				<input type="file" name="albumFile" id="albumFile">
		</div>
		
		
	</div>
<hr>
<div class="wrapper_1">
		<div class="row">
		  <div class="col-sm-12 col-md-12">
		    <div class="thumbnail">
		      <img src="<?php if(isset($_F)) echo base_url('public/album/') ?>" id="preview_1" class="img-responsive" style="display: none">
		    </div>
		  </div>
		</div>
	<!--preview-->



		
		<span class="feedback_1" style="display: none">Đang tải ảnh lên ...</span>
		<div class="row">
			<div class="col-md-11 col-sm-11 col-xs-11">
				<input type="file" name="data[]" class="file" id="file_1" index="1" placeholder="image">
			</div>
			
		</div>
		<br>
		<textarea name="caption[]" class="form-control" id="caption_1" placeholder="caption"></textarea> 
		<br>
</div>
<!--end /.wrapper-1-->

<div class="wrapper_2">
		<div class="row">
		  <div class="col-sm-12 col-md-12">
		    <div class="thumbnail">
		      <img src="#" id="preview_2" class="img-responsive" style="display: none">
		    </div>
		  </div>
		</div>
	<!--preview-->



		<span class="feedback_2" style="display: none">Đang tải ảnh lên ...</span>
		<div class="row">
			<div class="col-md-11 col-sm-11 col-xs-11">
				<input type="file" name="data[]" class="file" id="file_2" index="2" placeholder="image">
			</div>
		</div>
		<br>
		<textarea name="caption[]" class="form-control" id="caption_2" placeholder="caption"></textarea> 
		
		<br>
	</div> 
	<!--end /.wrapper_2-->	
	<div class="col-md-12 col-sm-12 col-xs-12 button">
		<a href="#" class="btn btn-sm btn-danger addform" style="float: left">Tải Thêm</a>
		<input type="button" id="btn" name="btn" class="btn btn-sm btn-primary" value="Tải Lên" style="float: right">
	</div>
	</form>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="count-image">
		
	</div>
</div>


