<div id="post">
	<div class="row" style="margin: 0; padding: 0">
	<?php 
		if (isset($toppost1) && !empty($toppost1)) {
			foreach ($toppost1 as $item1) {
			?>
				<div class="col-md-4 col-sm-4 col-xs-12">
				       <?php  
									if ($item1['typenews'] == 'photo') {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/photo/'.$item1['url'].'/'.$item1['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item1['hinh']) ?>" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											</a>
											
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/photo/'.$item1['url'].'/'.$item1['id']) ?>"><?php echo $item1['tieu_de']; ?></a></h3>
										        <p><?php echo $item1['created']; ?></p>
										        
										     </div>
										    
											</div><!--/thumbnail-->
										<?php
									} elseif ($item1['typenews'] == 'emegazine') {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/emagazine/'.$item1['url'].'/'.$item1['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/EmegazineImage/title/'.$item1['hinh']) ?>" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											</a>
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/emagazine/'.$item1['url'].'/'.$item1['id']) ?>"><?php echo $item1['tieu_de']; ?></a></h3>
										        <p><?php echo $item1['created']; ?></p>
										        
										     </div>
											</div><!--/thumbnail-->
										<?php 
									} else {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/'.$item1['url'].'/'.$item1['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											
											<?php if ($item1['icon'] == 'video') { ?>
												<span class="fa fa-video-camera" id="cameraIcon"></span>
											<?php } elseif ($item1['icon'] == 'photo') { ?>
												<span class="fa fa-picture-o" id="cameraIcon"></span>
											<?php } ?>				
											
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item1['hinh']) ?>" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">
											</a>
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/'.$item1['url'].'/'.$item1['id']) ?>"><?php echo $item1['tieu_de']; ?></a></h3>
										        <p><?php echo $item1['created']; ?></p>
										        
										     </div>
											</div><!--/thumbnail-->
										<?php 
									}
								?>
				      </div>
				
			<?php 
			}
		} else echo '<span class="label label-default">Not found</span>';
	?>

	</div> <!--/row1-->	


	<div class="row" style="margin: 0; padding: 0">
	 	<?php 
		if (isset($toppost2) && !empty($toppost2)) {
			foreach ($toppost2 as $item2) {
			?>
				<div class="col-nd-4 col-sm-4 col-xs-12">
				    
				       <?php  
									if ($item2['typenews'] == 'photo') {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/photo/'.$item2['url'].'/'.$item2['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">

																				
	

											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
											</a>
											
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/photo/'.$item2['url'].'/'.$item2['id']) ?>"><?php echo $item2['tieu_de']; ?></a></h3>
										        <p><?php echo $item2['created']; ?></p>
										        
										     </div>
										    
											</div><!--/thumbnail-->
										<?php
									} elseif ($item2['typenews'] == 'emegazine') {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/emagazine/'.$item2['url'].'/'.$item2['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/EmegazineImage/title/'.$item2['hinh']) ?>" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
											</a>
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/emagazine/'.$item2['url'].'/'.$item2['id']) ?>"><?php echo $item2['tieu_de']; ?></a></h3>
										        <p><?php echo $item2['created']; ?></p>
										        
										     </div>
											</div><!--/thumbnail-->
										<?php 
									} else {
										?>
											<div class="thumbnail">
											<a href="<?php echo site_url('privated/'.$item2['url'].'/'.$item2['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
											
											<?php if ($item2['icon'] == 'video') { ?>
												<span class="fa fa-video-camera" id="cameraIcon"></span>
											<?php } elseif ($item2['icon'] == 'photo') { ?>
												<span class="fa fa-picture-o" id="cameraIcon"></span>
											<?php } ?>

											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
											</a>
											<div class="caption">
										        <h3><a href="<?php echo site_url('privated/'.$item2['url'].'/'.$item2['id']) ?>"><?php echo $item2['tieu_de']; ?></a></h3>
										        <p><?php echo $item2['created']; ?></p>
										        
										     </div>
											</div><!--/thumbnail-->
										<?php 
									}
								?>
				      </div>
				
			<?php 
			}
		}
	?>
	</div><!--/row-->

</div><!--/post-->