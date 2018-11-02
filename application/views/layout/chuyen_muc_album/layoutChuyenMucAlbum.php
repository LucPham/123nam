<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nguoi_dung/head') ?>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91695523-1', 'auto');
  ga('send', 'pageview');

</script>
	<div class="banner">
	</div>
	<div class="container-web">
	<!--[if !IE]><!-->
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/chuyen_muc_album/menu') ?>
				</div>
		</div>
	<!--<![endif]-->
	
	<!--[if IE]>
		<?php $this->load->view('layout/chuyen_muc_album/ie/ie-menu') ?>
	<![endif]-->
		<div class="content">
			<?php 
				if (isset($path) && !empty($path))
				{
					$this->load->view($path);
				}
			?>
			<?php $this->load->view('layout/chuyen_muc_album/Danh_sach_tin_khac') ?>

		</div> <!--/content-->

			<div class="side-left">
				<?php $this->load->view('layout/chuyen_muc_album/side_left') ?>
			
			</div>
			<div class="side-right">
			<?php $this->load->view('layout/chuyen_muc_album/side_right') ?>
			</div>
			
		</div><!--/container-->
	<?php $this->load->view('layout/chuyen_muc_album/footer') ?>
	<?php $this->load->view('layout/chuyen_muc_album/load_more_ajax') ?>
	<?php $this->load->view('layout/V_dang_nhap') ?>
	<?php $this->load->view('layout/ajax/menu-ie.php') ?>
</body>
</html>