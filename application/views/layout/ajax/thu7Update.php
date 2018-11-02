<script type="text/javascript">

	

		$(document).on('change', '.file-ip', function(e) {
			var target = $(this).attr('target');
			if (target) {
				$('.'+target).show();
			}
		});	

		$(document).on('click', '.return', function(e) {
			var target = $(this).attr('target');
			var src = $(this).attr('src');
			//alert(src);
			$('#'+target).attr('src', src);
			$('#'+target+'-ip').remove();
			$('#'+target).after('<input type="file" class="file-ip" name="cover-img-ip" id="'+target+'-ip" src="'+target+'" target="'+target+'">');
			$(this).hide();
		});


</script>