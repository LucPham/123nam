<script type="text/javascript">
	
$(document).ready(function() {

	$(document).on('click','#showmorebtn', function(e) {
		var _page = $(this).attr('href');
		var _table = "<?php echo $this->uri->segment(2) ?>";

		if (_page) {
			$.ajax({
				url: "<?php echo base_url('privated/C_list_load/menu_tags_list_ajax') ?>",
				type: 'post',
				data: {page: _page, tablename: _table},
				beforeSend: function() {
					$('#loading-'+_page).show();
					$('#wrapp-button-'+_page+' button').hide();
				},
				success: function(html) {
					//console.log(html);
					$('#loading-'+_page).hide();
					$('#table-wrapp').append(html);
					$('#wrapp-button-'+_page).remove();
				}
			});
		}
		console.log("<?php echo $this->uri->segment(2) ?>");
	}); /*---document click---*/

})


</script>