<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/su_kien/head') ?>
</head>
<body>
	<div class="banner">
		

	</div>
	<div class="container-web">

		<!--[if !IE]><!-->
			<div class="menu-line">
					<div class="menu">
						<?php $this->load->view('layout/su_kien/menu') ?>
					</div>
			</div>
		<!--<![endif]-->

		<!--[if IE]>
			<?php $this->load->view('layout/su_kien/ie/ie-menu') ?>
		<![endif]-->
		<div class="content">
		<div class="child_nav">
					<?php $this->load->view('layout/su_kien/child_nav') ?>
		</div>
		<div class="row">
		</div>	
		
			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}
			?>
			<!--noi dung-@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
			<div class="side-left">
				<?php $this->load->view('layout/su_kien/side_left') ?>
			
			</div>
			<div class="side-right">
					<?php $this->load->view('layout/su_kien/side_right') ?>
			</div>

			
		</div> <!--/content-->
			<?php $this->load->view('layout/su_kien/footer') ?>
			<?php $this->load->view('layout/V_dang_nhap') ?>
			
			<?php $this->load->view('layout/V_dang_nhap') ?>
			<?php $this->load->view('layout/ajax/event') ?>
			<?php $this->load->view('layout/ajax/deletePopup') ?>
			<?php $this->load->view('layout/ajax/menu-ie.php') ?>
			
		</div><!--/container-->
</body>
</html>