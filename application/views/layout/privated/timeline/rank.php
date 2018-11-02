<h2>Rank</h2>
<div class="wrapp">
	


	<div class="rank-item" style="background: url('../../public/hinh_tieu_de/1482333185-cau-9425-1482295510.jpg') no-repeat center;">
					<div class="rank-number"><a href="#">1</strong></div>
					<div class="place top-place"><a href="#">Places Your Arriveqwdqw</a></div>
					<div class="rank-score">4</div>
	</div><!--rank-item-->


	<?php 
		for ($i = 2; $i <11; $i ++)
		{
			?>
				<div class="rank-item">
					<div class="rank-number"><a href="#"><?php echo $i; ?></a></div>
					<div class="place"><a href="#">Places Your Arrived</a></div>
					<div class="rank-score"><?php echo rand(1,4); ?></div>
				</div><!--rank-item-->
			<?php 
		}
	?>

	
</div><!--wrapp-->