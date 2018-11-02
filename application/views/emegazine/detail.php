<div id="about">
<?php 
	if (isset($postArr) && isset($webpageArr)) {
		if (!empty($postArr) && !empty($webpageArr)) {
		?>
			<h2><?php echo $postArr['tieu_de'] ?></h2>
			 	<?php echo $webpageArr['content'] ?>
				
			<a href="#" id="closebtn" class="close">Close Me</a> 
</div>


		<div id="mainpage">
			  <nav>
			    <h1><?php echo $postArr['tieu_de'] ?></h1>
			    <ul id="navigation">
			      <li><a href="#"><?php echo $postArr['created'] ?></a></li>
			      <li><a href="#about"><span class="glyphicon glyphicon-resize-horizontal"></span></a></li>
			    </ul>
			   
			  </nav>
			  <div id="content"> 
			    <img src="<?php echo base_url('public/EmegazineImage/block/'.$webpageArr['img']) ?>" class="img-responsive img-top">
			    <div id="dt-crt">
					<?php echo $postArr['created'] ?>
				</div>
			  </div>
			  
			</div>
	
		<?php 
		} else {
			?>
				<div class="jumbotron">
				  <h1>Opp! Rất tiếc không tìm thấy nội dung này</h1>
				  <p>...</p>
				  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url(); ?>" role="button">123nam</a></p>
				</div>
			<?php 
		}
	}

?>
<?php 
	if (isset($block)) {
		if (!empty($block)) {
			foreach ($block as $key=>$item) {
			?>
				<div id="image">
					<img src="<?php echo base_url('public/EmegazineImage/block/'.$item['img']) ?>" class="img-responsive">
				</div>

				<div id="contentblock">
					<?php echo $item['content'] ?>
				</div>
			<?php
			} 
		} else {
			?>
			<div class="jumbotron">
			  <h1>Opp! Rất tiếc không tìm thấy nội dung này</h1>
			  <p>...</p>
			  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url(); ?>" role="button">123nam</a></p>
			</div>
			<?php 
		}
	}
?>
