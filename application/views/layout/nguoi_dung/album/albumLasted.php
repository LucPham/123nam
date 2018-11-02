<?php  
	if (isset($albumLasted) && !empty($albumLasted))
	{
		foreach ($albumLasted as $item)
		{
			?>
			<ul>
				<li><a href="<?php echo site_url('album/'.$item['url'].'/'.$item['id']) ?>"><?php echo $item['tieu_de'] ?></a></li>
			</ul>
			<?php 
		}
	}
?>