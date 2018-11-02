<span class="title_of_news_list"><?php
	if (isset($loai_tin) && !empty($loai_tin))
	{
		foreach ($loai_tin as $ten_loai)
		{
			echo $ten_loai['loai_tin']. ' ('.$total_rows.')';
		}
	}
	 ?></span>	
<br> <br><br>
<table class="table table-bordered" style="background-color: #ffffff"> 
	<thead> 
		<tr> 
			<th>STT</th> 
			<th>Tiêu đề</th>
			<th>Show/Hide</th>
			<th></th>
			<th></th>
			
		</tr> 
	</thead> 
	<tbody>
		<?php
		$stt = $this->uri->segment(4);
		$loai_tin = $this->uri->segment(3);
		if ($stt > 0)
			$stt = ($stt-1)*20;
		else 
			$stt *= 20;
		if (isset($ds_tin_loai_tin) && !empty($ds_tin_loai_tin))
		{
			foreach ($ds_tin_loai_tin as $key=>$item)
				{
				?> 
				<tr> 
					<td><?php echo ($stt+=1)  ?></td> 
					<td style="font-weight: bold;">
					<?php 
						if ($item['typenews'] == 'photo') {
							?>
							<a class="edit_title" href="<?php echo site_url('quan-tri/tin-tuc-photo/update/'.$item['id'].'?postcategories='.$item['loai_tin']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						} elseif ($item['typenews'] == 'emegazine') {
							?>
							<a class="edit_title" href="<?php echo site_url('emegazine/change/'.$item['id']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						} else {
							?>
							<a class="edit_title" href="<?php echo base_url('quan-tri/list/'.$item['loai_tin'].'/edit/'.$item['id'].'?postcategories='.$item['loai_tin']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						}
					?>
					<br>
					<span class="date_of_post"><?php echo $item['created'] ?></span>
					<br>
					</td> 
					<td><button postid-request="<?php echo $item['id'] ?>" id="btnShowHide" class="btn btn-primary" posttype-request="<?php echo $loai_tin; ?>" tb-art="tin_tuc">Ẩn bài viết này</button></td>
					<td>
					<?php 
						if ($item['typenews'] == 'photo') {
							?>
							<a class="edit_title" href="<?php echo site_url('quan-tri/tin-tuc-photo/update/'.$item['id'].'?postcategories='.$item['loai_tin']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<?php 
						} elseif ($item['typenews'] == 'emegazine') {
							?>
							<a class="edit_title" href="<?php echo site_url('emegazine/change/'.$item['id']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<?php 
						} else {
							?>
							<a class="edit_title" href="<?php echo base_url('quan-tri/list/'.$item['loai_tin'].'/edit/'.$item['id'].'?postcategories='.$item['loai_tin']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<?php 
						}
					?>
					</td>
					<td><a href="#" title="Xóa bài viết này" alt="Xóa bài viết này"  data-popup-open="popup-1" id="<?php echo $item['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr> 
					<?php
				}
			}
		?>
		<tr>
		<td></td>
			<td>
				<?php
			      if(isset($link_page))
			      {
			      ?>
			          <div class="row">
			              <div class="col-lg-12" align="center">
			                    <?php echo $link_page?>
			              </div>
			          </div>
			      <?php
			      }
			      ?>
			</td>
			<td></td>
		</tr>
	</tbody> 

</table>

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
