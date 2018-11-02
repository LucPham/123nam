<!DOCTYPE html>
<html>
<head>

<?php $this->load->view('layout/nguoi_dung/head') ?>
</head>
<body>
	<div class="banner">
	</div>
	<div class="container-web">
	<!--[if !IE]><!-->
		<div class="menu-line">
				<div class="menu">
						<?php $this->load->view('layout/nguoi_dung/menu') ?>
				</div>
		</div>
	<!--<![endif]-->

	<!--[if IE]>
		<?php $this->load->view('layout/nguoi_dung/ie/ie-menu') ?>
		
	<![endif]-->
		<div class="content">
			<?php $this->load->view('layout/nguoi_dung/index/trang_nhat') ?>
			<!--/trang nhat-->
			
			<div class="row" style="margin: 0; padding: 0">

				<?php $this->load->view('layout/nguoi_dung/index/tin_tuc') ?>


				<?php $this->load->view('layout/nguoi_dung/index/su_kien') ?>
			
			</div> <!-- end ROW-->
			<?php $this->load->view('layout/nguoi_dung/index/V_album') ?> <!-- end /album-->
			
			
			<div class="side-left">
				<?php $this->load->view('layout/nguoi_dung/index/side_left') ?>
			
			</div>
			<div class="side-right">
				<?php $this->load->view('layout/nguoi_dung/index/side_right') ?>
			</div>	
			
				
		</div> <!--/content-->
		<?php $this->load->view('layout/nguoi_dung/footer') ?>
		</div><!--/container-->


	<?php $this->load->view('layout/V_dang_nhap') ?>
	<?php $this->load->view('layout/ajax/menu-ie.php') ?>

</body>
</html>