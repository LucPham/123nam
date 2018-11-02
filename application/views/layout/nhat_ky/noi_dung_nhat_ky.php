	<style type="text/css">
	a {
		color: #fff;
	}
	a:hover {
		color: #fff;
		text-decoration: none;
	}
	.container_viewmore a:hover
	{
		color: #137705;
	}
</style>



	<div class="col-md-8 col-sm-8" style="margin: 0; padding: 0">
	
		
	<?php
					if (isset($arr_top_diary))
					{
						

				?>
					<div class="title_trang_nhat_nhat_ky">
						<a href="<?php echo site_url('nknx/luu-but/'.$arr_top_diary['url'].'/'.$arr_top_diary['id']) ?>" title="<?php echo $arr_top_diary['tieu_de']; ?>" alt="<?php echo $arr_top_diary['tieu_de']; ?>">

								<?php echo $arr_top_diary['tieu_de'] ?>


							</a>
					</div>


					<div class="div_img_title_nhat_ky">
						<img class="img-responsive img-title-nhat-ky" src="<?php echo base_url('public/hinh_tieu_de/'.$arr_top_diary['hinh']) ?>">
						<?php
							if ($arr_top_diary['icon'] == 'photo')
							{
								?>
								<span style="top: 0; right: 5px; font-size: 30px; position: absolute; color: #BBB5B5" class="glyphicon glyphicon-picture"></span>
								<?php
							} elseif ($arr_top_diary['icon'] == 'video') 
							{
								?>
								<span style="top: 0; right: 5px; font-size: 30px; position: absolute; color: #BBB5B5" class="glyphicon glyphicon-facetime-video"></span>
								<?php
							}
						?>
					</div>
						<?php
				
					} else
					{
						echo 'Đang cập nhật dữ liệu.';
					}
				?>		
	</div>

