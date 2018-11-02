<script type="text/javascript">
	$('#addBtn').on('click', function(e) {
		e.preventDefault();
		var index = $('textarea').length;
		index += 1;
		var template = 	'<div class="row" id="wrapp'+index+'">'+
						'<div class="col-md-12 col-sm-12 col-xs-12">'+
							'<button class="btn btn-warning" id="removeBtn" ikr="'+index+'">Remove</button>'+
						'</div>'+
							'<div class="col-md-4 col-sm-4 col-xs-12">'+
								'<textarea class="form-control" name="caption[] placeholder="Caption"></textarea>'+
							'</div>'+
							'<div class="col-md-8 col-sm-8 col-xs-12">'+
								'<input type="file" name="slidefile[]" data-href="'+index+'" id="slidefile">'+
								'<img id="blah'+index+'" src="#" alt="image in here"/>'+
								'<div id="dvPreview'+index+'"></div>'+
								'<div id="loading'+index+'"></div>'+
							'</div>'+
						'</div><br/>';
		$(this).before(template);

	}); // Add button

	$(document).on('click','#removeBtn', function(e) {
		e.preventDefault();
		var index = $(this).attr('ikr');
		var id = $(this).attr('idt');


		if (id) {
				$.ajax({
					url: "<?php echo base_url('privated/C_privated/delete_ajax') ?>",
					type: "post",
					data: {idt: id, idkey: index},
					beforeSend:function() {

					},
					success:function(respone) {
						
						if (respone == '1') {
							alert('Đã xóa slide: '+index);
							$('#wrapp'+index).remove();
						} else alert('Có lỗi trong quá trình xóa slide: '+index);
					}
				});
		} else $('#wrapp'+index).remove();

	}); // Remove button


	$(document).on('change', '#slidefile', function(e) {
			var index = $(this).attr('data-href');
			if (index) {
				readURL(this,index);
			}
		}) // change

	function readURL(input,index) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#blah'+index).attr('src', e.target.result).show();
	            //alert(reader.image);
	        }
	        reader.readAsDataURL(input.files[0]);
	        return true;
	    }
	} // readURL


	$(document).on('click','#control', function(e) {
		e.preventDefault();
		var valid = $(this).attr('ctrl');
		var active = $(this).attr('active');
		var classval = $(this).attr('class');
		var btn = $(this);
		var obtn = $('button[class="btn btn-success"]');

		//alert(obtn.attr('ctrl'));
		//alert(active);
		// class success ~ active

		if (classval != 'btn btn-success') {

				$.ajax({
					url: "<?php echo base_url('privated/C_privated/control_ajax') ?>",
					type: 'post',
					data: {ctrl: valid},
					beforeSend: function() {
					},
					success: function(respone) {
						if (respone == 1) {
							btn.removeClass('btn btn-default');
							btn.addClass('btn btn-success');

							//-------
							obtn.removeClass('btn btn-success');
							obtn.addClass('btn btn-default');

							//alert('Ok');
						}
					}
				}); // ajax
		} else return false;
	});

</script>