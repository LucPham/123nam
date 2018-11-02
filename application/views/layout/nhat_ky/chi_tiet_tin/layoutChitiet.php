<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nhat_ky/chi_tiet_tin/head') ?>
</head>
<body>
	<div class="banner">
		<div class="wrapp_text_header">
		NKNX
		</div>

	</div>
	<div class="container">
			<?php $this->load->view('layout/nhat_ky/chi_tiet_tin/menu') ?>

			<?php
				if (isset($path) && !empty($path))
				{
					$this->load->view($path);
				}
			?>
		<?php $this->load->view('layout/nhat_ky/chi_tiet_tin/footer') ?> 
	</div><!--/container-->
</body>
</html>