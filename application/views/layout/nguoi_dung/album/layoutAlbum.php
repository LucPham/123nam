<!DOCTYPE html>
<html>
<head>
	<title><?php if (isset($title)) echo $title; ?></title>
	<?php $this->load->view('layout/nguoi_dung/album/head') ?>
</head>
<body>
	<!-- FACEBOOK LIKE-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1316378115089254";
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

	<div id="container">
		<!--[if !IE]><!-->
			<?php $this->load->view('layout/nguoi_dung/album/menu') ?>
		<!--<![endif]-->

		<!--[if IE]>
				<?php $this->load->view('layout/nguoi_dung/album/ie/ie-menu') ?>
		<![endif]-->

		<div id="content">
		<div id="sideLeft">
			<?php $this->load->view('layout/nguoi_dung/album/sideLeft') ?>
		</div> <!-- end #SIDELEFT -->
				<?php  
					if (isset($path))
						$this->load->view($path);
				?>
		<div id="sideRight">
			<?php $this->load->view('layout/nguoi_dung/album/sideLeft') ?>
		</div> <!-- end #SIDERIGHT -->		
		</div><!-- end #CONTENT-->
		<div id="footer">
			<?php $this->load->view('layout/nguoi_dung/album/footer') ?>
			<?php $this->load->view('layout/ajax/menu-ie.php') ?>
		</div>
	</div> <!-- # end CONTAINER -->
</body>
</html>