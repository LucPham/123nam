<style type="text/css">
	textarea {
		font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	}
</style>

<h2>Album Updater: <?php if (isset($arr_album) && !empty($arr_album)) echo $arr_album['id']; ?></h2>

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

<div class="col-md-6 col-sm-8 col-xs-12 upload" style="border: solid 1px #AAAAAA; margin-bottom: 30px; padding: 20px 0;">

	<form method="post" name="upload" class="form" enctype="multipart/form-data">
	<div class="album">
	<?php
		if (isset($arr_album) && !empty($arr_album)) {
			?>


			<input type="text" name="albumName" id="albumName" value="<?php echo $arr_album['tieu_de']; if (isset($_POST['albumName'])) echo $_POST['albumName'] ?>" class="form-control" placeholder="Album name">
		<input type="text" name="url" id="url" class="form-control" value="<?php echo $arr_album['url']; if (isset($_POST['url'])) echo $_POST['url'] ?>" placeholder="url">
		<br/>
		<div class="wrapp_loai_tin_album_upload">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<span class="label label-danger">Loại tin:</span>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<select name="loai_tin_album_upload" id="loai_tin_album_upload" class="form-control">
			 <option value="0">---Loại tin---</option>
			 <option  value="album" <?php if (isset($loai_tin_get) && $loai_tin_get=='album') echo 'selected="selected"' ?> >ALBUM</option>
			 <?php  
			 	if (isset($loai_tin)) {
			 		if (!empty($loai_tin)) {
			 			foreach ($loai_tin as $name) {
			 				?>
							<option value="<?php echo $name['ma_loai'] ?>" <?php if (isset($_POST['loai_tin_album_upload']) && $_POST['loai_tin_album_upload'] == $name['ma_loai']) echo 'selected="selected"' ?> <?php if (isset($loai_tin_get) && $loai_tin_get==$name['ma_loai']) echo 'selected="selected"' ?> ><?php echo $name['loai_tin'] ?></option>
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
			<textarea name="tom_tat_album_upload" id="tom_tat_album_upload" class="form-control" placeholder="Tóm tắt nội dung"><?php echo $arr_album['tom_tat']; if (isset($_POST['tom_tat_album_upload'])) echo $_POST['tom_tat_album_upload'] ?></textarea>
		</div>
		
		<textarea class="form-control" name="usertaged" id="usertaged" style=""><?php 
							if (isset($usertags)) {
								foreach ($usertags as $item) {
								echo $item['userid'].','; 
							}
						}
						?></textarea>

		<!--usertags-->
		<div class="row">
			<div class="col-md-3">
				<button class="btn btn-danger">Mode</button>
			</div> <!-- col mode btn-->
			
			<div class="col-md-9">
				<select name="mode" id="mode" class="form-control mode">
					<option value="public" <?php if ($arr_album['privated'] == 0) echo 'selected' ?>>Public</option>
					<option value="privated" <?php if ($arr_album['privated'] == 1) echo 'selected' ?>>Privated</option>
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
				
		<!--/usertags-->

		<div id="viewload">
			<?php 
				if (isset($imgLocation) && $imgLocation == 'tin_tuc') {
					?>
					<img src="<?php echo base_url('public/hinh_tieu_de/'.$arr_album['hinh']) ?>" class="img-responsive">
					<?php 
				} else {
					?>
					<img src="<?php echo base_url('public/album/hinh_tieu_de/'.$arr_album['hinh']) ?>" class="img-responsive">
					<?php 
				}
			?>
			

		</div>
		<br/>
		<div class="col-md-3 col-sm-3 col-xs-3">
				<label class="label label-danger">Hình tiêu đề</label>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9">
				<input type="file" name="albumFile" id="albumFile">
		</div>

			<?php
		} else echo "-_- Chưa cập nhật dữ liệu -_-";
	?> 
		
	</div>
<hr>
<?php 
	if (isset($arr_upload) && !empty($arr_upload)) {
		foreach ($arr_upload as $key=>$item) {
			$key++;
			?>
			<div class="<?php echo 'wrapper_'.$key; ?>">
				<div class="row">
				  <div class="col-sm-12 col-md-12">
					<div class="thumbnail">
				      <img src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" id="<?php echo "preview_".$key; ?>" class="img-responsive">
				    </div>
			  </div>
			</div>
	<!--preview-->



		
		<span class="<?php echo 'feedback_'.$key; ?>" style="display: none">Đang tải ảnh lên ...</span>
		<div class="row">
			<div class="col-md-11 col-sm-11 col-xs-11">
				<input type="file"  name="data[]" class="file" id="<?php echo 'file_'.$key; ?>" index="<?php echo $key; ?>" placeholder="image" value="<?php echo $item['image'] ?>">
				<p style="color: red; font-size:12px; display: none" class="reply<?php echo $key; ?>">Ảnh cũ sẽ được sử dụng</p>
				<input type="text" name="stt[]" value="<?php echo $key ?>">
				<input type="text" name="idItem[]" value="<?php echo $item['id'] ?>">
			</div>
			<div class="cool-md-1 col-sm-1 col-xs-1 delete"><a href="#" title="Xóa" id="<?php echo $key; ?>" style="color: #0D0DA1; font-family: fantasy; font-weight: bold">X</a></div>
			
		</div>
		<br>
		<textarea name="caption[]" class="form-control" id="<?php echo 'caption_'.$key; ?>" placeholder="caption"><?php if($item['caption'] != '') echo $item['caption']; if(isset($_POST['caption'])) echo $_POST['caption']; ?></textarea> 
		<br>
</div>
<!--end /.wrapper-1-->
			<?php
		}
	} else echo "-_- Chưa có dữ liệu -_-";

?>

	<div class="col-md-12 col-sm-12 col-xs-12 button">
		<a href="#" class="btn btn-sm btn-danger addform" style="float: left">Tải Thêm</a>
		<button class="btn btn-sm btn-primary" style="margin-left: 20%">Số Lượng Hình: 21</button>
		<input type="button" id="btn" name="btn" class="btn btn-sm btn-primary" value="Tải Lên" style="float: right">
	</div>
	</form>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="count-image">
		Số hình: 21
	</div>
</div>


