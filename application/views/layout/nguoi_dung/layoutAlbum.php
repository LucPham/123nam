<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/nguoi_dung/album/head') ?>
</head>
<body style="background-color: #D4D3D3">
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
	

	<div class="containerAlbum">
		
		<?php $this->load->view('layout/nguoi_dung/album/menu') ?>
		<div class="content">
		<div class="sideLeft">
			<?php $this->load->view('layout/nguoi_dung/album/sideLeft') ?>
		</div>
			<div class="row rowMain">
				<div class="col-md-12">
					<?php 
						if (isset($path))
						{
							$this->load->view($path);
						}
					?>
				</div>
			</div> <!-- end /row-->

		<div class="sideRight">
			<?php $this->load->view('layout/nguoi_dung/album/sideRight') ?>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="wrappLastedTitle">
					<div class="albumLastedTitle">
						<span>GẦN ĐÂY</span>
					</div>
				</div>
			</div>

			<div class="col-md-12" style="margin-top: 20px;">
				<?php $this->load->view('layout/nguoi_dung/album/albumLasted') ?>
			</div>
		</div>
		<div class="footerAlbum">
			<?php //$this->load->view('layout/nguoi_dung/album/footer') ?>
		</div>
		</div> <!-- end /content-->
		
	</div><!--/containerAlbum-->
	
</body>
</html>
