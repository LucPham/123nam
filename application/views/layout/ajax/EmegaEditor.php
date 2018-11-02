<script type="text/javascript">

	$('#addblock').on('click', function(e) {
		e.preventDefault();
		var maxblock = $('.maxblock');
		for (var i = 0; i < maxblock.length; i ++) {
			var maxblockId = $(maxblock[i]).val();
		}
		var index = maxblockId*1+1;

		$('#maxindex').val(index);
		var template = '<div id="blockWrapp'+index+'" class="blockWrapp">'+
		'<p>--------------</p>'+
		'<div id="remove"><button class="btn btn-warning remove" version="new" data-remove="blockWrapp'+index+'">Remove block '+index+'</button></div>'+
		'<input type="hidden" name="maxblock[]" id="maxblock" class="maxblock" value="'+index+'">'+
		'<div id="ckeditor'+index+'" class="ckeditorWrapp">'+
			'<textarea class="ckeditor" name="editor'+index+'" id="editor'+index+'"></textarea>'+
			'<script type="text/javascript">'+
						'var path = "<?php echo base_url(); ?>";'+
						'CKEDITOR.replace( "editor'+index+'", {'+
					    'filebrowserBrowseUrl: path+"public/ckfinder_tintuc/ckfinder.html",'+
					    'filebrowserUploadUrl: path+"public/ckfinder_tintuc/core/connector/php/connector.php?command=QuickUpload&type=Files",'+

					    'filebrowserFlashBrowseUrl : path+"public/ckfinder_tintuc/ckfinder.html?type=Flash",'+
				
						'filebrowserImageUploadUrl : path+"public/ckfinder_tintuc/core/connector/php/connector.php?command=QuickUpload&type=Images",'+
					    'filebrowserWindowWidth: "1000",'+
					    'filebrowserWindowHeight: "700"'+
					'} );'+
					'</'+'script>'+
		'</div>'+
		'<div id="img'+index+'" class="img">'+
			'<input type="file" data-href="'+index+'" name="img'+index+'" id="img'+index+'" class="uploadEmega">'+
			'<input type="hidden" name="version'+index+'" value="new">'+
			'<img id="blah'+index+'" src="#" alt="image in here" class="img-responsive"/>'+
			'<input type="text" name="index'+index+'" value="'+index+'">'+
			'<div id="dvPreview'+index+'">'+
			'</div>'+
			'<div id="loading'+index+'"></div>'+
		'</div>'+
	'</div> </form>';
	$("#addblock").before(template);

	
	}); //end AddBlock

$(document).on('change', '.uploadEmega', function(e) {
	var index = $(this).attr('data-href');
	if (index) {
		readURL(this,index);
	}
})

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
}

	//
	$(document).on('click','.remove', function(e) {
		e.preventDefault();
		var blockid = $(this).attr('data-remove');
		var version = $(this).attr('version');
		var postid = $(this).attr('postid');
		var index = $(this).attr('index');
		var idkey = $(this).attr('idkey');
		var maxindex = $('#maxindex').val();

		//$('#maxindex').val(maxindex-1);
		
		if (version == 'new') {
			$('#'+blockid).remove();
		} else {
			var index = $(this).attr('index');
			$.ajax({
				url: "<?php echo base_url('emegazine/C_emegazine/deleteIndexAjax') ?>",
				type: "post",
				data: {i: idkey, block: index, id: postid},
				beforeSend:function() {

				},
				success:function(responve) {
					alert(responve);
				}
			});
		}
	})

	$(document).ready(function() {
		$('#deleteEmega').on('click', function() {
			
			$('#wrapp_box1').show();
			setTimeout(function(){$('#wrapp_box1').fadeOut('fast','linear')},20000);
		});
		$('#btnCancel').on('click', function() {
			$('#wrapp_box1').hide();
		});
		$('#btnOk').on('click', function() {
			
			var data_id = $('#deleteEmega').attr('data-id');
			
			if (data_id) {
				$.ajax({
				url: "<?php echo base_url('emegazine/C_emegazine/deleteEmegaAjax') ?>",
				type: 'post',
				data: {dataid: data_id},
				beforeSend: function() {
					$('#loadingBox').show();
					$('#btnCancel').hide();
					$('#btnOk').hide();
				},
				success: function(respone) {
					$('#confirm_text').hide();
					if (respone == '1') {
						$('#loadingBox').html("<span class='label label-danger'>Xóa bài viết thành công</span>");
						setTimeout(function(){window.history.back()},1000);
					} else {
						$('#loadingBox').html("<span class='label label-default'>Xóa bài viết không thành công, vui lòng thử lại</span>");
						setTimeout(function(){window.history.back()},1000);
					}
				}
			}); // end ajax
			}
			
		});
	});

</script>