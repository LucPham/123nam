<script type="text/javascript">
	var id;
	$(document).on('click', '.deletePopup', function(e) {
		e.preventDefault();
		$('.over').fadeIn();
		id = $(this).attr('evt-id');
		
	});
	$('.answerYes').on('click', function() {
		if (id)
		{
			$.ajax({
				url : "<?php echo base_url('su_kien/C_su_kien/deleteAjaxEvtToday') ?>",
				type : "POST",
				data : {evtId: id},
				beforeSend: function(){
					$('.over').fadeOut();
					$('.loadingGif'+id).show();
					$('.wrapp-item'+id).css({"color":"#C1BFBF", "border":"solid 1px #C1BFBF", "box-shadow":"0 0"});
					$('.evtTitle'+id).css("color","#C1BFBF");
					$('.dropdow'+id).hide();
				},
				success: function(response) {
					if (response == 'ok')
					{
						$('.wrapp-item'+id).remove();
					} else {
						$('.loadingGif'+id).html(response).css("color","red");
						$('.dropdow'+id).show();
					}
				}
			});
		}
	});

	//POPUP
	$('.closeBtn span').on('click', function() {
		$('.over').fadeOut();
	});
	$('.answerNo').on('click', function() {
		$('.over').fadeOut();
	});

</script>