<?php 
			if (isset($username) && !empty($username))
			{
				?>
					<div class="media">
					  <div class="media-left">
					      <span class="glyphicon glyphicon-user iconUser"></span>
					  </div>
					  <div class="media-body">
					    <h3 class="media-heading"><?php echo $username['lastName'].' '.$username['firstName'] ?></h3>
					    	<p>Email: <?php echo $username['email'] ?></p>
					    	<p>Ngày sinh: <?php echo $username['ngay_sinh'].'-'.$username['thang_sinh'].'-'.$username['nam_sinh'] ?> <br/>
					    	<p>Giới tính: <?php if($username['gioi_tinh'] == 0) echo 'Nữ'; else echo 'Nam' ?></p>
					  </div>
					</div>
				<?php 
			}
		?>