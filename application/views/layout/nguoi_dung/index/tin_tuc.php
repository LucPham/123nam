<style type="text/css">
	.object a:hover
	{
		color: #fff;
	}
	a {
		color: #fff;
	}
	a:hover {
		color: #137705;
		text-decoration: none;
	}
</style>
				<div class="col-md-8 col-sm-12 col-xs-12 feed" style="margin: 20px 0; padding: 0">
				<div class="block_title">
					<a  href="<?php echo site_url('tin-tuc/news') ?>">
						TIN TỨC			
					</a>
				</div>
				<div class="object">
				</div>
					<table class="table table-condensed"> 
						<tbody>
						<?php  
							if (isset($ds_danh_muc_tin_tuc) && !empty($ds_danh_muc_tin_tuc))
							{
								foreach ($ds_danh_muc_tin_tuc as $item)
								{
									?>
							<tr> 
								<td class="td1_table_tin_phu_trang_nhat">
								<?php  
									if ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											</a>
										<?php
									} elseif ($item['typenews'] == 'emegazine') {
										?>
											<a href="<?php echo site_url('emagazine/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/EmegazineImage/title/'.$item['hinh']) ?>" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											</a>
										<?php 
									} else {
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
											</a>
										<?php 
									}
								?>
								
										<?php 
											if ($item['icon'] == 'photo')
											{
												?>
												<?php  
											if ($item['typenews'] != 'photo'){
												?>
													<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php 
											} elseif ($item['typenews'] == 'photo') {
												?>
													<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php
											}
										?>
											<span class="glyphicon glyphicon-picture icon"></span>
										</a>
										<?php
									} else if ($item['icon'] == 'video') {
										?>
										<?php  
											if ($item['typenews'] == 'photo') {
												?>
													<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php
											} elseif ($item['typenews'] == 'emegazine') {
												?>
													<a href="<?php echo site_url('emagazine/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php 
											} else {
												?>
													<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php 
											}
										?>
										<span class="glyphicon glyphicon-facetime-video icon"></span>
										</a>
										<?php
									}
								?>
								</td> 
								<td class="td2_table_tin_phu_trang_nhat">
								<?php  
									if ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>"><?php echo $item['tieu_de'] ?></a>
										<?php
									} elseif ($item['typenews'] == 'emegazine') {
										?>
											<a href="<?php echo site_url('emagazine/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>"><?php echo $item['tieu_de'] ?></a>
										<?php 
									} else {
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>"><?php echo $item['tieu_de'] ?></a>
										<?php 
									}

								?>
								<div class="tom_tat_tin_phu_trang_nhat">
									<?php 
										//echo $item['overShort'];
									 ?>
								</div>
								<p style="color: #68c62d; font-size: 11px"><?php echo $item['created'] ?></p>
								</td> 
							</tr> 
							<?php 	
								}
							} else echo "<span class='label label-default'>Đang cập nhật dữ liệu!</span>";
						?> 
						</tbody> 
					</table>
				</div>