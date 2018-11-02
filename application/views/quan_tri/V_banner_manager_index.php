<h1><u>Banner Manage</u></h1>

<div class="row" style="padding: 0; margin: 0">
	<h2>Layout sử dụng Banner: </h2>
	<div class="col-md-6 col-sm-6 col-xs-12">
	<table class="table table-hover"> 
					<thead> 
						<tr style="background-color: #337ab7; color: #fff"> 
							<th>STT</th> 
							<th>ID</th> 
							<th>Layout</th> 
						</tr> 
					</thead> 
					<tbody> 
	<?php 
		if (isset($layout) && !empty($layout))
		{
			$stt= 1;
			foreach ($layout as $item)
			{
				?>
				
						<tr class="success"> 
							<th scope="row"><?php echo $stt++; ?></th> 
							<td><?php echo $item['id']; ?></td> 
							<td><?php echo $item['name'] ?></td> 
						</tr> 
						
					
				<?php
			}
		}
	?>
	</tbody> 
</table>
		
	</div>
</div>
<hr>

<div class="row" style="padding: 0; margin: 0">
	<div class="col-md-12"> 
	<?php
		if (isset($layout) && !empty($layout))
		{
			foreach ($layout as $arr)
			{
				
				?>
				<div class="col-md-12">
				<h2><span class="label label-primary"><?php echo $arr['name'] ?></span></h2>
				<?php 
				$ds_layout = $this->M_banner->Ds_banner_trong_layout($arr['id']);
					if (!empty($ds_layout))
					{
						foreach ($ds_layout as $banner)
						{
						
					?>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<p><b><?php echo $banner['location'] ?></b></p>
						
						<img class="img-responsive" src="<?php echo base_url('public/hinh/banner/'.$banner['imgName']) ?>" style="max-height: 300px;">
						<br>
						<?php 
							if ($banner['hide_show'] == 0)
							{
								?>
								<button style="border-color: red; color: red; border-radius: 20px 20px; background-color: #fff; width: 160px; height: 35px; font-weight: bold; font-size: 25px;">Đã ẩn</button>
								<?php
							}
						?>
						<br>
						<br>
						<table class="table table-bordered"> 
							
								
						
							<tbody>
								<tr>
									<td>ID</td>
									<td><?php echo $banner['ID'] ?></td>
								</tr>

								<tr>
									<td>Img Name</td>
									<td><?php echo $banner['imgName'] ?></td>
								</tr>

								<tr>
									<td>Link</td>
									<td><?php echo $banner['link'] ?></td>
								</tr>

								<tr>
									<td>Size</td>
									<td><?php echo $banner['size']." KB" ?></td>
								</tr>

								<tr>
									<td>Width</td>
									<td><?php echo $banner['width']." px" ?></td>
								</tr>

								<tr>
									<td>Height</td>
									<td><?php echo $banner['height']." px" ?></td>
								</tr>

								<tr>
									<td>Layout</td>
									<td><?php echo $banner['layout'] ?></td>
								</tr>

								<tr>
									<td>Location</td>
									<td><?php echo $banner['location'] ?></td>
								</tr>

								<tr>
									<td>Hide/Show</td>
									<td><?php echo $banner['hide_show'] ?></td>
								</tr>

								<tr>
									<td>Using Now</td>
									<td><?php echo $banner['usingNow'] ?></td>
								</tr>
							 </tbody> 
						 </table>
					</div>

					<?php 
						}
					}
				?>
					<div class="col-md-12" style="text-align: center"><a href="<?php echo site_url('quan-tri/banner/update/'.$arr['id']) ?>" class="btn btn-danger">Chỉnh sửa</a></div>
				</div>
			<?php 
			}
			}
			?>	

	</div>
</div>