<!DOCTYPE html>
<html>
	<?php $this->load->view('layout/privated/timeline/head'); ?>
<body>
	
	<div class="container-fluid">
			<?php $this->load->view('layout/privated/timeline/menu'); ?>
	
			<?php $this->load->view('layout/privated/timeline/cover'); ?>

		<div class="container">
			

			<?php $this->load->view('layout/privated/timeline/votes'); ?>

			<section id="comment">
				<div class="comment">Comments</div>
			</section>

			<?php $this->load->view('layout/privated/timeline/thumnail'); ?>	

			<?php $this->load->view('layout/privated/timeline/relativePost'); ?>
		</div>
		
	
	<?php $this->load->view('layout/privated/timeline/footer') ?>
	</div> <!--container-fluid-->

</body>
</html>