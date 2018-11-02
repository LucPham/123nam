<style type="text/css">
	.hinh_anh_img {
		max-height: 110px;
	}
	.hinh_anh_title a {
		color: #5A5A5A
	}
	.hinh_anh_title a:hover {
		color: #271B97
	}
</style>
<div class="col-md-12 col-sm-12 col-xs-12" style="margin: 30px 0; padding: 0">
				<div class="block_title_related_post">
						GẦN ĐÂY
				</div>
				
				<div class="object">
				</div>	
</div>
					
				<?php
					if (isset($RelatedPost) && !empty($RelatedPost))
					{
						$url = array(
		 					'1' =>array(
		 						'photo'=>base_url('privated/photo/'),
		 						'emegazine'=>base_url('privated/emagazine/'),
		 						'detail'=>base_url('privated/')
		 					),
		 					'0' =>array(
		 						'photo'=>base_url('tin-tuc/photo/'),
		 						'emegazine'=>base_url('emagazine/'),
		 						'detail'=>base_url('tin-tuc/')
		 					)
		 				);

						foreach ($RelatedPost as $relate) {
							?>
							<div class="col-md-3 col-sm-3 col-xs-6" id="ie-lastest-bottom-wrap">
							<div class="hinh_anh_img">
							
				 				
				 				<a href="<?php echo $url[$relate['privated']][$relate['typenews']].'/'.$relate['url'].'/'.$relate['id']?>" alt="<?php echo $relate['tieu_de'] ?>" title="<?php echo $relate['tieu_de'] ?>">
				 					<?php if ($relate['typenews'] == 'emegazine') ?> { ?>
				 						<img src="<?php echo base_url('public/EmegazineImage/title/'.$relate['hinh']) ?>">
				 					<?php } else { ?>
				 						<img src="<?php echo base_url('public/hinh_tieu_de/'.$relate['hinh']) ?>">
				 					<?php } ?>
				 					
				 				</a>
				 				
									
							</div>

							<div class="hinh_anh_title">
								
				 				<a href="<?php echo $url[$relate['privated']][$relate['typenews']].'/'.$relate['url'].'/'.$relate['id']?>" alt="<?php echo $relate['tieu_de'] ?>" title="<?php echo $relate['tieu_de'] ?>">
				 					<?php echo $relate['tieu_de'] ?>
				 				</a>
				 				
							</div>

							</div>

							<?php
						}
					}
				?>

						
						


						