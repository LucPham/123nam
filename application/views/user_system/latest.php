<div id="listwrapp-1">
	<div id="text-top">
		<?php 
			if (isset($ob)) {
				if ($ob == 'latest')
					echo '<span>User List Of Latest</span>';
				else 
					echo '<span>User List Of Oldest</span>';
			}
		?>
	</div>
	<div id="list-show">
		
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
</div>