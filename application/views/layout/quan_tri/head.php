<head>
	<title><?php if (isset($title)) echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="icon" type="image/png" sizes="30x30" href="<?php echo base_url('public/icon/favicon/fav1.png') ?>">

	<link rel="manifest" href="<?php echo base_url('public/icon/favicon/manifest.json') ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url('public/icon/favicon/ms-icon-144x144.png') ?>">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsiveEmega.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/phe_duyet.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/user_system_resp.css') ?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<?php  if (isset($style)) ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/'.$style) ?>">
</head>