<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nhat_ky/head') ?>
</head>
<body>
	<div class="banner">
		<div class="wrapp_text_header">
			NKNX
		</div>

	</div>
	<div class="container-web">
		
		
		
		
		<div class="content">
		<div class="row" style="margin: 0; padding: 0">
			<?php $this->load->view('layout/nhat_ky/menu') ?>

		
	
			<?php 
				if (isset($path) && !empty($path))
				{
					$this->load->view($path);
				}
			?>


			<?php $this->load->view('layout/nhat_ky/tin_khac') ?>
		</div> <!-- end ROW-->

			<?php $this->load->view('layout/nhat_ky/trang_nhat_ngang') ?>

	
			<?php $this->load->view('layout/nhat_ky/luu_but') ?>
		</div> <!--/content-->

			<div class="side-left">
				<?php $this->load->view('layout/nhat_ky/side_left') ?>
			
			</div>

			
			<div class="side-right">
			<?php $this->load->view('layout/nhat_ky/side_right') ?>
			</div>

			

			<?php $this->load->view('layout/nhat_ky/footer') ?>
		</div><!--/container-->

	
	<?php $this->load->view('layout/chuyen_muc_tin/load_more_data_ajax') ?>
	<?php $this->load->view('layout/V_dang_nhap') ?>
</body>
</html>