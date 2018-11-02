<div class="col-md-12 menu_option">
	<div class="nav_wrapp">
		<div class="brand">
			<a href="<?php echo site_url('su-kien/su-kien-cua-toi') ?>">SỰ KIỆN CỦA TÔI (<?php 
			if (isset($countEvent) && !empty($countEvent))
			{
				echo $countEvent['countEvent'];
			}
		?>)</a>
		</div>
		<div class="menu_item">
			<ul>
				<?php 
					if (isset($countEvent) && $countEvent['countEvent'] > 0)
					{
						?>
						
						<li><a href="#"><button id="btnPopup" class="btn btn-default">Xóa</button></a></li>
						<li><a href="#"><span class="checkedId"></span></a></li>
						<?php 
					}
				?>
			</ul>
		</div>
		
	</div>
</div>