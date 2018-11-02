<script type="text/javascript">

		$(document).on('click','#btnShowHide', function(e) {
			e.preventDefault();
	
			var data_id = $(this).attr('postid-request');
			var data_type = $(this).attr('posttype-request');
			var tbart = $(this).attr('tb-art');
			//if (data_id && data_type) {
				$.ajax({
					url: "<?php echo base_url('quan_tri/C_tin_tuc/show_hide_article_ajax') ?>",
					type: 'post',
					data: {id: data_id, typename: data_type, tbname: tbart},
					beforeSend: function() {
						$('#wrapp_box1').fadeIn();
					},
					success: function(response) {

						if (response == '1') {
							$('#wrapp_box1').fadeIn();
							setTimeout(function() {$('#wrapp_box1').fadeOut();}, 1500);
							$('#confirm_text').html("<span class='label label-primary'>Bài viết đã bị ẩn, và chuyển qua danh sách chờ phê duyệt!</span>");
							$("button[postid-request='"+data_id+"']").hide();
						}
						
						if (response == 'updateFail') {
							$('#wrapp_box1').fadeIn();
							setTimeout(function() {$('#wrapp_box1').fadeOut();}, 1500);
							$('#confirm_text').html("<span class='label label-danger'>Update bị lỗi!</span>");
						}
						if (response == 'notpost') {
							$('#wrapp_box1').fadeIn();
							setTimeout(function() {$('#wrapp_box1').fadeOut();}, 1500);
							$('#confirm_text').html("<span class='label label-danger'>Không tìm thấy bài viết này!</span>");
						}
						if (response == 'notid') {
							$('#wrapp_box1').fadeIn();
							setTimeout(function() {$('#wrapp_box1').fadeOut();}, 1500);
							$('#confirm_text').html("<span class='label label-danger'>Đã xảy ra lỗi xác thực bài viết!</span>");
						}
					}
				});//end ajax
			//} else return false;
		});

		$('#close').on('click', function() {
			$('#wrapp_box1').hide();
		});

</script>