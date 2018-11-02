<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/user/head') ?>
</head>
<body>
	<div class="banner">
	

	</div>
	<div class="container-web">
		<!--[if !IE]><!-->
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/user/menu') ?>
				</div>
		</div>
		<!--<![endif]-->
		<!--[if IE]>
			<?php $this->load->view('layout/user/ie/ie-menu') ?>
		<![endif]-->
		<div class="content">
			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}
			?>
		
		</div> <!--/content-->
			<?php $this->load->view('layout/nguoi_dung/footer') ?>
			<?php $this->load->view('layout/V_dang_nhap') ?>
		</div><!--/container-->
</body>
</html>