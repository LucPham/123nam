<div style="margin-top: 150px" id="latestPost">
	<h3>Mới nhất</h3>

	<?php //var_dump($var_ds_bai_viet_moi_nhat) ?>
	<table class="table">
 		<?php  

 			if (isset($var_ds_bai_viet_moi_nhat) && !empty($var_ds_bai_viet_moi_nhat))
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

 				foreach ($var_ds_bai_viet_moi_nhat as $item)
 				{
 				?>
 				<tr>
		 			<td>
		 				<a class="tieu_de_tin_moi_nhat" href="<?php echo $url[$item['privated']][$item['typenews']].'/'.$item['url'].'/'.$item['id']?>">
		 					<?php 
		 						if ($item['typenews'] == 'emegazine') {
		 							?>	
		 								<img src="<?php echo base_url('public/EmegazineImage/title/'.$item['hinh']) ?>">
		 							<?php 
		 						} else { ?>
		 								<img src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>">
		 						<?php }
		 					?>
		 					
		 				</a>
		 			</td>
		 			
		 			<td>
		 			
						<a class="tieu_de_tin_moi_nhat" href="<?php echo $url[$item['privated']][$item['typenews']].'/'.$item['url'].'/'.$item['id']?>"><?php echo $item['tieu_de'] ?></a>
		 				
		 			</td>
		 		</tr>
 				<?php
 				}
 			} else echo "Dữ liệu đang được cập nhật";
 			?>
	</table>
</div>