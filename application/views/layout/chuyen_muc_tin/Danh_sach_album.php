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
				<a href="#">Album hinh</a>
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
									
						 				<a class="tieu_de_tin_moi_nhat" href="#" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>">
						 					<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>">
						 				</a>
								</td>	

								<td>
									<p class="td_chuyen_muc_tin">
									
						 				<a class="tieu_de_tin_moi_nhat" href="#"><?php echo $item['tieu_de'] ?></a>
					 				
						 			 
									</p>
									<p class="nd_chuyen_muc_tin"><?php echo $item['ngay'] ?></p>
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