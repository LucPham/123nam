<div class="col-md-9">
	<h3>Kết quả tìm kiếm</h3>
	<p>
		<?php 
			if (isset($sizeAlbum)) {
				?>
					<?php echo $sizeAlbum ?> kết quả album cho <i><a href="<?php echo site_url('tim-kiem/album?q='.$query) ?>"><?php echo $query; ?></a></i>
				<?php 
			}
		 ?>
	</p>

	<table class="table table-hover">
	 <?php  
		if (isset($resultAlbum) && !empty($resultAlbum)) {
			foreach ($resultAlbum as $result) {
				?>
					<tr class="result-tr">
						<td>
							<p class="result-title">
							<?php 
									?>
									<a href="<?php echo site_url('album/'.$result['url'].'/'.$result['id']) ?>"><?php echo $result['tieu_de'].' - Tin tức'; ?></a>
									<?php 
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
	</table>
	

</div>