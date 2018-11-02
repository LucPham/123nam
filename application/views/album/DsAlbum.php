<div class="row">
	<div class="col-md-8 col-sm-12 col-xs-12">
		<div class="block_title">
			<a href="#">Album hình</a>
		</div>
		<div class="object">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-sm-12 col-xs-12">
		<?php  
			if (isset($albumData) && !empty($albumData))
			{
				foreach ($albumData as $item)
				{
					?>
						<table class="table"> 
							 <tbody> 
								 <tr> 
									 <td> <!--- IMAGE-->
										 <a href="<?php echo site_url('album/'.$item['url'].'/'.$item['id']) ?>">
										 	<img src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>" class="img-responsive imgTitle" title="<?php echo $item['ten_album'] ?>" alt="<?php echo $item['ten_album'] ?>">
										 </a>
									 </td> <!-- END IMAGE-->
									 <td>
									 	<a href="<?php echo site_url('album/'.$item['url'].'/'.$item['id']) ?>DsAlbum.php" title="<?php echo $item['ten_album'] ?>" alt="<?php echo $item['ten_album'] ?>">
									 	
									 		<?php echo $item['ten_album'] ?>
									 	</a>
									 	<p><?php echo $item['ngay'] ?></p>
									 </td>
								 </tr> 
							 </tbody> 
						 </table>
					<?php
				}
			}
		?>
	</div>
</div>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>
<h1>album hinh</h1>