<style type="text/css">
	td {
		font-size: 14px;
	}
	.ngay_thang
	{
		font-weight: bold;
		color: #F50000
	}
</style>
<style type="text/css">
	a {
		color: #000;
	}
	a:hover{
		text-decoration: none;
	}
</style>
<div class="col-md-12 col-sm-12 col-xs-12">
	<span class="title_of_news_list">Sự kiện (<?php echo $total_rows; ?>)</span>
	<table class="table table-bordered" style="margin-top: 40px;"> 
		<thead> 
			<tr> 
				<th>STT</th> 
				<th>Sự kiện</th> 
				<th>Đối tượng</th>
				<th>Ngày</th> 
			</tr> 
		</thead> 
			<tbody> 
			
			<?php 
				if (isset($ds_sukien) && !empty($ds_sukien)) {
					$key = 1;
					$uri = $this->uri->segment(4);
					if (isset($uri)) {
						$key = 20*($uri-1) + 1;
					}
					foreach ($ds_sukien as $item) {
							
						?>
					<tr> 
						<td><?php echo $key++; ?></td> 
						<td>
						<p><a href="<?php echo base_url('quan_tri/C_su_kien/update/'.$item['id']) ?>" title="<?php echo $item['ten_su_kien'] ?>"><?php echo $item['ten_su_kien'] ?></a></p>
						<p style="color: #137705; font-size: 9px;"><?php if ($item['nam'] != '')  echo $item['ngay'].'/'.$item['thang'].'/'.$item['nam'];  else echo $item['ngay'].'/'.$item['thang']; ?></p>

						</td> 
						<td><?php echo $item['doi_tuong'] ?></td>
						<td class="ngay_thang"><?php if($item['nam'] !=''){ echo $item['ngay'].'/'.$item['thang'].'/'.$item['nam']; } else echo $item['ngay'].'/'.$item['thang']; ?></td>
						
					
						<td><a href="#" title="Xóa"  data-popup-event-open="popup-2" id="<?php echo $item['id']; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
						<td><a href="<?php echo base_url('quan_tri/C_su_kien/update/'.$item['id']) ?>" title="Chỉnh sửa"><span class="glyphicon glyphicon-edit"></span></a></td>
					</tr>  
						<?php
					}
				} else echo "<b>-_- Chưa có dữ liệu -_-</b> ";
			?>
			
		</tbody> 
	</table>
		<?php
	      if(isset($link_page))
	      {
		      ?>
		          
		              <div class="col-lg-12" align="center">
		                   <?php echo $link_page?>
		              </div>
		          
		      <?php
	      }
	      ?>
</div>