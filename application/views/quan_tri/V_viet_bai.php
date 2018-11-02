<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>
<?php
	if (isset($feedback))
	{
		?>
		<div class="alert alert-success" role="alert"><?php echo $feedback ?></div>
		<?php
	}
	if (isset($errors))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $errors ?></div>
		<?php
	}
?>

<?php
	if (isset($err))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $err ?></div>
		<?php
	}
?>
 <br>
<form method="post" enctype="multipart/form-data">
	<div class="row" style="margin: 0; padding: 0">
		<label>Dạng thể hiện:</label><br>
		<div style="font-size: 25px; color: #D55F00; font-family: monospace; font-weight: bold">
			<input type="radio" name="typenews" value="photo" <?php if (isset($_POST['typenews']) && $_POST['typenews'] =='photo') echo 'checked="checked"'; ?> > Tin tức hình ảnh
			<input type="radio" name="typenews" value="detail" checked="checked"> Tin tức thuần
		</div>

	</div>
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<label>Tiêu đề: </label>
			<input type="text" class="form-control" id="tieu_de" name="tieu_de" value="<?php if (isset($_POST['tieu_de'])) echo $_POST['tieu_de'] ?>">
			<label>Tóm tắt: </label> <br>
			<textarea name="tom_tat" id="tom_tat"><?php if (isset($_POST['tom_tat'])) echo $_POST['tom_tat'] ?></textarea>
			<hr/>



			<!--usertags-->
			<input type="text" name="userArr" id="userArr" class="form-control" value="<?php if (isset($_POST['userArr'])) echo $_POST['userArr']; ?>">
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

			<!--/usertags-->	
			




			<label>Danh mục:</label>
			<select class="form-control" id="danh_muc" name="danh_muc">
				<option value="default">---Chọn loại tin---</option>
				<?php  
					if (isset($loai_tin) && !empty($loai_tin))
					{
						foreach ($loai_tin as $item)
						{
							?>
							<option value="<?php echo $item['ma_loai'] ?>"><?php echo $item['loai_tin'] ?></option>
							<?php
						}
					}
				?>

				<?php
					if (isset($loai_tin_nhat_ky) && !empty($loai_tin_nhat_ky))
					{
						foreach ($loai_tin_nhat_ky as $item1)
						{
							?>
							<option value="<?php echo $item1['ma_loai'] ?>"><?php echo $item1['loai_tin'] ?></option>
							<?php
						}
					}

				?> 	
			</select>
			<label>Link URL:</label>
			<input type="text" class="form-control" id="url" name="url" value="<?php if (isset($_POST['url'])) echo $_POST['url'] ?>">
			
		</div>
		<div class="col-md-6 col-sm-6" style="text-align: center;">
			<label>Hình:</label>
			<div id="upload_file_button"><span class="glyphicon glyphicon-open"></span></div>
			<input type="file" id="hinh" name="hinh" class="form-control">
				<img id="blah" src="<?php echo base_url('public/icon/display_upload_img.png') ?>" alt="image in here" style="max-width: 100%; max-height: 250px; margin-top: 15px" />
			<div id="dvPreview"></div>
			<div id="loading"></div>
			<br>
			
		</div>
	</div>
	<div class="row" style="margin: 0; padding: 0">
	<hr>
		<label>Keyword: </label>
			<textarea name="keyword" id="keyword" class="form-control"><?php if (isset($_POST['keyword'])) echo $_POST['keyword'] ?></textarea>
		<br>
		<label style="float: left">Description:</label>
			<textarea name="description" id="description" class="form-control"><?php if (isset($_POST['description'])) echo $_POST['description'] ?></textarea>
			<br>
			<label style="float: left">Đính kèm Icon:</label><br>
			<input type="radio" name="icon" value="photo" <?php if (isset($_POST['icon']) && $_POST['icon'] =='photo') echo 'checked="checked"'; ?>> <span style="color: #1BA200"><b>Icon hình ảnh</b></span>
			<input type="radio" name="icon" value="video" <?php if (isset($_POST['icon']) && $_POST['icon'] =='video') echo 'checked="checked"'; ?> > <span style="color: #CB0707"><b>Icon video</b></span>
			<input type="radio" name="icon" value="0" checked="checked"> <span style="color: #0020AC"><b>Không</b></span>
	</div>
	<hr/>
	<div class="row" >

		<div class="col-md-12" style="margin: 0; padding: 0">
		
			<div class="col-md-12">
					<label>Nội dung: </label>
					<textarea class="ckeditor" name="editor1" id="editor1">
					<?php if (isset($_POST['editor1'])) echo $_POST['editor1'] ?>
					</textarea>
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
		</div>
	</div>
	<br/>
	<div class="col-md-12" style="margin: 40px 0; padding: 0">
		<div style="margin: 20px 0">
			<span class="chen_khao_sat">CHÈN MỘT KHẢO SÁT </span>
			<select name="survey_select" class="survey_select">
				<option value="0">------Không------</option>
			<?php  
			if (isset($survey_category) && !empty($survey_category))
			{
				foreach ($survey_category as $categorys)
				{
				?>
				<option class="optionItem" <?php if (isset($_POST['survey_select']) && $_POST['survey_select'] == $categorys['id']) echo "selected='selected'" ?> value="<?php echo $categorys['id'] ?>"><?php echo $categorys['category_name'] ?></option>
				<?php
				}
			}
			?>
			</select>	
			
					
		</div>
		<div class="surveyForm">
			
		</div>
	</div>
	<div class="col-md-12">
		<input type="button" class="btn btn-success" style="float: right; width:  150px; margin-top: 20px;" name="xuatban" id="xuatban" value="Xuất bản">
	</div>
</form>

<br>
	<a href="http://tympanus.net/codrops/" target="target">http://tympanus.net/codrops/</a>