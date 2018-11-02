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

<div class="row" style="margin: 0; padding: 0">

				<div class="col-md-8 col-sm-8 col-xs-12" style="margin: 0; padding: 0">
				<div class="block_title">
						<a href="<?php echo site_url('tin-tuc/news') ?>">
					<?php
						if ($category == 'news')
							echo 'Tin tức';
						elseif ($category == 'hot')
							echo 'Hot';
						else {
							echo 'Trang nhất';						}
					?>	


				</a>
				</div>
				
				<div class="object">
				</div>
					<table class="table table-condensed"> 
		
						<tbody class="container_viewmore">
						<?php  
							if (isset($arr_chuyen_muc_tin) && !empty($arr_chuyen_muc_tin))
							{
								$id = 0;
								foreach ($arr_chuyen_muc_tin as $item)
								{
									?>

							<tr>
								<td>
								<?php  
									if ($item['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>">
											</a>
										<?php 
									} elseif ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>">
											</a>
										<?php
									}

								?>
								</td>	

								<td>
									<p class="td_chuyen_muc_tin">

									<?php  
									if ($item['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php echo $item['tieu_de'] ?>
											</a>
										<?php 
									} elseif ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php echo $item['tieu_de'] ?>
											</a>
										<?php
									}

								?>
									</p>
									<p class="nd_chuyen_muc_tin"><?php echo $item['created'] ?></p>
								</td>
							</tr>
							<?php 
								$id = $item['id'];	
								}
							} else
							{
								echo "Đang cập nhật dữ liệu.";
							}
						?> 
							<?php 
								if (isset($show_btn_more)) 
								{

							?>	
							<tr class="tr_viewmore_gif<?php echo $id; ?>" style="display: none">
								<td></td>
								<td class="col-lg-12" align="center">
									<img  src="<?php echo base_url('public/icon/reload.gif') ?>">
								</td>
							</tr> <!--end /GIF loading -->

								<tr class="btn_viewmore">
								<td></td>
								<td class="col-lg-12" align="center">
									<button class="btn viewmore" data-category="<?php echo $category; ?>" id="<?php echo $id; ?>">Xem thêm</button>
								</td>
							</tr> <!-- end BUTTON viewmore-->
							<?php 
						}
						?>
						</tbody> 
					</table>

				</div>