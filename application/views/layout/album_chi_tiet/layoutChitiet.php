<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/chi_tiet_tin/head') ?>
</head>
<body>
	<div class="banner">
		<div class="wrapp_text_header">
			123 Năm
		</div>
	</div>
	<div class="container-web" style="padding: 0; margin: 0">
		
			
		
		
		<div class="content">
			<?php $this->load->view('layout/chi_tiet_tin/menu') ?>


			

			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}


			?>

			<!--noi dung ---------------------------@@@@@@@@@@@@@@@@@@@@@@@@@@@------------>

		<?php $this->load->view('tin_tuc/V_side_chi_tiet') ?>
			
			<div class="row" style="padding: 0; margin: 0">
				<?php $this->load->view('tin_tuc/V_co_the_ban_quan_tam') ?>	
			</div><!--/CO THE BAN QUAN TAM-->	
			


				<div class="side-left-detail">
				<?php $this->load->view('layout/chi_tiet_tin/side_left') ?>
			
			</div>
			<div class="side-right-detail">
					<?php $this->load->view('layout/chi_tiet_tin/side_right') ?>
			</div>
			</div> <!--/content-->


			




			<div class="container_fullscreen" style="display: none">
				<div class="main-data">
					<div class="close_screen"><span title="Close">X</span></div>
					<div class="image"></div>
				</div>
			</div> <!--end fullscreen dialog-->
		</div><!--/container-->

	<?php $this->load->view('layout/chi_tiet_tin/footer') ?>
	<?php $this->load->view('layout/V_dang_nhap') ?>
	
</body>
</html>