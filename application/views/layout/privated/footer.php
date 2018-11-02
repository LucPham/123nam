<script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.12.3.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.icon').on('click', function(e) {
				e.preventDefault();
				//alert($('#nav').attr('class'));
				if ($('#nav').attr('class') == undefined || $('#nav').attr('class') == '') {
					$('#nav').attr('class','responsive');
				} else $('#nav').removeClass('responsive');
			})
		})
	</script>

<script src="https://use.fontawesome.com/6990b58142.js"></script>