<script type="text/javascript">

	//indirect ajax
	//files collection array
	var filecollection = new Array();



	$('#images').on('change', function(e) {
		var files = e.target.files;

	$.each(files,function(i, file) {

		filecollection.push(file);

		var reader = new FileReader();

		reader.readAsDataURL(file);

		reader.onload = function(e) {

			var template = '<form action="#" >'+
				'<img src="'+e.target.result+'">'+
				'<label>Image title</label> <input type="text" name="title">'+
				'<button class="btn btn-sm btn-info upload">Upload</button> '+
				'<button type="button" class="btn btn-sm btn-danger cancel">Cancel</button>'+
				'<br>'+
				'<div class="progress progress-triped active">'+
				'<div class="progress-bar" style="width: 0%"></div>'+
			'</div>'+
			'</form>'+
			'<hr>';

			$('#images-to-upload').append(template);
		};

	});

	});

	// form upload ... delegation
	$(document).on('submit','form', function(e) {
		e.preventDefault();
		$form = $(this);
		//this form index
		$form.find('.progress-bar').removeClass('progress-bar-success').removeClass('progress-bar-danger');
		var index = $(this).index();


		var formdata = new FormData($(this)[0]);
		//console.log(filecollection[index]);

		formdata.append('image',filecollection[index]);
		formdata.append('index', index);
		var request = new XMLHttpRequest();

		request.upload.addEventListener('progress',function(e){
				var percent = Math.round(e.loaded/e.total * 100);
				$form.find('.progress-bar').width(percent+'%').html(percent+'%');
		});
		
		
		request.open("post","<?php echo base_url('quan_tri/C_tin_tuc/getDataUpload') ?>",true);

		request.send(formdata);
		

		$form.on('click', '.cancel', function(e) {
			request.abort();
			$form.find('.progress-bar')
					.addClass('progress-bar-danger')
					.removeClass('progress-bar-success')
					.html('upload aborted...');
		});
		

		//uploadImage($form);
	
	});
</script>