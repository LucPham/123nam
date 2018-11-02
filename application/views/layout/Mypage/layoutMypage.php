<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/Mypage/head') ?>
</head>
<body>
	<div class="banner">
		Pham Van Luc

	</div>
	<div class="container-web">
		
		
		
		
		<div class="content">
			<?php $this->load->view('layout/Mypage/menu') ?>
			<h1>Pham Luc</h1>
			<div class="col-md-4">Col-md-4 <p>Img</p></div>
			<div class="col-md-8">Col-md-8<p>Info</p></div>

		</div> <!--/content-->

			<div class="side-left">
				<?php $this->load->view('layout/Mypage/side_left') ?>
			
			</div>

			
			<div class="side-right">
			<?php $this->load->view('layout/Mypage/side_right') ?>
			</div>

			


		</div><!--/container-->

	<?php $this->load->view('layout/Mypage/footer') ?>
	<?php $this->load->view('layout/V_dang_nhap') ?>
</body>
</html>