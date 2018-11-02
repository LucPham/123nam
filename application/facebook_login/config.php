<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '550616105142536'; //Facebook App ID
$appSecret = 'debcf6d404d554a080f25b9b8549ec04'; // Facebook App Secret
$homeurl = 'http://localhost/ngayvang/homeCI/facebook_login/index.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>