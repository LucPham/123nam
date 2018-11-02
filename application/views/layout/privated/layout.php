<!DOCTYPE html>
<html>
<!--head-->
	<?php $this->load->view('layout/privated/head') ?>
<!--/head-->
<body>
	<div id="container">
		<div id="head">
			<!--logo-->
			<?php $this->load->view('layout/privated/logo') ?>
			<!--/logo-->
			<!--menu-->
			<?php $this->load->view('layout/privated/menu') ?>
			<!--/menu-->
		</div> <!--/head-->	

		<div id="content">
			
			<?php 
				if (isset($path)) {
					$this->load->view($path);
				}

			?>
			
		</div> <!--content-->
	</div> <!--/container-->
	<!--footer-->
	<?php $this->load->view('layout/privated/footer') ?>
	<!--/footer-->
	
	<?php 
		if (isset($script)) {
			foreach ($script as $link) {
				$this->load->view($link);
			}
		}
	?>

</body>
</html>