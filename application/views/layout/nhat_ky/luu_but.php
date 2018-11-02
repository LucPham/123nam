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

<div class="row" style="margin: 0; padding: 0">

				<div class="col-md-8 col-sm-8" style="margin: 0; padding: 0">
				<div class="object_nhat_ky"><a href="#">Lưu bút</a></div>
					<table class="table table-condensed"> 
		
						<tbody>
						<?php  
							if (isset($arr_ds_luu_but) && !empty($arr_ds_luu_but))
							{
								foreach ($arr_ds_luu_but as $item)
								{
									?>

							<tr> 
								<td class="td1_table_tin_phu_trang_nhat">

								<a href="<?php echo site_url('nhat-ky-ngay-xanh/luu-but/'.$item['url'].'/'.$item['id'].'?type_news='.$item['kieu_tin']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">

								<img class="img-responsive img_tin_phu_trang_nhat" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">

								</a>
								
								</td> 
								<td class="td2_table_tin_phu_trang_nhat">
								<a href="<?php echo site_url('nhat-ky-ngay-xanh/luu-but/'.$item['url'].'/'.$item['id'].'?type_news='.$item['kieu_tin']) ?>" class="title_tin_phu_trang_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
									

									<?php echo $item['tieu_de'] ?>
								


								</a>
								<div class="tom_tat_tin_phu_trang_nhat">
									<?php if (strlen($item['tom_tat']) > 90) echo substr($item['tom_tat'],0,92).'...'; else echo $item['tom_tat'] ?>
									
								</div>
								<p style="color: rgb(88, 50, 130); font-size: 11px"><?php echo $item['ngay_dang'] ?></p>
								</td> 
							</tr> 
							<?php 	
								}
							} else
							{
								echo "Đang cập nhật dữ liệu.";
							}
						?> 
					
							
						</tbody> 
					</table>

				</div>