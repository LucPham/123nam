<div id="a_title">
	<span>album</span>	
</div><!--/a_title-->

<div id="p_album">
	<?php 
		if (isset($album) && !empty($album)) {
			foreach ($album as $key=>$item) {
	?>
		<div id="<?php if ($key==0 || $key%2 == 0) echo 'div_left'; else echo 'div_right' ?>"> 
			<a href="<?php echo site_url('privated/album/'.$item['url'].'/'.$item['id']) ?>"><img src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>" alt="<?php echo $item['tieu_de'] ?>" class="img-responsive"></a>
			<a href="<?php echo site_url('privated/album/'.$item['url'].'/'.$item['id']) ?>"><?php echo $item['tieu_de']; ?></a>
			<p><?php echo $item['created'] ?></p>
		</div>
	<?php 
		}	
	} else echo '<span class="label label-default">Not found</span>';
	?>


</div><!--p_album-->