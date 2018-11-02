<div class="record-wrapp">
	<div class="record-top">

		<span class="label label-warning">Thu7 Record</span>
		<span class="label label-default"><?php echo $total_rows; ?></span>
	
	</div>
	<?php
		//var_dump($pagination);
		//echo $this->uri->segment(4);
	 ?>

	<div class="record-table">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>O.No</th>
					<th>!Places</th>
					<th>Key search</th>
					<th>Votes</th>
					<th>Rank</th>
					<th>Option</th>
				</tr>
			</thead>

			<tbody>
				
					<?php if (isset($pagination) && !empty($pagination)) {
						$uri = $this->uri->segment(4);
						$oNo = 1;
						if ($uri) { $oNo = $per_page*($uri-1); }
						foreach ($pagination as $key=>$item) {
							
							?>
							<tr class="tr-cord-<?php echo $key; ?>">
								<td><?php echo $oNo++; ?></td>
								<td><a href="<?php echo base_url('quan-tri/thu7/update/'.$item['timeline_id']) ?>"><?php echo $item['places_title'] ?></a></td>

								<td><a href="<?php echo base_url('quan-tri/thu7/update/'.$item['timeline_id']) ?>"><?php echo $item['keysearch'] ?></a></td>

								<td><a href="<?php echo base_url('quan-tri/thu7/update/'.$item['timeline_id']) ?>"><?php if (isset($item['Votes'])) echo $item['Votes'] ?></a></td>

								<td><a href="<?php echo base_url('quan-tri/thu7/update/'.$item['timeline_id']) ?>"><?php if (isset($item['Rank'])) echo $item['Rank'] ?></a></td>
								
								<td><span class="label label-default delete" p="<?php echo $item['timeline_id']; ?>" oNo="<?php echo $key; ?>">X</span></td>
							</tr>
							<?php 
						}
					} else echo '<span class="label label-warning">Not places_title you went!</span>' ?>
					<?php if (isset($link_page)) {
						?>
							<tr>
							
								<td colspan="6" align="center"><?php echo $link_page; ?></td>
								
							</tr>	
						<?php
					} ?>
			</tbody>
	
				
		</table>

	</div>

</div>

<div class="wrapp"></div>
<div class="box">
	<div class="txt"><span>Delete this post! U sure?</span></div>
	<div class="btn-option">
		<button class="cancel">Cancel</button>
		<button class="sure" p="" oNo="">Sure</button>
	</div>
</div>