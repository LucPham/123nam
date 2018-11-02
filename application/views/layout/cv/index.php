<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
	<?php $this->load->view('layout/cv/components/head') ?>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97632563-1', 'auto');
  ga('send', 'pageview');

</script>
    <?php $this->load->view('layout/cv/components/menu') ?>

    <!--/.header-->
    <div id="#top"></div>
    <?php $this->load->view('layout/cv/components/home') ?>
    <?php $this->load->view('layout/cv/components/introText') ?>
    <!--About-->
    <?php $this->load->view('layout/cv/components/aboutUs') ?>
    <!--Quote-->
    <?php $this->load->view('layout/cv/components/quote') ?>
    
    <!--Skills-->
    <?php $this->load->view('layout/cv/components/skills') ?>
    
    <!--Experience-->
    <?php $this->load->view('layout/cv/components/experience') ?>
    
  
   <!--Portfolio-->
    <?php $this->load->view('layout/cv/components/portfolio') ?>

	<!--Contact -->
    <?php $this->load->view('layout/cv/components/contact') ?>

    <?php $this->load->view('layout/cv/components/footer') ?>
    <a href="#top" class="topHome" style="color: #fff"><i class="fa fa-chevron-up fa-2x"></i></a>

    <?php $this->load->view('layout/cv/components/jsLink') ?>
</body>
</html>
