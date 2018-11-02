<head>
	<title><?php if (isset($title)) echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($description)) echo $description ?>">
	<meta name="keywords" content="<?php if (isset($keyword)) echo $keyword; ?>">
	<meta name="author" content="L&T">
	<meta name="copyright" content="<?php echo date("Y"); ?>">

	<link rel="icon" type="image/png" sizes="30x30" href="<?php echo base_url('public/icon/favicon/fav1.png') ?>">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/private/layout.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/private/letterTemp.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/private/list.css') ?>">
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