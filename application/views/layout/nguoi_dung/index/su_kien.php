<div class="col-md-4 col-sm-12 col-xs-12" style="margin: 20px 0;" id="ie-hot-layout">
	<div class="block_title">
					<a  href="<?php echo site_url('post/hot') ?>" title="Hot - tin tức" alt="Hot - tin tức"> HOT </a>
	</div>	
	<div class="object">
	</div>
	<!--############## ###############-->
	
	<div class="col-md-12 col-sm-12 col-xs-12" style="margin: 10px 0; padding: 0">
		<?php 
			if (isset($hotData) && !empty($hotData))
			{
				foreach ($hotData as $item)
				{
					?>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<a href="<?php echo site_url('hot/'.$item['url'].'/'.$item['id']) ?>">
								<img id="imgHot" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" class="img-responsive" title="<?php echo $item['tieu_de'] ?>" alt="<?php echo $item['tieu_de'] ?>">
							</a>
						</div>
					</div>
					<br/>
					<?php 
				}
			} else echo "<span class='label label-default'>Đang cập nhật dữ liệu!</span>";


		?>
	</div>


</div>