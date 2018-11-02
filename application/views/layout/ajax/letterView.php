<script type="text/javascript">
	
	$(document).ready(function() {
		$(document).on('click','.modalBtn', function() {
			var id = $(this).attr('id');

			var message = $('#message'+id).val();
			var title = $('#date'+id).val();
			var icon = $('#emojiIcon'+id).val();
			var name = $('#emojiName'+id).val();
			var emoji = '<span class="'+icon+'"> '+name+'</span>';

			$('#myModalLabel').html(title);	
			$('.modal-header #icon').html(emoji);
			$('#btnEmoji').html(emoji);
			$('#textMessage').html(message);

			//alert(message);
		});

		$(document).on('click','#show-more-letter', function(e) {
			e.preventDefault();

			var _page = $(this).attr('href');
			//alert(_page);
			$.ajax({
				url: "<?php echo base_url('privated/C_letter/showMoreAjax') ?>",
				type: 'post',
				data: {pageID: _page},
				beforeSend:function() {
					$('#loadingGif').show();
					$('#show-more-letter').hide();
				},
				success:function(respone) {
					//console.log(respone);

						$('#loadingGif').hide();
						$('.btn'+_page).remove();
						$('#letter-wrapp').append(respone);
						$('#show-more-letter').show();
					
				}
			}); //ajax

		});

		// Delete

		$(document).on('click', '#fix-delete-wrapp', function() {
			var idarray = new Array();

			$(':checkbox:checked').not('#checkAllBtn').each(function(i) {
				idarray[i] = $(this).val();
			});

			if (idarray[0] != undefined) {
				
				$.ajax({
					url: "<?php echo base_url('privated/C_letter/deleteLetterAjax') ?>",
					type: 'post',
					data: {id: idarray},
					beforeSend: function() {
						$('#fix-infodelete-wrapp').show();
					},
					success: function(respone) {
						console.log(respone);
						if (respone == 1) {
							$('#fix-infodelete-wrapp').hide();
							for (var i =0; i < idarray.length; i ++) {
								$('.letter-box'+idarray[i]).remove();
							}
						} else {$('#fix-infodelete-wrapp span').html('Lỗi! xóa thư không thành công');setTimeout(function(){$('#fix-infodelete-wrapp').fadeOut()},3000)}
					}
				})


			} else console.log('Null array');
			
		});




		$(document).on('change', '#checkAllBtn', function() {
			
			if ($(this).is(':checked')) {
				var count = 0;
				$('input:checkbox').not(this).prop('checked',true);

				$(':checkbox:checked').each(function(i) { 
					count = i;
				});
				$('#fix-wrapp').fadeIn();
				$('#fix-delete-wrapp').fadeIn();
				$('#fix-wrapp span').html(count);	

			} else {$('input:checkbox').not(this).prop('checked',false); $('#fix-wrapp').fadeOut(); $('#fix-delete-wrapp').fadeOut()};
			
		});

		$(document).on('click', '.delete', function() {
			$('#fix-wrapp').fadeIn();
			$('#fix-delete-wrapp').fadeIn();
			var j = null;
			$(':checkbox:checked').not('#checkAllBtn').each(function(i) { 
				j = i+1;
				$('#fix-wrapp span').html(j);	
				
			});
			if (j == null) {
				$('#fix-wrapp').fadeOut();
				$('#fix-delete-wrapp').fadeOut();
				$('#checkAllBtn').prop('checked',false);
			}

		});

	}) //document
</script>