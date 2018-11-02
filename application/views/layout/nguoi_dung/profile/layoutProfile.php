<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nguoi_dung/profile/head') ?>
</head>
<body style="">
	<div class="banner">

	</div>
	<div class="container-web" style="padding: 0; margin: 0">
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/nguoi_dung/profile/menu') ?>
				</div>
		</div>	
		<div class="content">
			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}
			?>
			<!--noi dung-->
		
			<?php $this->load->view('layout/nguoi_dung/profile/footer') ?>
		</div> <!--/content-->
			<?php $this->load->view('layout/V_dang_nhap') ?>
			<?php $this->load->view('layout/ajax/profile') ?>
		</div><!--/container-->
</body>
</html>