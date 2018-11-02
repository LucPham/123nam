
	<?php
		if (isset($arr_chi_tiet) && !empty($arr_chi_tiet))
		{
	?> 
		<div class="row" style="margin: 20px 0 0 0; padding: 0">
			<div class="col-md-2"></div>
			<div class="col-md-8 box_tieu_de" style="margin: auto;">
				
				<p class="title">

				<?php echo $arr_chi_tiet['tieu_de'];?>
					
				</p>

				<p class="date"><?php echo $arr_chi_tiet['ngay_dang'] ?></p>
			</div>
		</div>
<!--end TIEU DE-->
		<div class="row" style="margin: 20px 0 0 0; padding: 0">
			<div class="col-md-2"></div>
			<div class="col-md-6 box_tom_tat" style="margin: auto;">	
				<p class="tom_tat">

				<?php echo $arr_chi_tiet['tom_tat'];?>
					
				</p>

			</div>
		</div>
<!-- end TOM TAT -->
		<div class="row" style="margin: 20px 0 0 0; padding: 0">
			<div class="col-md-2"></div>
			<div class="col-md-6 box_relatedpost" style="margin: auto;">	
				<p class="relatedpost">
					<?php 
						if (isset($RelatedPost) && !empty($RelatedPost))
						{
							foreach ($RelatedPost as $item)
							{
								?>
									<ul>
										<li><a href="<?php echo site_url('nknx/luu-but/'.$item['url'].'/'.$item['id']) ?>"><?php echo $item['tieu_de'] ?></a></li>
									</ul>
								<?php 
							}
						}
					?>
				</p>

			</div>
		</div>

<!-- end Related POST-->

		<div class="row" style="margin: 20px 0 0 0; padding: 0">
			<div class="col-md-3 hidden-xs">
			</div>
			<div class="col-md-6">
				<div class="noi_dung_nhat_ky">
					<?php echo $arr_chi_tiet['noi_dung'] ?>
				</div>	
			</div>
			<div class="col-md-3 hidden-xs">
				
			</div>
		</div>
	<?php 
		}
	?>