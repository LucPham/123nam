<script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>

<?php 
	if (isset($data) && !empty($data)) { 
	$oldImg = array(
		'coverImg' => base_url('public/category_image/thu7/'.$data['cover_img']),
		'avatarImg' => base_url('public/category_image/thu7/'.$data['avatar_img'])
	);

?>
<form method="post" enctype="multipart/form-data">
<div id="thu7-wrapp">
	<div id="topic-name"><span><?php echo $data['places_title'] ?></span></div>
	
	<div id="option-nav">
		<span class="label label-warning"><?php echo $data['places_title'] ?></span>


		<?php if (isset($places_titleErr) && $places_titleErr === true) { ?>
				<div class="alert alert-danger"><strong>places_titleErr</strong></div>
		<?php } ?>
		<div id="places_title-div"><input type="text" name="places_title" id="places_title" class="form-control" placeholder="Places you went" value="<?php if (isset($data['places_title'])) echo $data['places_title'] ?>"><input type="hidden" name="places_title_hidden" id="places_title_hidden" value="<?php if (isset($data['places_title'])) echo $data['places_title'] ?>"></div>
		
		<div id="url-div">
			<?php if (isset($urlErr) && $urlErr === true) { ?>
				<div class="alert alert-danger"><strong>urlErr</strong></div>
			<?php } ?>
			<input type="text" name="url" id="url" placeholder="url" value="<?php if (isset($data['url'])) echo $data['url'] ?>">
		</div>
		
		
		<div id="date">
			<?php if (isset($dateErr) && $dateErr === true) { ?>
				<div class="alert alert-danger"><strong>date error</strong></div>
			<?php } ?>
			<input type="text" name="date" id="datepicker" class="form-control" placeholder="Date you went" value="<?php if (isset($data['date'])) echo $data['date'] ?>">
		</div>
		
		
		
		<div id="keysearch-div">
			
			<?php if (isset($keySearchErr) && $keySearchErr === true) { ?>
				<div class="alert alert-danger"><strong>keysearch error</strong></div>
			<?php } ?>
			<textarea class="form-control" name="keysearch" id="keysearch" placeholder="Keysearch for relative post of trip, places_title, date"><?php if (isset($data['keysearch'])) echo $data['keysearch'] ?></textarea>
		</div>


		<div id="submit"><input type="submit" name="addPlaces" id="addPlaces" value="Add Places" class="btn btn-warning"></div>
	
		<?php if (isset($success) && $success === true) { ?>
			<div id="success">

				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Update success!</strong>
				</div>
			</div>
		<?php } ?>
	</div> <!--option-nav-->
	
	<div id="form-wrapp">
		<div id="cover-img-div">
			<?php if (isset($coverImgErr) && $coverImgErr === true) { ?>
				<div class="alert alert-danger"><strong>coverImgErr</strong></div>
			<?php } ?>
			
			<img src="<?php if (isset($data['cover_img'])) echo base_url('public/privated/Timeline/CoverImage/'.$data['cover_img']) ?>" id="coverImg" alt="Cover image" title="Cover image" class="img-responsive">
			<input type="file" class="file-ip" name="cover-img-ip" id="coverImg-ip" src="coverImg" target="coverImg">
			<span class="label label-warning">Cover image:</span> <span class="label label-primary coverImg return" target="coverImg" src="<?php  echo base_url('public/privated/Timeline/CoverImage/'.$data['cover_img']) ?>">Dùng lại hình cũ</span>
		</div>

		<div id="avatar-img-div">
			<?php if (isset($avatarImgErr) && $avatarImgErr === true) { ?>
				<div class="alert alert-danger"><strong>avatarImgErr</strong></div>
			<?php } ?>
			
			<img src="<?php if (isset($data['avatar_img'])) echo base_url('public/privated/Timeline/AvatarImage/'.$data['avatar_img']) ?>" id="avatarImg" alt="Avatar image" title="Avatar image" class="img-responsive">
			<input type="file" class="file-ip" name="avatar-img-ip" id="avatarImg-ip" src="avatarImg" target="avatarImg">
			<span class="label label-warning">Avatar image:</span> <span class="label label-primary avatarImg return" target="avatarImg" src="<?php echo base_url('public/privated/Timeline/AvatarImage/'.$data['avatar_img']) ?>">Dùng lại hình cũ</span>
		</div>

		<div id="description-div">
			<?php if (isset($descriptionErr) && $descriptionErr === true) { ?>
				<div class="alert alert-danger"><strong>descriptionErr</strong></div>
			<?php } ?>
			<textarea name="ckeditor" id="ckeditor" class="form-control"><?php if (isset($data['description'])) echo $data['description'];?></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('ckeditor');
			</script>
		</div>

		<div class="btn-mb"><input type="submit" name="addPlaces" id="addPlaces" value="Add Places" class="btn btn-warning"></div>

	</div>


</div>
</form>
<?php } ?>