<h1><u>Banner Update</u></h1>

<div class="row" style="padding: 0; margin: 0">
	<?php
		if (isset($err))
		{
			?>
			<div class="alert alert-danger" role="alert"><?php echo $err; ?></div>
			<?php
		}

	?>
	<?php
		if (isset($success))
		{
			?>
			<div class="alert alert-success" role="alert"><?php echo $success; ?></div>
			<?php
		}

	?>
</div>

<div class="row" style="margin; 0; padding: 0">

	<form method="post" enctype="multipart/form-data" id="form_banner_update">
<?php 

	if (isset($arr_banner) && !empty($arr_banner))
	{
		?>
		<input type="hidden" name="action" id="action" value="1"> <!--1 for update -->	
		<?php 
		foreach ($arr_banner as $key=>$item)
		{
			?>
					
					<div class="col-md-6 col-sm-6 col-xs-12">
					<img class="img-responsive" id="bannerPreview<?php echo $key ?>" src="<?php echo base_url('public/hinh/banner/'.$item['imgName']) ?>" style="max-height: 300px;">
					<br>

					<input type="file" name="banner_upload[]" id="bannerUpload" index="<?php echo $key; ?>">
					
					<br>
			<table class="table table-bordered">
							<tbody>
								<tr>
									<td>ID</td>
									<td>
									<input type="text" disabled="disabled" value="<?php echo $item['ID'] ?>">
									<input type="hidden" name="id[]" value="<?php echo $item['ID'] ?>">
									</td>
								</tr>

								<tr>
									<td>Img Name</td>
									<td class="imgName<?php echo $key; ?>"><?php echo $item['imgName'] ?></td>
								</tr>

								<tr>
									<td>Link</td>
									<td><input type="text" name="link[]" class="form-control" value="<?php echo $item['link'] ?>"></td>
								</tr>

								<tr>
									<td>Size</td>
									<td>
										<input  class="size<?php echo $key; ?>" type="text" disabled="disabled" value="<?php echo $item['size'].' px' ?>">
										<input  type="hidden" name="size[]" value="<?php echo $item['size'] ?>" class="hidden_size<?php echo $key; ?>">
									</td>
								</tr>

								<tr>
									<td>Width</td>
									<td>
										<input type="text" disabled="disabled" value="<?php echo $item['width'].' px' ?>" class="width<?php echo $key; ?>">
										<input type="hidden" name="width[]" value="<?php echo $item['width'] ?>" class="hidden_width<?php echo $key; ?>">

									</td>
								</tr>

								<tr>
									<td>Height</td>
									<td>
										<input type="text" disabled="disabled" value="<?php echo $item['height'].' px' ?>" class="height<?php echo $key; ?>">
										<input type="hidden" name="height[]" value="<?php echo $item['height'] ?>" class="hidden_height<?php echo $key; ?>">
									</td>
								</tr>

								<tr>
									<td>Layout</td>
									<td>
										<select name="sel_layout[]" class="form-control">
											<?php 
												if (isset($layout) && !empty($layout))
												{
													foreach ($layout as $name)
													{
														?>
														<option value="<?php echo $name['id'] ?>" <?php if ($item['layout'] == $name['id']) echo "selected"; ?> ><?php echo $name['name'] ?></option>
														<?php
													}
												}
											?>
										</select>

									</td>
								</tr>

								<tr>
									<td>Location</td>
									<td>
										<select name="sel_location[]" class="form-control">
											<option value="left" <?php if ($item['location'] == 'left') echo "selected"; ?>>left</option>
											<option value="right" <?php if ($item['location'] == 'right') echo "selected"; ?>>right</option>
										</select>
									</td>
								</tr>

								<tr>
									<td>Ẩn/Hiện</td>
									<td>
										<select name="sel_hideShow[]" class="form-control">
											<option value="0" <?php if ($item['hide_show'] == 0) echo "selected"; ?>>Ẩn</option>
											<option value="1" <?php if ($item['hide_show'] == 1) echo "selected"; ?>>Hiện</option>
										</select>
									</td>
								</tr>

								<tr>
									<td>Using Now</td>
									<td><?php if ($item['usingNow'] == 1) echo "Đang sử dụng"; else echo "Không sử dụng"; ?></td>
								</tr>
							 </tbody> 
 </table>
</div>
			<?php 
		}
	} else { // -- chua co du lieu --> insert-->
		$layoutitem = $this->uri->segment(4);
		if ($layoutitem)
		{
			?>
				<input type="hidden" name="action" id="action" value="0"> <!--0 for insert -->
			<?php
		for ($i = 0; $i<=1; $i++)
		{
			?>
						
					<div class="col-md-6 col-sm-6 col-xs-12">
					<img class="img-responsive" id="bannerPreview<?php echo $i ?>" style="max-height: 300px;">
					<br>

					<input type="file" name="banner_upload[]" id="bannerUpload" index="<?php echo $i; ?>">
					
					<br>
			<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Img Name</td>
									<td class="imgName<?php echo $i; ?>"></td>
								</tr>

								<tr>
									<td>Link</td>
									<td><input type="text" name="link[]" class="form-control" value="<?php if (isset($_POST['link'][$i])) echo $_POST['link'][$i] ?>"></td>
								</tr>

								<tr>
									<td>Size</td>
									<td>
										<input  class="size<?php echo $i; ?>" type="text" disabled="disabled" value="0">
										<input  type="hidden" name="size[]" value="0" class="hidden_size<?php echo $i; ?>">
									</td>
								</tr>

								<tr>
									<td>Width</td>
									<td>
										<input type="text" disabled="disabled" value="0" class="width<?php echo $i; ?>">
										<input type="hidden" name="width[]" value="0" class="hidden_width<?php echo $i; ?>">

									</td>
								</tr>

								<tr>
									<td>Height</td>
									<td>
										<input type="text" disabled="disabled" value="0" class="height<?php echo $i; ?>">
										<input type="hidden" name="height[]" value="0" class="hidden_height<?php echo $i; ?>">
									</td>
								</tr>

								<tr>
									<td>Layout</td>
									<td>
										<select name="sel_layout[]" class="form-control">
											<?php 
												if (isset($layout) && !empty($layout))
												{
													foreach ($layout as $name)
													{
														if ($layoutitem == $name['id'])
														{
															?>
															<option value="<?php echo $layoutitem
															 ?>"><?php echo $name['name'] ?></option>
															<?php
														}
													}
												}
											?>
										</select>

									</td>
								</tr>

								<tr>
									<td>Location</td>
									<td>
										<select name="sel_location<?php echo $i; ?>" class="form-control">
											<option value="0">---Chọn vị trí---</option>
											<option value="left" <?php if (isset($_POST['sel_location'.$i]) && $_POST['sel_location'.$i] == 'left') echo 'selected="selected"' ?>>Left</option>
											<option value="right" <?php if (isset($_POST['sel_location'.$i]) && $_POST['sel_location'.$i] == 'right') echo 'selected="selected"' ?>>Right</option>
										</select>
									</td>
								</tr>

								<tr>
									<td>Ẩn/Hiện</td>
									<td>
										<select name="sel_hideShow[]" class="form-control">
											<option value="2">Ẩn/Hiện</option>
											<option value="0" <?php if (isset($_POST['sel_hideShow'][$i]) && $_POST['sel_hideShow'][$i] == '0') echo 'selected="selected"' ?>>Ẩn</option>
											<option value="1" <?php if (isset($_POST['sel_hideShow'][$i]) && $_POST['sel_hideShow'][$i] == '1') echo 'selected="selected"' ?>>Hiện</option>
										</select>
									</td>
								</tr>

								<tr>
									<td>Using Now</td>
									<td>...</td>
								</tr>
							 </tbody> 
 </table>
</div>
			<?php 
		}// end for
		} // end if layoutitem
	} // end else
?>
</div>
<div class="col-md-12" style="text-align: center"><input type="submit" class="btn btn-danger" name="btn_banner_update" value="Lưu thay đổi"></div>
</form> <!-- end /Form-->


<!--================-@@@@====================-->
<br>
<hr>
<div class="row" style="padding: 0; margin:  0">
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


