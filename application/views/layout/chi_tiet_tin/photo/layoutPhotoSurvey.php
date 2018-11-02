<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/chi_tiet_tin/head_survey') ?>
</head>
<body>

	<!-- FACEBOOK LIKE BUTTON-->
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=175382522799202";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- FACEBOOK COMMENT -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1316378115089254";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div class="banner">
		
	</div>
	<div class="container-web" style="padding: 0; margin: 0">
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/chi_tiet_tin/photo/menu') ?>
				</div>
		</div>	
		<div class="content">
			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}
			?>
			<!-- noi dung -->

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
			<?php $this->load->view('layout/chi_tiet_tin/photo/footer') ?>
			<?php $this->load->view('layout/V_dang_nhap') ?>
			<?php $this->load->view('tin_tuc/V_verify_survey') ?>
			<?php $this->load->view('tin_tuc/V_show_result') ?>
			<?php $this->load->view('layout/ajax/insertSurveyAnswer') ?>
			<?php $this->load->view('layout/ajax/menu-ie.php') ?>
		</div><!--/container-->
</body>
</html>