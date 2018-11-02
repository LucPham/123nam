<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/chi_tiet_tin/head') ?>
</head>
<body>

<!-- FACEBOOK LIKE-->
<div id="fb-root"></div>
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
	<div class="container-web" style="padding: 0; margin: 0">

		<!--[if !IE]><!-->
		<div class="menu-line">
				<div class="menu">
					<?php $this->load->view('layout/chi_tiet_tin/menu') ?>
				</div>
		</div>
		<!--<![endif]-->

		<!--[if IE]>
				<?php $this->load->view('layout/chi_tiet_tin/ie/ie-menu') ?>
		<![endif]-->
		
		<div class="content">
			<?php
					if (isset($path))
					{
						$this->load->view($path);
					}
			?>
			<!--noi dung-->
			<div id="ie-latest-right">
				<?php $this->load->view('tin_tuc/V_side_chi_tiet') ?>
			</div>
			<div class="row" style="padding: 0; margin: 0" id="ie-latest-bottom">
				<?php $this->load->view('tin_tuc/V_co_the_ban_quan_tam') ?>	
			</div><!--/CO THE BAN QUAN TAM-->	
				<div class="side-left-detail">
				<?php $this->load->view('layout/chi_tiet_tin/side_left') ?>
			
			</div>
			<div class="side-right-detail">
					<?php $this->load->view('layout/chi_tiet_tin/side_right') ?>
			</div>
			
			</div> <!--/content-->
			<?php $this->load->view('layout/chi_tiet_tin/footer') ?>
			<?php $this->load->view('layout/V_dang_nhap') ?>
			<?php $this->load->view('layout/ajax/menu-ie.php') ?>
		</div><!--/container-->
</body>
</html>