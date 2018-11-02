<head>
	<title><?php if (isset($title)) echo $title; else echo 'Timeline'; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="LT">
    <link rel="icon" type="image/png" sizes="30x30" href="<?php echo base_url('public/icon/favicon/fav1.png') ?>">
    <?php
		if (isset($style)) {
			foreach($style as $link) {
			?>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url($link) ?>">
			<?php 
			}
		}
	?>
</head>