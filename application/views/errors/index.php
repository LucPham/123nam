<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('errors/layout/head') ?>
</head>
<body>
	<div class="banner">
	</div>
	<div class="container-web">

	<!--[if !IE]><!-->
		<div class="menu-line">
			<div class="menu">
				<?php $this->load->view('errors/layout/menu') ?>
			</div>
		</div>
	<!--<![endif]-->
	<!--[if IE]>
		<?php $this->load->view('errors/layout/ie/ie-menu') ?>
	<![endif]-->	
		
		
		<div class="content">
			

			<?php $this->load->view('errors/layout/main')  ?>
			
			
		</div> <!--/content-->
			<?php $this->load->view('errors/layout/footer') ?>
			<div class="side-left">
				<?php $this->load->view('errors/layout/side_left') ?>
			
			</div>

			
			<div class="side-right">
			<?php $this->load->view('errors/layout/side_right') ?>
			</div>

			
			
			
		</div><!--/container-->

	
	<?php $this->load->view('layout/V_dang_nhap') ?>
</body>
</html>