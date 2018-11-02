<style type="text/css">
	.title_trang_nhat a:hover
	{
		color: #fff;
	}
</style>
			<!--Trang nhat-->
			<div class="row" style="margin: 0; box-shadow: 0px 2px #BDBDBD" id="ie-wrapptop">
			
				<div class="col-md-8 col-sm-8 col-xs-12" style="margin: 0; padding: 0" id="ie-col1-top">
				<?php
					if (isset($tin_chinh_trang_nhat))
					{
						
				?>
					<div class="title_trang_nhat">
						<?php  
							if ($tin_chinh_trang_nhat['typenews'] == 'photo') {
									?>
										<a href="<?php echo site_url('tin-tuc/photo/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
											<?php echo $tin_chinh_trang_nhat['tieu_de'] ?>
										</a>
									<?php
								} elseif ($tin_chinh_trang_nhat['typenews'] == 'emegazine') {
									?>
										<a href="<?php echo site_url('emagazine/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
											<?php echo $tin_chinh_trang_nhat['tieu_de'] ?>
									<?php 
								} else {
									?>
										<a href="<?php echo site_url('tin-tuc/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
												<?php echo $tin_chinh_trang_nhat['tieu_de'] ?>
											</a>	
									<?php 
								}

							?>
					</div>

					<div class="div_img_title">
					<?php  
						if ($tin_chinh_trang_nhat['typenews'] == 'photo') {
						?>
							<a href="<?php echo site_url('tin-tuc/photo/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
								<img class="img-responsive img-title" src="<?php echo base_url('public/hinh_tieu_de/'.$tin_chinh_trang_nhat['hinh']) ?>">
							</a>
						<?php
						} elseif ($tin_chinh_trang_nhat['typenews'] == 'emegazine') {
							?>
								<a href="<?php echo site_url('emagazine/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
								<img class="img-responsive img-title" src="<?php echo base_url('public/hinh_tieu_de/'.$tin_chinh_trang_nhat['hinh']) ?>">
							<?php 
						} else {
							?>
								<a href="<?php echo site_url('tin-tuc/'.$tin_chinh_trang_nhat['url'].'/'.$tin_chinh_trang_nhat['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>" alt="<?php echo $tin_chinh_trang_nhat['tieu_de']; ?>">
								<img class="img-responsive img-title" src="<?php echo base_url('public/hinh_tieu_de/'.$tin_chinh_trang_nhat['hinh']) ?>">
								</a>	
						<?php 
						}
					?>
						
						<?php
							if ($tin_chinh_trang_nhat['icon'] == 'photo')
							{
								?>
								<span style="top: 0; right: 5px; font-size: 30px; position: absolute; color: #68c62d" class="glyphicon glyphicon-picture"></span>
								<?php
							} elseif ($tin_chinh_trang_nhat['icon'] == 'video') 
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
						echo "<span class='label label-default'>Đang cập nhật dữ liệu!</span>";
					}
				?>
				</div>	<!--/tin chinh-->

				<div class="col-md-4 col-sm-4 col-xs-12" style="padding-top: 0;" id="ie-col2-top">
					<table class="table table-hover"> 
		
					<tbody> 
					video
					<?php
					if (isset($tin_phu_trang_nhat) && !empty($tin_phu_trang_nhat))
					{
					
					} else echo "<span class='label label-default'>Đang cập nhật dữ liệu!</span>";
					?>
					
					<td class="col-lg-12" align="center"><a href="<?php echo site_url('trang-nhat/top') ?>"><button class="btn_xem_them">...</button></a></td>
					<tr>
						<td class="col-lg-12" align="center"></td>
					</tr>
					</tbody> 
					</table>


				</div> <!--/tin phu-->
			</div> <!--tang 1-->