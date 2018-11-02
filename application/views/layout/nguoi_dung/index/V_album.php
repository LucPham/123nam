
<div class="row" style="margin: 0; padding: 0" id="ie-album-layout">
<div class="block_title">
	<a  href="<?php echo site_url('album-hinh') ?>">
		ALBUM			
	</a>
</div>
<div class="object"></div>
		<?php 
			if (isset($arr_album1) && !empty($arr_album1)) {
				foreach ($arr_album1 as $item1) {
					?>
						<div class="wrappalbum">
							<div class="hinhalbum">
							 <a href="<?php echo site_url('album/'.$item1['url'].'/'.$item1['id']) ?>" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">

							 <img class="img-responsive" src="<?php echo base_url('public/album/hinh_tieu_de/'.$item1['hinh']) ?>" alt="<?php echo $item1['tieu_de']; ?>">

							 </a>	

							</div> <!-- end /div .hinhalbum-->

							<div class="ten_album">
								<a href="<?php echo site_url('album/'.$item1['url'].'/'.$item1['id']) ?>" title="<?php echo $item1['tieu_de']; ?>" alt="<?php echo $item1['tieu_de']; ?>">

									<?php echo $item1['tieu_de'] ?>
									
								</a>
							</div> <!--end /div .tieu_de-->

						</div> <!--end /div .wrappalbum-->
					<?php
				}
			} else echo "<span class='label label-default'>Đang cập nhật dữ liệu!</span>";
		?>
</div><!--end /row-->