<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click','.viewmore',function() {
			var id = $(this).attr('id');
			var category = $(this).attr('data-category');
				//alert(category);
				//alert(id);
				$.ajax({
				url: "<?php echo base_url('quan_tri/C_tin_tuc/ajax_chuyen_muc_tin') ?>",
				type: "POST",
				data: {ID: id, cate: category},
				beforeSend:function() {
				
					$('.tr_viewmore_gif'+id).show();
				},
				success: function(result) {
					$('.btn_viewmore').remove();
					$('.tr_viewmore_gif'+id).remove();
					$('.container_viewmore').append(result);
				}
			})
		})
	})
</script>


<script type="text/javascript">
	function view_more($id) 
	{

	}

</script>