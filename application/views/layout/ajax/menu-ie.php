<script type="text/javascript">
	$(document).ready(function() {
		$('#link-hover').hover(function() {
			$('#event-hover').show();
		}, function() {
			$('#event-hover').hide();
		});

		$('.preventClick').on('click', function(e) {
			e.preventDefault();
		})
	});

</script>