<div class="row" style="margin-top: 20px;">
	<ul class="ul_ngang">
	<?php
		if (isset($arr_top_diary_ngang) && !empty($arr_top_diary_ngang))
		{
			foreach ($arr_top_diary_ngang as $item)
			{
				?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="img_ngang">
						<a href="<?php echo site_url('nknx/luu-but/'.$item['url'].'/'.$item['id']) ?>"><img class="img-responsive" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>"></a>
					</div>
					<div class="title_ngang">
						<li><a href="<?php echo site_url('nknx/luu-but/'.$item['url'].'/'.$item['id']) ?>" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>" ><?php echo $item['tieu_de'] ?></a></li>			
					</div>
				</div>
				<?php
			}
		} else echo "-_- Đang cập nhật -_-";

	?>
	</ul>
</div>