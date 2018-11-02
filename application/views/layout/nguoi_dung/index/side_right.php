<?php  
	if (isset($bannerRight) && !empty($bannerRight)) 
	{
		?>
		<a target="_blank" href="<?php if(!empty($bannerRight['link'])) echo $bannerRight['link']; else echo "#"; ?>"><img src="<?php echo base_url('public/hinh/banner/'.$bannerRight['imgName']) ?>" class="img-responsive adv-img" style="height: 100%; width: 100%"></a>
		<?php
	}

?>


