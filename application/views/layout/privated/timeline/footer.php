<?php  
	if (isset($script)) {
		foreach ($script as $link) {
			?>
			<script type="text/javascript" src="<?php echo base_url($link); ?>"></script>
			<?php
		}
	}

	if (isset($ajaxPhp)) {
	    foreach ($ajaxPhp as $file) {
	        $this->load->view($file);
        }
    }
?>

