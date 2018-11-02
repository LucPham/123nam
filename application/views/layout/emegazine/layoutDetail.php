<!DOCTYPE html>
<html>
<?php $this->load->view('layout/emegazine/head') ?>
<body>
<!-- GOOGLE SHARE-->\
	<!-- Place this tag after the last share tag. -->
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
<!-- /GOOGLE SHARE-->

<!-- FACBOOKE SHARE-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1316378115089254";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!-- /FACBOOKE SHARE-->

<!-- FACEBOOK LIKE-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1316378115089254";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!-- /FACEBOOK LIKE-->

	<div id="container">
		<div id="content">
			<?php $this->load->view('layout/emegazine/menu') ?>
			<?php $this->load->view('layout/emegazine/menu_social_mobile') ?>
			<?php 
				if (isset($path)) {
					$this->load->view($path);
				}
			?>			
			<?php $this->load->view('layout/emegazine/footer') ?>
		</div> <!--/content-->
	</div> <!--/container-->
</body>
</html>