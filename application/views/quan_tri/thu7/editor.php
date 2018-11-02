<script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
<form method="post" enctype="multipart/form-data">
<div id="thu7-wrapp">
	<div id="topic-name"><span>Thu7 Department (editor)</span></div>
	
	<div id="option-nav">
		<span class="label label-warning">Thu7, places you went!</span>


		<?php if (isset($placesErr) && $placesErr === true) { ?>
				<div class="alert alert-danger"><strong>placesErr</strong></div>
		<?php } ?>
		<div id="places-div"><input type="text" name="places" id="places" class="form-control" placeholder="Places you went"><input type="hidden" name="placesHidden" id="placesHidden" value=""></div>
		
		<div id="url-div">
			<?php if (isset($urlErr) && $urlErr === true) { ?>
				<div class="alert alert-danger"><strong>urlErr</strong></div>
			<?php } ?>
			<input type="text" name="url" id="url" placeholder="url">
		</div>
		
		
		<div id="date">
			<?php if (isset($dateErr) && $dateErr === true) { ?>
				<div class="alert alert-danger"><strong>date error</strong></div>
			<?php } ?>
			<input type="text" name="date" id="datepicker" class="form-control" placeholder="Date you went">
		</div>
		
		
		
		<div id="keysearch-div">
			
			<?php if (isset($keySearchErr) && $keySearchErr === true) { ?>
				<div class="alert alert-danger"><strong>keysearch error</strong></div>
			<?php } ?>
			<textarea class="form-control" name="keysearch" id="keysearch" placeholder="Keysearch for relative post of trip, places, date"></textarea>
		</div>
		
		



		<div id="submit"><input type="submit" name="addPlaces" id="addPlaces" value="Add Places" class="btn btn-warning"></div>
	
		<?php if (isset($success) && $success === true) { ?>
			<div id="success">

				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Insert success!</strong>
				</div>
			</div>
		<?php } ?>
	</div> <!--option-nav-->
	
	<div id="form-wrapp">
		<div id="cover-img-div">
			<?php if (isset($coverImgErr) && $coverImgErr === true) { ?>
				<div class="alert alert-danger"><strong>coverImgErr</strong></div>
			<?php } ?>
			
			<img src="#" id="cover-img" alt="Cover image" title="Cover image" class="img-responsive">
			<input type="file" class="file-ip" name="cover-img-ip" id="cover-img-ip" src="cover-img">
			<span class="label label-warning">Cover image:</span>
		</div>

		<div id="avatar-img-div">
			<?php if (isset($avatarImgErr) && $avatarImgErr === true) { ?>
				<div class="alert alert-danger"><strong>avatarImgErr</strong></div>
			<?php } ?>
			
			<img src="#" id="avatar-img" alt="Avatar image" title="Avatar image" class="img-responsive">
			<input type="file" class="file-ip" name="avatar-img-ip" id="avatar-img-ip" src="avatar-img">
			<span class="label label-warning">Avatar image:</span>	
		</div>

		<div id="description-div">
			<?php if (isset($descriptionErr) && $descriptionErr === true) { ?>
				<div class="alert alert-danger"><strong>descriptionErr</strong></div>
			<?php } ?>
			<textarea name="ckeditor" id="ckeditor" class="form-control"></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('ckeditor');
			</script>
		</div>

		<div class="btn-mb"><input type="submit" name="addPlaces" id="addPlaces" value="Add Places" class="btn btn-warning"></div>

	</div>


</div>
</form>