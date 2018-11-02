<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nguoi_dung/head') ?>
</head>
<body>
<div id="fb-root"></div>



<div class="banner"></div>
	<div class="container-web">
		
		<div class="side-left">
			<CAPTION><h1>QUANG CAO</h1></CAPTION>

		</div>

		<div class="content">
		<?php $this->load->view('layout/nguoi_dung/menu') ?>
		
		

		

		<div class="side-right">
			<CAPTION><h1>QUANG CAO</h1></CAPTION>
		</div>
	</div>




	<?php $this->load->view('layout/nguoi_dung/footer') ?>
	<?php $this->load->view('layout/V_dang_nhap') ?>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=550616105142536";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>