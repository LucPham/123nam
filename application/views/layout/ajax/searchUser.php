<script type="text/javascript">
	//mode select
	$(document).ready(function() {


		//mode change
		$('#mode').on('change', function(e) {
			var mode = $(this).val();
			if (mode == 'privated') {
				$('#box_tags').fadeIn();	
			} else $('#box_tags').fadeOut();
		}); // end change

	// end mode select
		$('#query').keyup(function(e) {
			var query = $(this).val();
			$.ajax({
				url: "<?php echo base_url('emegazine/C_emegazine/ajaxSearch') ?>",
				type: "post",
				data: {q: query},
				beforeSend:function() {

				},
				success: function(result) {
					$('#searchpreview').html(result);
				}
			}); // end ajax
		}); // end keyup

		var userid_arr = new Array;
			$(document).on('click','.resultLink', function(e) {
				e.preventDefault();
				var userid = $(this).attr('uqr');
				
				if (userid_arr.indexOf(userid) == '-1') {
					userid_arr.push(userid);
					$.ajax({
					url: "<?php echo base_url('emegazine/C_emegazine/loadUsertag') ?>",
					type: "post",
					data: {id: userid},
					beforeSend: function() {

					},
					success: function(result) {
						$('#tags').append(result);
						//alert(userid_arr);
						$('#userArr').val(userid_arr);
					}
				})
			}
				
			}); // end  .resultLink anchor click

			$(document).on('click','.delete', function(e) {
				e.preventDefault();
				var userid = $(this).attr('uid');
				var index = userid_arr.indexOf(userid);
				if (index > -1) {
					userid_arr.splice(index,1);
					$('#userArr').val(userid_arr);
					$('#wrapp_user_tag'+userid).remove();
				}
				//alert(userid_arr);
			}); // end .delete click



	})// end document
	
</script>