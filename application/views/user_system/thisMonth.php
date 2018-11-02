<div id="wrapp-tmonth-1">
	<div id="current-time">
		<span>Hôm nay: 19/4/2017</span>
	</div>
	<div id="form">
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-3">
					<input type="text" name="day-field" id="day-field" class="form-control" placeholder="Ngày">
				</div>
				<div class="col-md-2 col-sm-3 col-xs-3">
					<input type="text" name="month-field" id="month-field" class="form-control" placeholder="Tháng">
				</div>
				<div class="col-md-2 col-sm-3 col-xs-3">
					<input type="text" name="year-field" id="year-field" class="form-control" placeholder="Năm">
				</div>
				<div class="col-md-2 col-sm-3 col-xs-3">
					<input type="submit" name="lookup" id="lookup" class="btn btn-primary" value="Tìm">
				</div>
			</div>
			
			
			
		</form>
	</div> <!--/form-->

	<div id="statistical">
		<span>Trong tháng 4 có: <?php if (isset($total_rows)) echo $total_rows ?> user đăng ký</span>
	</div>
	<div id="list-show-tmonth">
		<div id="wrapp-table">
		<table class="table">
		<tr>
			<th>stt</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>RegisterDay</th>
			<th>Lock Status</th>
		</tr>
		<?php 
			if (isset($listArr) && !empty($listArr)) {
				if ($this->uri->segment(5))
				{
					$i = ($this->uri->segment(5) - 1)*20;
				} else $i=0;
				foreach ($listArr as $key=>$item) {
					?>

 					<tr>
						<td><?php echo ++$i; ?></td>
						<td><a href="#"><?php echo $item['firstName'] ?></a></td>
						<td><a href="#"><?php echo $item['lastName'] ?></a></td>
						<td><a href="#"><?php echo $item['logDay'].'/'.$item['logMonth'].'/'.$item['logYear'] ?></a></td>
						<td><a href="#"><?php echo $item['lockAcc'] ?></a></td>
					</tr>
					<?php
				}
			} else echo '<span class="label label-default">Not found 404</span>';
		?>	
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $link_page; ?></td>
			<td></td>
			<td></td>
		</tr>
		</table>
		</div><!--/wrapp-table-->
	</div>
</div><!--/wrapp-tmonth-1-->