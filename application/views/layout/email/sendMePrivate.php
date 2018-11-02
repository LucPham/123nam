<!DOCTYPE html>
<html>
<head>
	<title>Send me</title>
	
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">
	<style type="text/css">
		@media all and (max-width: 320px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}
			#body {width: 98%;height: auto;background: #FFF; margin: auto}
			#logoweb {width: 95%;height: auto;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 25px; font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 16px; color: #757272}
			#message {padding: 10px;}
			#optionmail span:first-child {margin-right: 30px;}
			#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 18px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}
		}
		@media all and (min-width: 321px) and (max-width: 480px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}
			#body {width: 98%;height: auto;background: #FFF; margin: auto}
			#logoweb {width: 95%;height: auto;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 25px; font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 18px; color: #757272}
			#optionmail span:first-child {margin-right: 50px;}
			#message {padding: 10px;}
			#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px;}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 18px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}
		}
		@media all and (min-width: 481px) and (max-width: 600px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}
			#body {width: 98%;height: auto;background: #FFF; margin: auto}
			#logoweb {width: 95%;height: auto;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 25px;font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 20px; color: #757272}
			#message {padding: 10px;}
			#optionmail span:first-child {margin-right: 50px;}
			#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px;}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 18px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}
		}
		@media all and (min-width: 601px) and (max-width: 800px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}
			#body {width: 98%;height: auto;background: #FFF; margin: auto}
			#logoweb {width: 95%;height: auto;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 25px;font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 20px; color: #757272}
			#message {padding: 10px;}
			#optionmail span:first-child {margin-right: 50px;}
			#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 18px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}
		}
		@media all and (min-width: 801px) and (max-width: 1024px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;min-height: 900px;background: #BCBABA;padding: 20px;padding-top: 80px;}
			#body {width: 90%;height: auto;background: #FFF;margin: auto;}
			#logoweb {width: 320px;height: auto;padding: 20px;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 45px;margin-left: 8px;font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 20px; color: #757272}
			#optionmail span:first-child {margin-right: 50px;}
			#message {padding: 10px;}
			#user {width: 100%; height: 30px; padding-top: 30px; padding-left: 10px;}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 18px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}
		}
		@media all and (min-width: 1025px)
		{
			body {
				margin: 0;
				padding: 0;
				overflow-y: hidden
			}
			#wrapp {width: 100%;min-height: 900px;background: #BCBABA;padding-top: 30px; overflow-y: hidden}
			#body {width: 80%;height: auto;background: #FFF;margin: auto;overflow-y: hidden}
			#logoweb {width: 80%;height: auto;padding: 20px;}
			#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}
			#titlemail span {text-transform: uppercase;font-size: 45px;font-family: 'Open Sans',arial,sans-serif;}
			#optionmail {width: 80%;height: 30px; padding: 10px;}
			#optionmail span {display: inline; font-weight: bold; font-family: 'Open Sans',arial,sans-serif; font-size: 20px; color: #757272}
			#optionmail span:first-child {margin-right: 50px;}
			
			#message {padding: 10px;}

			#user {width: 100%; height: 30px; padding-top: 30px; padding-left: 10px;}
			#user span {font-family: 'Open Sans',arial,sans-serif; font-weight: bold; font-size: 25px;}
			#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}
			#footer p {color: #C0B9B9}
			#footer p a {text-decoration: none}

		}
	</style>
</head>
<body>

	<div id="wrapp">
		<div id="body">
			<div id="logoweb"><img src="<?php echo base_url('public/icon/ava.png') ?>"></div>
			<!--/LOGO-->

			<div id="titlemail">
				<span>Ngay 12-13/08/2017</span>
			</div>

			<div id="optionmail">
				<span>Display: show</span>
				<span>Emoji: love</span>
			</div>
			
			<div id="message">
				<span>
					<p>Xin chào <@>USERNAME</@></p>
					<p>Cảm ơn bạn đã gửi liên hệ tới 123nam, thư của bạn đã được gửi tới chúng tôi với nội dung: </p>
					<p><b>@MESSAGE</b></p>
					<p>Cảm ơn bạn đã tương tác với 123nam, xin chào và hẹn gặp lại.</p>
				</span>
			</div>

			<div id="user">
				<span>$BOSS</span>
			</div>


			<div id="footer">
				<p><a href="http://123nam.com/" target="_blank">123nam.com</a></p>
				<p>Phạm Văn Lực</p>
				<p>Email: contact@123nam.com</p>
				<p>Facebook:<a href="http://facebook.com/lucpham.1995">http://facebook.com/lucpham.1995</a></p>
			</div>
		</div>		
	</div>
	
</body>
</html>