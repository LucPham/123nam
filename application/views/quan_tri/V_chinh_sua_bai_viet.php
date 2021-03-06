<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?>"></script>

<?php
	if (isset($feedback))
	{
		?>
		<div class="alert alert-success" role="alert"><?php echo $feedback ?></div>
		<?php
	}


	if (isset($err))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $err ?></div>
		<?php
	}

?>
<?php
	if (isset($errSurvey))
	{
		?>
		<div class="alert alert-danger" role="alert"><?php echo $errSurvey ?></div>
	<?php
	}
?>
<?php
	if (isset($successSurvey))
	{
		?>
		<div class="alert alert-success" role="alert"><?php echo $successSurvey ?></div>
	<?php
	}
?>

<form method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<label>Tiêu đề: </label>

			<input type="text" class="form-control" id="tieu_de" name="tieu_de" value="<?php if (isset($data)) echo $data['tieu_de'] ?>">



			<label>Tóm tắt: </label> <br>
			<textarea name="tom_tat" id="tom_tat"><?php if (isset($data)) echo $data['tom_tat']?></textarea>

			<hr/>

			<!--usertags-->
			<textarea class="form-control" name="usertaged" id="usertaged" style=""><?php 
							if (isset($usertags)) {
								foreach ($usertags as $item) {
								echo $item['userid'].','; 
							}
						}
						?></textarea>		

			<div class="row">
				<div class="col-md-3">
					<button class="btn btn-danger">Mode</button>
				</div> <!-- col mode btn-->
				
				<div class="col-md-9">
					<select name="mode" id="mode" class="form-control mode">
						<option value="public" <?php if ($data['privated'] == 0) echo 'selected' ?>>Public</option>
						<option value="privated" <?php if ($data['privated'] == 1) echo 'selected' ?>>Privated</option>
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
			</div>


			<!--/usertags-->


			<label>Danh mục:</label>
			<select class="form-control" id="danh_muc" name="danh_muc">
				<?php  
					if (isset($loai_tin) && !empty($loai_tin))
					{
						foreach ($loai_tin as $item)
						{
							?>
							<option <?php if ($data['loai_tin'] == $item['ma_loai']) echo 'selected' ?> value="<?php echo $item['ma_loai'] ?>"><?php echo $item['loai_tin'] ?></option>
							<?php
						}
					}

				?>	
			</select>

			
			<label>Link URL:</label>
			<input type="text" class="form-control" id="url" name="url" value="<?php if (isset($data)) echo $data['url'] ?>">

		</div>


		<div class="col-md-6 col-sm-6" style="text-align: center;">
		
			<label>Hình:</label>

			<div id="upload_file_button"><span class="glyphicon glyphicon-open"></span></div>
			<input type="file" id="hinh" name="hinh" class="form-control">
			
				<img id="blah" src="<?php echo base_url('public/hinh_tieu_de/'. $data['hinh']) ?>" alt="image in here" style="max-width: 100%; max-height: 250px; margin-top: 15px" />
			
			<div id="dvPreview"></div>
			<div id="loading"></div>
		</div>
	</div>
	<div class="row" style="margin: 0; padding: 0">
	<hr>
		<label>Keyword: </label>
			<textarea name="keyword" id="keyword" class="form-control"><?php if (isset($_POST['keyword'])) echo $_POST['keyword'] ?><?php if (isset($data)) echo $data['keyword'] ?></textarea>
		<br>
		<label style="float: left">Description:</label>
			<textarea name="description" id="description" class="form-control"><?php if (isset($_POST['description'])) echo $_POST['description'] ?><?php if (isset($data)) echo $data['description'] ?></textarea>
			<br>
			<label style="float: left">Đính kèm Icon:</label><br>
			<div style="font-size: 30px;">
			<!-- ICON PHOTO-->
			<input type="radio" name="icon" id="icon" value="photo" <?php if ($data['icon'] =='photo') echo 'checked="checked"'; ?>> <span style="color: #1BA200"><b>Icon hình ảnh</b></span>
			


			<!-- ICON VIDEO-->
			<input type="radio" name="icon" value="video" <?php if (isset($_POST['icon']) && $_POST['icon'] =='video') echo 'checked="checked"'; ?> <?php if ($data['icon'] =='video') echo 'checked="checked"'; ?> > <span style="color: #CB0707"><b>Icon video</b></span>

			<!-- KHONG ICON-->
			<input type="radio" name="icon" value="0" <?php if ($data['icon'] == '0') echo 'checked="checked"'; ?>> <span style="color: #0020AC"><b>Không</b></span>
			</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<hr/>
			<label>Nội dung: </label>
			
			<textarea class="ckeditor" name="editor1" id="editor1">

			<?php if (isset($data)) echo $data['noi_dung'] ?>


			</textarea>
			<script type="text/javascript">
				var path = "<?php echo base_url() ?>";
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

		 
	</div><!-- end /Row-->

	<div class="row" style="margin-top: 40px;">
		<div class="col-md-12">
			<span class="btn btn-success">Chỉnh sửa khảo sát</span>
			<select name="option_survey_update" class="option_survey_update">
				<option checked="checked value="0">Không</option>
				<option value="1">Có</option>
			</select>	
		</div>
	</div><!-- end row -->

	<div class="row" style="margin: 0; padding: 0">
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
				<option class="optionItem" <?php if (isset($dataSurvey['category_id']) && $dataSurvey['category_id'] == $categorys['id']) echo "selected='selected'" ?> value="<?php echo $categorys['id'] ?>"><?php echo $categorys['category_name'] ?></option>
				<?php
				}
			}
			?>
			</select>	
			
					
		</div>
		<!-- Form moi-->
		<div class="surveyForm">
			
		</div>
		<!-- Form cu~-->
		<div class="dataSurveyForm">
			<?php 
			if (isset($dataSurvey['category_id']))
			{
				if ($dataSurvey['category_id'] == 'multiple_choice' || $dataSurvey['category_id'] == 'list_select')
				{
					$this->load->view('layout/survey/multiple_choice_edit');
				} elseif ($dataSurvey['category_id'] == 'yes_no') {
					$this->load->view('layout/survey/yes_no_edit');
				}
			}
			 ?>
			 <input type="hidden" name="loai_khao_sat_cu" id="loai_khao_sat_cu" value="<?php if (isset($dataSurvey['category_id'])) echo $dataSurvey['category_id'] ?>">
		</div>
		
	</div>
	</div><!--end ROW-->


	<input type="submit" class="btn btn-success" style="float: right; margin-top: 20px;" name="edit" id="edit" value="Lưu Thay Đổi">
</form>