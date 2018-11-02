<?php  
	if (isset($titlePost) && !empty($titlePost))
	{
		$tablename = $_GET['typename'];
		?>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-4">
					<span>Đăng bởi: <b><?php if (isset($user)) echo $user['lastName'].' '.$user['firstName']; else echo 'Undefine'; ?></b></span><br/>
					<span class="created"><?php echo $titlePost['created'] ?></span>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-9">
					<button class="btn btn-danger" id="deleteBtn" data-id="<?php echo $titlePost['id'] ?>" data-table="<?php echo $tablename ?>">Xóa</button>
					<?php 
						if ($tablename != 'album') {
							?>

								<a href="<?php echo site_url('/quan-tri/tin-tuc-photo/update/'.$titlePost['id'].'?postcategories='.$titlePost['loai_tin']) ?>"><button class="btn btn-primary">Chỉnh sửa</button></a>
							<?php 
						} else {
							?>
							<a href="<?php echo site_url('quan-tri/album/update/'.$titlePost['id'].'?postcategories=album') ?>"><button class="btn btn-primary">Chỉnh sửa</button></a>
							<?php 
						}
					?>
					<a href="#"><button class="btn btn-success" id="publishBtn" data-post="<?php echo $titlePost['id'] ?>" data-table="<?php echo $tablename; ?>">Xuất bản ngay</button></a>
				</div>
			</div> <!-- end row -->
			<?php 
				
				if (isset($tablename) && !empty($tablename)) {
					if ($tablename != 'album') {
						?>
							<div class="row" id="row2">
							<div class="col-md-4 col-sm-4 col-xs-4 statusPublish"><span>Tình trạng xuất bản (Publishing): <?php echo $titlePost['publishing'] ?></span></div>
							<div class="col-md-4 col-sm-4 col-xs-4 location"><span>Vị trí tin (top): <?php echo $titlePost['top'] ?></span></div>
							<div class="col-md-4 col-sm-4 col-xs-4 typenews"><span>Typenews: <?php echo $titlePost['typenews'] ?></span></div>
							<div class="col-md-4 col-sm-4 col-xs-4"></div>
							</div> <!-- end row -->
						<?php 
					} else {
						?>
							<div class="row" id="row2">
							<div class="col-md-4 col-sm-4 col-xs-4 statusPublish"><span>Tình trạng xuất bản (Publishing): <?php echo $titlePost['publishing'] ?></span></div>
							
							<div class="col-md-4 col-sm-4 col-xs-4 typenews"><span>Typenews: Album</span></div>
							<div class="col-md-4 col-sm-4 col-xs-4"></div>
						</div> <!-- end row -->

						<?php 
					}
				}
			?>
			
				
			<div class="row">
				<div class="col-md-12 title">
					<span><?php echo $titlePost['tieu_de'] ?></span>
				</div>

				<div class="col-md-12 summary">
					<span><?php echo $titlePost['tom_tat'] ?></span>
				</div>
				<div class="col-md-12 contentPost">
					<?php  
						if (isset($data_image) && !empty($data_image))
						{
							foreach ($data_image as $item) {
								?>
									<div id="img-wrapp">
										<img src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" id="img-item" class="img-responsive">
									</div>
									<div id="caption-wrapp">
										<span><?php echo $item['caption'] ?></span>
									</div>
								<?php
							}
						} else echo 'Content Not Found';
					?>
				</div>
			</div><!-- end row -->	


		<?php 
	} else echo 'Not Found';
?>

<div id="wrapp_box1">
	<div id="box_1">
		<div class="row">
			<div class="col-md-12" id="confirm_text">
				Bạn có chắc chắn muốn xóa bài viết này?
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<button class="btn btn-danger" id="btnCancel">Hủy</button>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<button class="btn btn-danger" id="btnOk">Xóa</button>
			</div>
			<div class="col-md-12" id="loadingBox">
				<img src="<?php echo base_url('public/icon/loading.gif') ?>"> Đang xóa bài viết ...
			</div>
		</div>	
	</div>
</div>

<div id="wrapp_box2">
	<div id="box_2">
		<div class="row">
			<div class="col-md-12" id="confirm_text2">
				Đang xuất bản bài viết ... <img src="<?php echo base_url('public/icon/loading.gif') ?>">	
			</div>
		</div>	
	</div>
</div>