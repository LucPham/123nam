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
<meta name="author" content="123nam">
<meta name="copyright" content="<?php echo date("Y"); ?>">
<meta property="og:image" content="<?php echo base_url('public/hinh_tieu_de/'.$fb_image) ?>">
<meta property="og:description" content="<?php if (isset($fb_description)) echo $fb_description; ?>">
<meta property="og:url" content="<?php if (isset($fb_url)) echo $fb_url; ?>">
<meta property="og:title" content="<?php if (isset($fb_title)) echo $fb_title; ?>">



<link rel="icon" type="image/png" sizes="30x30" href="<?php echo base_url('public/icon/favicon/fav1.png') ?>">
<link rel="manifest" href="<?php echo base_url('public/icon/favicon/manifest.json') ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url('public/icon/favicon/ms-icon-144x144.png') ?>">
<meta name="theme-color" content="#ffffff">

<link rel='stylesheet prefetch' href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/networld_social_icon.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style2.css') ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive_chitiet.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive2.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/styleChitietPhoto.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/lightGallery-master/dist/css/lightgallery.css') ?>">


<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/ie-detail-photo-style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/ie-menu-style.css') ?>">
<![endif]-->



<style type="text/css">
  
            .album-gallery ul li
            {
              width: 100%;height: auto;margin: auto; margin-bottom: 35px;
            }
            .album-gallery ul li img
            {
              margin: auto;
              cursor: pointer;
            }
            .album-gallery ul li a
            {
              color: #333232;
              font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
              margin-top: 20px;
            }
            .album-gallery ul li a:hover
            {
              text-decoration: none;
            }
            .footer
            {
              width: 100%;
              height: 290px;
              border: solid 0.2px #E7E7E7;
              margin-left: 0;
              background-color: #070707
            }
            .contact
            {
              width: 100%;
              height: 250px;
              padding-top: 20px;
              background: #ffffff;  
            }
            .author-img
            {
              width: 100%;
              height: 50%;
              text-align: center
            }
            .author-img a img
            {
              margin-left: 10px;
              border-radius: 60px 60px;
            }
            .networld-social-icon
            {
              text-align: center
            }
            .copyright
            {
              color: #fff;
              text-align: center;
              line-height: 12px;
              font-size: 12px;
            }
  </style>

<script data-cfasync="false">
  (function(r,e,E,m,b){E[r]=E[r]||{};E[r][b]=E[r][b]||function(){
  (E[r].q=E[r].q||[]).push(arguments)};b=m.getElementsByTagName(e)[0];m=m.createElement(e);
  m.async=1;m.src=("file:"==location.protocol?"https:":"")+"//s.reembed.com/G-XEwKb1.js";
  b.parentNode.insertBefore(m,b)})("reEmbed","script",window,document,"api");
</script>

