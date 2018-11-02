<?php  
	if (isset($bannerLeft) && !empty($bannerLeft)) 
	{
		?>
		<a target="_blank" href="<?php if(!empty($bannerLeft['link'])) echo $bannerLeft['link']; else echo '#'; ?>"><img src="<?php echo base_url('public/hinh/banner/'.$bannerLeft['imgName']) ?>" class="img-responsive" style="height: 100%"></a>
		<?php
	}

?>

