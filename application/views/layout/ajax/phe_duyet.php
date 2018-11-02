<script type="text/javascript">
	$(document).ready(function() {

		$('#deleteBtn').on('click', function() {
			
			$('#wrapp_box1').show();
			setTimeout(function(){$('#wrapp_box1').fadeOut('fast','linear')},11000);
		});
		$('#btnCancel').on('click', function() {
			$('#wrapp_box1').hide();
		});

		$('#btnOk').on('click', function() {
			
			var data_id = $('#deleteBtn').attr('data-id');
			var data_table = $('#deleteBtn').attr('data-table');
			if (data_id && data_table) {
				$.ajax({
				url: "<?php echo base_url('quan_tri/C_tin_tuc/xoa_bai_cho_phe_duyet_ajax') ?>",
				type: 'post',
				data: {dataid: data_id, datatable: data_table},
				beforeSend: function() {
					$('#loadingBox').show();
					$('#btnCancel').hide();
					$('#btnOk').hide();
				},
				success: function(respone) {
					//reload.href("<?php echo site_url('quan-tri/cho-phe-duyet') ?>");
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

		$('#publishBtn').on('click', function(e) {
			e.preventDefault();
			//alert('asd');
			var dataId = $(this).attr('data-post');
			var data_table = $(this).attr('data-table');
			if (dataId && data_table) {
				$.ajax({
					url: "<?php echo base_url('quan_tri/C_tin_tuc/publishPost') ?>",
					type: 'post',
					dataType: 'JSON',
					cache: false,
					data: {idPost: dataId, tablename: data_table},
					beforeSend: function() {
						$('#confirm_text2').html("Đang xuất bản bài viết ... <img src='<?php echo base_url('public/icon/loading.gif') ?>'>");
					}, 
					success: function(data) {
						console.log(data);
						
						if (data['notid'] == true) {
							$('#confirm_text2').html("<span class='label label-danger'>Lỗi! Vui lòng thử lại</span>");
							$('#wrapp_box2').fadeIn();
							setTimeout(function(){$('#wrapp_box2').hide()}, 1500);
						}
						if (data['notpost'] == true) {
							$('#confirm_text2').html("<span class='label label-danger'>Lỗi! Bài viết này không tồn tại</span>");
							$('#wrapp_box2').fadeIn();
							setTimeout(function(){$('#wrapp_box2').hide()}, 1500);
						}
						if (data['notupdate'] == true) {
							$('#confirm_text2').html("<span class='label label-danger'>Lỗi! Bài viết này không tồn tại</span>");
							$('#wrapp_box2').fadeIn();
							setTimeout(function(){$('#wrapp_box2').hide()}, 1500);
						} 
						if (data['successUpdate'] == true) {
							$('#confirm_text2').html("<span class='label label-success'>Bài viết đã được xuất bản</span>");
							$('#publishBtn').hide();
							$('#wrapp_box2').fadeIn();
							setTimeout(function(){$('#wrapp_box2').hide()}, 1500);
						} 

					}
				});
			} else {
				$('#confirm_text2').html("<span class='label label-danger'>Lỗi! Vui lòng thử lại</span>");
				$('#wrapp_box2').fadeIn();
				setTimeout(function(){$('#wrapp_box2').hide()}, 1500);
			}
		});
	});
</script>