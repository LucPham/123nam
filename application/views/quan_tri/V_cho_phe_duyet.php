<span class="title_of_news_list">
	Bài viết chờ phê duyệt
</span>	
<br> <br><br>
<table class="table table-bordered" style="background-color: #ffffff"> 
	<thead> 
		<tr> 
			<th>STT</th> 
			<th>Tiêu đề</th>
			<th></th>
			<th></th>
			
		</tr> 
	</thead> 
	<tbody>
		<?php
		$stt = $this->uri->segment(3);
		if ($stt > 0)
			$stt = ($stt-1)*20;
		else 
			$stt *= 20;
		if (isset($ds_cho_phe_duyet) && !empty($ds_cho_phe_duyet))
		{
			foreach ($ds_cho_phe_duyet as $item)
				{
				?> 
				<tr> 
					<td><?php echo ($stt+=1)  ?></td> 
					<td style="font-weight: bold;">
					<?php 
						if ($item['typenews'] == 'photo') {
							?>
							<a class="edit_title" href="<?php echo site_url('quan-tri/cho-phe-duyet/photo/'.$item['url'].'/'.$item['id'].'?typename=tin_tuc') ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						} elseif($item['typenews'] == 'emegazine') {
							?>
							<a href="<?php echo site_url('quan-tri/cho-phe-duyet/emegazine/'.$item['url'].'/'.$item['id']) ?>" class="edit_title" title="<?php echo 'Emegazine: '.$item['tieu_de']; ?>" alt=="<?php echo 'Emegazine: '.$item['tieu_de']; ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						} else {
							?>
							<a class="edit_title" href="<?php echo site_url('quan-tri/cho-phe-duyet/'.$item['url'].'/'.$item['id'].'?typename=tin_tuc') ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><?php echo $item['tieu_de'] ?></a>
							<?php 
						}
					?>
					<br>
					<span class="date_of_post"><?php echo $item['created'] ?></span>
					<br>
					</td> 
					<td>
					<?php 
					if ($item['typenews'] == 'photo') {
							?>
							<a class="edit_title" href="<?php echo site_url('quan-tri/tin-tuc-photo/update/'.$item['id'].'?postcategories='.$item['loai_tin']) ?>" title="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>" alt="<?php echo 'Chỉnh sửa - '.$item['tieu_de'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<?php 
						} elseif($item['typenews'] == 'emegazine') {
							?>
							<a href="<?php echo site_url('emegazine/change/'.$item['id']) ?>" class="edit_title" title="<?php echo 'Emegazine: '.$item['tieu_de']; ?>" alt=="<?php echo 'Emegazine: '.$item['tieu_de']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
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
			                    <?php echo $link_page; ?>
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