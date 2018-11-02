<?php  
	if (isset($EmegaArr) && !empty($EmegaArr))
	{
		//$tablename = $_GET['typename'];
		?>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-4">
					<span>Đăng bởi: <b><?php if (isset($user)) echo $user['lastName'].' '.$user['firstName']; else echo 'Undefine'; ?></b></span><br/>
					<span class="created"><?php echo $EmegaArr['created'] ?></span>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-9">
					<button class="btn btn-danger" id="deleteEmega" data-id="<?php echo $EmegaArr['id'] ?>">Xóa</button>
					<a href="<?php echo site_url('emegazine/change/'.$EmegaArr['id']) ?>"><button class="btn btn-primary">Chỉnh sửa</button></a>
					<a href="#"><button class="btn btn-success" id="publishBtn" data-post="<?php echo $EmegaArr['id'] ?>" data-table="tin_tuc">Xuất bản ngay</button></a>
				</div>
			</div> <!-- end row -->

			<div class="row" id="row2">
				<div class="col-md-4 col-sm-4 col-xs-4 statusPublish"><span>Tình trạng xuất bản (Publishing): <?php echo $EmegaArr['publishing'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4 location"><span>Vị trí tin (top): <?php echo $EmegaArr['top'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4 typenews"><span>Typenews: <?php echo $EmegaArr['typenews'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4"></div>
			</div> <!-- end row -->
				
			<div class="row">
				<div class="col-md-12 title">
					<span><?php echo $EmegaArr['tieu_de'] ?></span>
				</div>
			</div><!-- end row -->	
			<?php 
				if (isset($blockArr) && !empty($blockArr)) {
					?>
						<div class="row">
							<?php 
								foreach ($blockArr as $key=>$item) {
									$key += 1;
									?>
										<div class="col-md-12 col-sm-12 col-xs-12 title"><span><?php echo 'Block '.$key; ?></span></div>

										<div class="col-md-4 col-sm-4 col-xs-12"><?php echo $item['content'] ?></div>
										<div class="col-md-8 col-sm-8 col-xs-12"><img class="img-responsive" src="<?php echo base_url('public/EmegazineImage/block/'.$item['img']) ?>" title="Img block <?php echo $key ?>, <?php echo $EmegaArr['tieu_de'] ?>" alt="Img block <?php echo $key ?>, <?php echo $EmegaArr['tieu_de'] ?>"></div>
									<?php 
								}
							?>
						</div><!-- end row -->	
					<?php 	
				} else echo 'Not Found';
			?>
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