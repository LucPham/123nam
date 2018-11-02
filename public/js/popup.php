<script type="text/javascript">
$(document).ready(function() {     
	$('[data-popup-open]').on('click',function(e) {         
		var target_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="'+target_popup_class+'"]').fadeIn(50);
		e.preventDefault();

	});

	$('[data-popup-close]').on('click', function(e) {
		var target_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="'+target_popup_class+'"]').fadeOut(50);
		e.preventDefault();

	});


	//Xoa bai viet
	var id = 0;
	$('[data-popup-open]').on('click', function(e) {
		id = $(this).attr('id');
	});

	$('a#co').click(function() {
		
	})
})
</script>