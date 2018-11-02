<style type="text/css">
	a {
		color: #000;
	}
	a:hover {
		text-decoration: none;
	}
	td {
		font-size: 12px;
	}
	.remove
	{
		color: #337ab7; font-weight: bold
	}
	.edit
	{
		color: #337ab7; font-weight: bold
	}
</style>
<div class="col-md-12 col-sm-12 col-xs-12">
	<table class="table table-hover" style="background-color: #ffffff"> 
		<thead> 
			<tr> 
				<th>STT</th>
				<th></th> 
				<th>Album</th>
			</tr> 
		</thead> 
			<tbody>
			<?php 
				if (isset($data_arr) && !empty($data_arr)) {
					$key = 1;
					$uri = $this->uri->segment(4);
					if (isset($uri)) {
						$key = 4*($uri-1) + 1;
					}
					foreach ($data_arr as $item) {
							
						?>
					<tr> 
						<td><?php echo $key++; ?></td>
						<td style="max-width: 120px;"><img class="img-responsive" src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>"></td> 
						<td>
						<p style="font-weight: bold; font-size: 14px"><a href="<?php echo site_url('quan-tri/cho-phe-duyet/photo/'.$item['url'].'/'.$item['id'].'?typename=album') ?>" title="<?php echo $item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a></p>
						<p style="color: #137705; font-size: 9px;"><?php echo $item['created'] ?></p>
						<p style="color: #137705; font-size: 9px;">Tạo bởi: <b><?php echo $item['user'] ?></b></p>
						</td> 
						<td><a href="#" title="Xóa" data-popup-album-open="popup-3" id="<?php echo $item['id']; ?>"><span class="glyphicon glyphicon-remove remove"></span></a></td>
						<td><a href="<?php echo base_url('quan-tri/album/update/'.$item['id'].'?postcategories=album') ?>" title="Chỉnh sửa"><span class="glyphicon glyphicon-edit edit"></span></a></td>
					</tr>  
						<?php
					}
				} else echo "<b>-_- Chưa có dữ liệu -_-</b> ";
			?>
				<tr>
					<td></td>
					<td>
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
			      </td>
					<td></td>
					<td></td>
				</tr>
			
		</tbody> 
	</table>
</div>