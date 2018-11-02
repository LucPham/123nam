<title>
	<?php
		if (isset($title_name))
			echo $title_name;
		else
			echo "Pham&LucThis's a blank page";
	?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php if(isset($description)) echo $description ?>">
<meta name="keywords" content="<?php if (isset($keyword)) echo $keyword; ?>">
<meta name="author" content="Pham Van Luc">
<meta name="copyright" content="<?php echo date("Y"); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style2.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive2.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive_chitiet.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/fullscreen.css') ?>">
