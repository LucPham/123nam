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
	<h2>Album (<?php echo $total_rows; ?>)</h2>
	<table class="table table-bordered" style="background-color: #ffffff"> 
		<thead> 
			<tr> 
				<th>STT</th>
				<th></th> 
				<th>Album</th> 
				<th>Show/Hide</th>
			</tr> 
		</thead> 
			<tbody> 
			
			<?php 
				if (isset($ds_album) && !empty($ds_album)) {
					$key = 1;
					$uri = $this->uri->segment(4);
					if (isset($uri)) {
						$key = 4*($uri-1) + 1;
					}
					foreach ($ds_album as $item) {
							
						?>
					<tr> 
						<td><?php echo $key++; ?></td>
						<td style="max-width: 120px;"><img class="img-responsive" src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>"></td> 
						<td>
						<p style="font-weight: bold; font-size: 14px"><a href="<?php echo base_url('quan-tri/album/update/'.$item['id'].'?postcategories=album') ?>" title="<?php echo $item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a></p>
						<p style="color: #137705; font-size: 9px;"><?php echo $item['created'] ?></p>
						<p style="color: #137705; font-size: 9px;">Tạo bởi: <b><?php echo $item['user'] ?></b></p>
						</td> 
						<td><button postid-request="<?php echo $item['id'] ?>" id="btnShowHide" class="btn btn-primary" posttype-request="null" tb-art="album">Ẩn bài viết này</button></td>
						<td><a href="#" title="Xóa" data-popup-album-open="popup-3" id="<?php echo $item['id']; ?>"><span class="glyphicon glyphicon-remove remove"></span></a></td>
						<td><a href="<?php echo base_url('quan-tri/album/update/'.$item['id']) ?>" title="Chỉnh sửa"><span class="glyphicon glyphicon-edit edit"></span></a></td>
						
						

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

<div id="wrapp_box1">
	<div id="box_1">
		<div class="row">
			<div class="col-md-12" id="confirm_text">
				<img src="<?php echo base_url('public/icon/loading.gif') ?>">	
			</div>
		</div>	
		<div class="row">
			<div class="col-md-11">
				<button style="float: right;" class="btn btn-danger" id="close">Đóng</button>
			</div>
		</div>
	</div>
</div>