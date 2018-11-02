<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/ds_album/head') ?>
</head>
<body>
	<div class="banner">
		<div class="wrapp_text_header">
			<a href="<?php echo base_url() ?>" title="<?php echo base_url() ?>" alt="<?php echo base_url() ?>">CÔNG NGHỆ WEB & ỨNG DỤNG - THẦY TRẦN ANH DŨNG</a>
		</div>

	</div>
	<div class="container-web">
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/ds_album/menu') ?>
				</div>
		</div>
		<div class="content">
			<?php 
				if (isset($path) && !empty($path))
				{
					$this->load->view($path);
				}
			?>


			<?php $this->load->view('layout/ds_album/tin_khac') ?>
			
			<div class="side-left">
				<?php $this->load->view('layout/nguoi_dung/index/side_left') ?>
			
			</div>
			<div class="side-right">
				<?php $this->load->view('layout/nguoi_dung/index/side_right') ?>
			</div>	
		</div> <!--/content-->
		<?php $this->load->view('layout/ds_album/footer') ?>
		</div><!--/container-->
	<script type="text/javascript" src="<?php echo base_url('public/js/banner_scroll_fixedtop.js') ?>"></script>	
	<?php $this->load->view('layout/V_dang_nhap') ?>
</body>
</html>