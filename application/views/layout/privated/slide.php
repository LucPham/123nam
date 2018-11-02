
	<?php if (isset($slide) && !empty($slide)) { ?>
				<div id="slide">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				  <?php foreach ($slide as $key=>$item) { ?>
				    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>" <?php if ($key == 0) echo 'class="active"' ?>></li>
				  <?php } ?>
				  </ol>
				
			 	  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

				<?php   foreach ($slide as $key=>$item) { ?>

				    <div class="item <?php if ($key == 0) echo 'active'; ?>">
				      <img src="<?php echo base_url('public/privated/slide_img/'.$item['image']) ?>" alt="<?php echo $item['caption'] ?>" class="img-responsive">
				      <div class="carousel-caption">
				        <h2><a href="#"><?php echo $item['caption'] ?></a></h2>
				      </div>
				    </div>

				<?php } ?>

				  </div><!-- /Wrapper for slides -->

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
			</div> <!--/slide-->
	<?php } ?>
