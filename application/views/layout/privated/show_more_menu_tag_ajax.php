<?php 
	$url = array(
			'mytag'=>array(
				'photo'=>base_url('privated/photo'),
				'detail'=>base_url('privated'),
				'emegazine'=>base_url('privated/emagazine')
				
			),
			'album'=>'http://123nam.com/privated/album/'

		);
		$image_href = array(
			'mytag' => array(
				'detail'=>base_url('public/hinh_tieu_de/'),
				'photo'=>base_url('public/hinh_tieu_de/'),
				'emegazine'=>base_url('public/EmegazineImage/title/')
			),
			'album' => base_url('public/album/hinh_tieu_de/')
		);
?>
<?php if (isset($dataArr) && !empty($dataArr)) {
			foreach ($dataArr as $item) {

	?>	
			<div class="item-wrapp">
				<?php 
				
					if ($tablename == 'mytag') {
						$link =  $url[$tablename][$item['typenews']].'/'.$item['url'].'/'.$item['id'].'.html';
						$src =  $image_href[$tablename][$item['typenews']].'/'.$item['hinh'];
					}
					else {
						$link = $url[$tablename].$item['url'].'/'.$item['id'].'.html';
						$src =  $image_href[$tablename].'/'.$item['hinh'];
					}
				?>
	
					<div id="img-list">
						<a href="<?php echo $link; ?>"><img src="<?php echo $src; ?>" class="img img-responsive"></a>
					</div>

				
					<div id="title-list">
						<a href="<?php echo $link; ?>"><?php echo $item['tieu_de']; ?></a>
						<p><?php echo $item['created'] ?></p>
					</div>

				
			</div>
	<?php } } ?>
	<?php if ($nextpageisset != false) { ?>
			<div id="wrapp-button-<?php echo $pagenext; ?>" class="showmore">
				<div id="loading-<?php echo $pagenext; ?>" style="display: none;"><img src="<?php echo base_url('public/icon/reload.gif') ?>"></div>
				<button id="showmorebtn" href="<?php echo $pagenext; ?>">Show more</button>
			</div>
	<?php } ?>

	