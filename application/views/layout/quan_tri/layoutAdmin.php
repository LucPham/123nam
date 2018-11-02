<!DOCTYPE html>
<html>
	<?php $this->load->view('layout/quan_tri/head') ?>
<body>
<div class="banner">
	ADM SYSTEMS
</div>

<!-- Menu -->
	<?php $this->load->view('layout/quan_tri/menu') ?>
<!-- End Menu -->


<div class="container-fluid">
	<?php 
		if (isset($childmenu)) {
			$this->load->view('layout/quan_tri/'.$childmenu);
		}
	?>

	<!-- Content -->

	<div class="container-fluid">
		<?php  
			if(isset($path))
			{
				$this->load->view($path);
			}
		?>
	</div>	
	<!-- End Content -->

	<!-- Footer -->
		<?php $this->load->view('layout/quan_tri/footer') ?>
	<!-- End Footer -->
		<?php $this->load->view('layout/V_dang_nhap') ?>
		<?php $this->load->view('layout/ajax/banner_update') ?>
		<?php $this->load->view('layout/ajax/survey') ?>

		<?php
			//if (isset($path) && $path == 'quan_tri/V_chi_tiet_tin_cho_phe_duyet_photo') 
			$this->load->view('layout/ajax/phe_duyet') 
		?>
		<?php $this->load->view('layout/ajax/EmegaEditor') ?>
		<?php 
			if (isset($script))
				$this->load->view($script);

			if (isset($scriptArr)) {
				foreach ($scriptArr as $path) {
					$this->load->view($path);
				}
			}
		?>
</div>
<!-- End Container -->

</body>
</html>