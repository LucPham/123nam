<div class="col-md-9">
	<h3>Kết quả tìm kiếm</h3>
	<p>
		<?php 
			if (isset($size)) {
				?>
					<?php echo $size ?> kết quả tin tức cho <i><a href="<?php echo site_url('tim-kiem/tin-tuc?q='.$query) ?>"><?php echo $query; ?></a></i>
				<?php 
			}
			if (isset($sizeAlbum)) {
				?>
					<?php echo $sizeAlbum ?> kết quả album cho <i><a href="<?php echo site_url('tim-kiem/album?q='.$query) ?>"><?php echo $query; ?></a></i>
				<?php 
			}
		 ?>
	</p>

	<table class="table table-hover">
	 <?php  
		if (isset($resultNews) && !empty($resultNews)) {
			foreach ($resultNews as $result) {
				?>
					<tr class="result-tr">
						<td>
							<p class="result-title">
							<?php 
								if ($result['typenews'] == 'photo') {
									?>
									<a href="<?php echo site_url('tin-tuc/photo/'.$result['url'].'/'.$result['id']) ?>"><?php echo $result['tieu_de'].' - Tin tức'; ?></a>
									<?php 
								} else {
									?>
									<a href="<?php echo site_url('tin-tuc/'.$result['url'].'/'.$result['id']) ?>"><?php echo $result['tieu_de'].' - Tin tức'; ?></a>
									<?php 
								}
							?>
							</p>
							<p class="result-date"><span><?php echo $result['created'] ?></span></p>
						</td>
						<td>22</td>
					</tr>
				<?php 
			}
		} else {
			echo 'Không tìm thấy kết quả nào cho '.$query;
		}

	?>
			<?php 
				if (isset($resultAlbum) && !empty($resultAlbum)) {
					foreach ($resultAlbum as $rAlbum) {
						?>
							<tr>
								<td>
								<p class="result-title">
									<a href="<?php echo site_url('album/'.$rAlbum['url'].'/'.$rAlbum['id']) ?>"><?php echo $rAlbum['tieu_de'].' - Album' ?></a>
								</p>
								<p class="result-date">
									<span><?php echo $rAlbum['created']; ?></span>
								</p>
								</td>
								<td>22</td>
							</tr>
						<?php 
					}
				}

			?>
	</table>
	

</div>