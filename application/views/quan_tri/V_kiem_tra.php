
	
	
				<table class="table table-striped"> 
				<thead> 
					<tr> 
						<th>STT</th> 
						<th>Tiêu đề</th> 
						<th>Loại tin</th> 
						
					</tr> 
				</thead> 
				<tbody>
				<?php
				$stt = 0;
				foreach ($ds_tin as $item)
					{

					?> 
					<tr> 
						<th scope="row"><?php echo ($stt=$stt +1) ?></th> 
						<td><?php echo $item['tieu_de'] ?></td> 
						<td><?php echo $item['loai_tin'] ?></td> 
						
					</tr> 
						<?php
					}
				?>
				</tbody> 
				</table>
	