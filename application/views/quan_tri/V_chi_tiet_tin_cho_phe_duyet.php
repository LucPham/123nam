<?php  
	if (isset($tin_cho_phe_duyet) && !empty($tin_cho_phe_duyet))
	{
		$tablename = $_GET['typename'];
		?>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-4">
					<span>Đăng bởi: <b><?php if (isset($user)) echo $user['lastName'].' '.$user['firstName']; else echo 'Undefine'; ?></b></span><br/>
					<span class="created"><?php echo $tin_cho_phe_duyet['created'] ?></span>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-9">
					<button class="btn btn-danger" id="deleteBtn" data-id="<?php echo $tin_cho_phe_duyet['id'] ?>">Xóa</button>
					<a href="<?php echo site_url('quan-tri/list/news/edit/'.$tin_cho_phe_duyet['id']) ?>"><button class="btn btn-primary">Chỉnh sửa</button></a>
					<button class="btn btn-success" id="publishBtn" data-post="<?php echo $tin_cho_phe_duyet['id'] ?>" data-table="<?php echo $tablename; ?>">Xuất bản ngay</button>
				</div>
			</div> <!-- end row -->

			<div class="row" id="row2">
				<div class="col-md-4 col-sm-4 col-xs-4 statusPublish"><span>Tình trạng xuất bản (Publishing): <?php echo $tin_cho_phe_duyet['publishing'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4 location"><span>Vị trí tin (top): <?php echo $tin_cho_phe_duyet['top'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4 typenews"><span>Typenews: <?php echo $tin_cho_phe_duyet['typenews'] ?></span></div>
				<div class="col-md-4 col-sm-4 col-xs-4"></div>
			</div> <!-- end row -->
				
			<div class="row">
				<div class="col-md-12 title">
					<span><?php echo $tin_cho_phe_duyet['tieu_de'] ?></span>
				</div>

				<div class="col-md-12 summary">
					<span><?php echo $tin_cho_phe_duyet['tom_tat'] ?></span>
				</div>
				<div class="col-md-12 contentPost">
					<span><?php echo $tin_cho_phe_duyet['noi_dung'] ?></span>
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