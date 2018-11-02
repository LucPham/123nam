<!DOCTYPE html>
<html>
	<?php $this->load->view('layout/quan_tri/head') ?>
<body>
<div class="banner"></div>

<!-- Menu -->
		<?php $this->load->view('layout/quan_tri/menu') ?>
<!-- End Menu -->

<div class="container-fluid">
	

	<!-- Content -->

	<div class="content">
		<?php  
			if(isset($path))
			{
				$this->load->view($path);
			}
		?>
	</div>	
	<!-- End Content -->

	<!-- Footer -->
		<?php $this->load->view('layout/quan_tri/footeredit') ?>
	<!-- End Footer -->
	<?php $this->load->view('layout/V_dang_nhap') ?>
	<?php $this->load->view('layout/ajax/surveyEdit') ?>
	<?php 
		if (isset($script))
			$this->load->view($script);
	?>
</div>
<!-- End Container -->

</body>
</html>