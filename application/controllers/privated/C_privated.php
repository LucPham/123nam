<?php 
	session_start();
	ini_set("display_errors", 0);
	include(APPPATH.'controllers/phpMailer/class.phpmailer.php');
	include(APPPATH.'controllers/phpMailer/class.smtp.php');
	

	class C_privated extends CI_Controller
	{
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('privated/M_privated');
			$this->load->library('session');
			

			$this->userid = $this->issetCookie();

		}
		public function issetCookie()
		{
			$user = null;

			if (isset($_COOKIE['verifyAuthID']) && !$this->session->userdata('id')) {

				$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
				$user = $userArr['id'];
			} else 
				$user = $this->session->userdata('id');

			return $user;
		}
		public function preview()
		{
			$data['message'] = ' Về việc Quốc lộ 1A đã được nhà xe đóng tiền bảo trì hàng năm, sao lại thu thêm phí từ dự án BOT, ông Nguyễn Mạnh Thắng, Phó tổng cục Đường bộ Việt Nam, nói quốc lộ có 24.000 km nhưng kinh phí bảo trì chỉ đáp ứng được 50%, chỗ nào hư hỏng cục bộ thì gỡ bỏ, sửa để làm lại.

			"Đoạn hư hỏng nhiều phải cần từ 5 tỷ, 10 tỷ đến 20 tỷ đồng, còn 26,5 km mà BOT Tiền Giang đầu tư, cần kinh phí hơn 300 tỷ thì không có nguồn bảo trì nào đáp ứng nổi. Do vậy, Chính phủ và Bộ Giao thông cũng đã huy động nhiều nguồn để nâng cấp, cải tạo tuyến quốc lộ, xã hội hóa, BOT hoặc ODA", ông Thắng nói.

			Ông Thắng cho rằng, ngoài sửa tuyến Quốc lộ 1 thì nhà đầu tư còn làm tuyến tránh. Nhà đầu tư bỏ tiền đầu tư ra thì được phép thu phí. Tuy nhiên phải đảm bảo hài hòa giữa việc đảm bảo thu hồi theo hợp đồng đã ký giữa cơ quan nhà nước có thẩm quyền với nhà đầu tư; đảm bảo lợi ích người dân; đảm bảo an ninh trật tự, an toàn xã hội và giao thông thông suốt trên toàn tuyến.';

			$data['$emojisArr'] = $this->M_privated->getTableOrderby('emojiprivate','positionkey','asc');

			$data['_emoji'] = 'love';
			$data['_display'] = 1;
			$this->load->view('layout/email/sendMePrivate');
		}
		public function index()
		{
			
			if (isset($this->userid)) {
					
					$userlover = $this->M_privated->checkLoverUser($this->userid);
					if (isset($userlover) && $userlover != false) {
						$data['title'] = 'Private';
						$data['userlover'] = $userlover;

						
						$data['controlslide'] = $this->M_privated->getControl('slideprivated'); 
						$data['slide'] = $this->M_privated->slide('slideprivated');
						$data['toppost1'] = $this->M_privated->topPost1($this->userid);
						$data['toppost2'] = $this->M_privated->topPost2($this->userid);
						$data['album'] = $this->M_privated->album($this->userid);
						$data['emojis'] = $this->M_privated->getTableOrderby('emojiprivate','positionkey','asc');
						$script = array();
						$script[] = 'layout/ajax/sendMe';
						$data['script'] = $script;
						$this->load->view('layout/privated/index',$data);
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index', $data);
					}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		// index


		public function sendMeAjax()
		{
			if ($this->userid) {
				if (isset($_POST['message']) && isset($_POST['display']) && isset($_POST['emoji'])) {

					$message = $_POST['message'];
					$display = $_POST['display'];
					$emoji = $_POST['emoji'];
					
					if (!empty($message)) {
						if (!is_nan($display)) {
							
							date_default_timezone_set("Asia/Ho_Chi_Minh");
							$_to = $this->M_privated->getItemCond();
							$dataInsert['user'] = $this->userid;
							$dataInsert['_to'] = $_to['id'];
							$dataInsert['message'] = $message;
							$dataInsert['_display'] = $display;
							$dataInsert['_emoji'] = $emoji;
							$dataInsert['_date'] = date(" Y-m-d, H:i:s a");
							$dataInsert['_time'] = time();

							//echo $dataInsert['_to'];

							if ($this->M_privated->insert('sendme',$dataInsert)) {
								
								//sendEmail($message,$mFrom,$mPass,$nTo,$title)

								$userMail = $this->M_privated->getEmailId($dataInsert['_to']);
								
								$mFrom = 'lover@123nam.com';
								$mPass = 'phamluc999';
								$nTo = $userMail['email'];
								$title = 'GỬI NGƯỜI TÌNH NHỎ, ngày '.$dataInsert['_date'];

									
								



								if ($this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 1) {
									$userSend = $this->M_privated->getEmailId($this->userid);

									$toFeedback = $userSend['email'];
									$titleFeedback = 'THƯ XÁC NHẬN LIÊN HỆ';
									$userSent = $this->M_nguoi_dung->getUserFromSession($this->userid);

									$username = $userSent['firstName'];
									$bossname = 'Pham Van Luc';
									$msgFeedback = $this->emailContactPrivateFeedback($message,$username,$bossname,$emoji,$display,$dataInsert['_date']);

									if ($this->sendEmail($msgFeedback,$mFrom,$mPass,$toFeedback,$titleFeedback)) {
										echo 'ok';
									}
										
								} else echo 0;
							} else echo 'err db';
						} else echo 'not a number';
					} else echo 'empty';

				} else echo 'not isset';
			} else echo 'not user';
		}	
		// sendMeAjax

		public function control_ajax()
		{
			if (isset($_POST['ctrl'])) {
				$ctrlval = $_POST['ctrl'];
				if ($ctrlval) {


					if ($ctrlval == 'on') {
						$bool = 0;	
						$controlvalid = 1;
					}
					else {
						$bool = 1;
						$controlvalid = 0;
					}

					if ($this->M_privated->checkControlvalid($bool,'slideprivated') == true) {
						//echo 'true';
						$data['controlvalid'] = $controlvalid;
						
						if ($this->M_privated->update('tablename','slideprivated','control',$data)) 
							echo 1;
						else echo 0;

					} 


				} // ctrlval
			} // isset


		} // control_ajax




		public function delete_ajax()
		{
			if (isset($_POST['idt'])) {
				$id = $_POST['idt'];
				$idkey = $_POST['idkey'];
				if (isset($id) && is_nan($id) != 1) {
					
					if ($this->M_privated->delete($id,$idkey,'slideprivated') != false) 
						echo 1;
					else echo 0;	

				} else echo 'not a number';
			}
		}

		public function slide_system()
		{
			if (isset($this->userid)) {

				$data['control'] = $this->M_privated->getRow('tablename','slideprivated','control');
				$data['data'] = $this->M_privated->slideUsing('slideprivated');
				$active = 1;
				if (isset($_POST['btn'])) {
					foreach ($_FILES['slidefile']['tmp_name'] as $key=>$val) {
						echo $_POST['caption'][$key]."<br/>";
						echo $_FILES['slidefile']['name'][$key]."<br/>";

						

						if ($_FILES['slidefile']['name'][$key] != '') {
							// if isset new file
							$imagetype = array('image/jpg','image/png','image/jpeg', 'image/gif');
							

							if (in_array($_FILES['slidefile']['type'][$key], $imagetype)) {

								if ($_FILES['slidefile']['size'][$key] > 1048576) {
									$active = 0;
									$data['errfileSize'] = 'Vui lòng chọn ảnh có kích thước nhỏ hơn 1Mb';
									echo 'Vui lòng chọn ảnh có kích thước nhỏ hơn 1Mb';
									break;

								}
							} else {
								$active = 0; 
								$data['errFiletype'] = 'Vui lòng chọn 1 file hình'; 
								break;
							}

						} else {
							// not isset new file
							echo $key.' not image<br/>';
						}

					} // foreach

					if ($active == 1) {
						foreach ($_FILES['slidefile']['tmp_name'] as $key=>$val) {
							$idkey = $key+1;
							if ($_FILES['slidefile']['name'][$key] != '') {
								// if isset new file --> insert
								$idkeyupdate = array();
								$idkeyupdate[$key] = $idkey;

								$_FILES['slidefile']['name'][$key] = time().$idkey.'.'.explode(".", $_FILES['slidefile']['name'][$key])[1];

								$dataSlide['caption'] = $_POST['caption'][$key];
								$dataSlide['image'] = $_FILES['slidefile']['name'][$key];
								$dataSlide['idkey'] = $idkey;
								$dataSlide['created'] = date("l j\/m\/Y\, h:i:s a");

								move_uploaded_file($_FILES['slidefile']['tmp_name'][$key], './public/privated/slide_img/'.$dataSlide['image']);


								$dataReset['idkey'] = 0;

								//update: reset idkey = 0

								try {
									$this->M_privated->updateIdkey('slideprivated', $idkey, $dataReset);
								} catch (Exception $e) {
									$data['errDb'] = $e->getMessage();
								}
								

								// insert: new slide
								try {
									$this->M_privated->insert('slideprivated',$dataSlide);
								} catch (Exception $e) {
									$data['errDb'] = 'Có lỗi trong quá trình thêm dữ liệu (slideprivated table): '.$e->getMessage();
								}

							} else {
								$dataSlideUpdate['caption'] = $_POST['caption'][$key];
								try {
									$this->M_privated->updateCond('slideprivated',$dataSlideUpdate,$idkey);
								} catch (Exception $e) {
									$data['errDb'] = $e->getMessage();
								}


							}
						}	
					} // active
				} // submit
				





				$data['title'] = 'Slide System - 123nam';
				$data['path'] = 'layout/privated/slide_upload';
				$data['script'] = 'layout/ajax/slidePrivate';
				$this->load->view('layout/quan_tri/layoutAdmin', $data);


			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		// slide

		public function emailContactPrivateFeedback($msgSent,$username,$bossname,$emoji,$display,$topic)
		{
			$emojis = array();
			$displayArr = array(1=>'show',0=>'Hide');
			$emojiArr = $this->M_privated->getTableOrderby('emojiprivate','positionkey','asc');
			
			if (!empty($emojiArr)) {
				foreach ($emojiArr as $emoji) {
					$emojis[$emoji['id']] = $emoji['emojiname']; 
				}
			}

			$message = '<!DOCTYPE html>'.
				'<html>'.
				'<head>'.
					'<title>Send me</title>'.
					
					'<meta name="viewport" content="width=divice-width,initial-scale=1.0">'.
					'<style type="text/css">'.
						'@media all and (max-width: 320px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}'.
							'#body {width: 98%;height: auto;background: #FFF; margin: auto}'.
							'#logoweb {width: 95%;height: auto;}'.
							'#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 25px; font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 16px; color: #757272}'.
							'#message {padding: 10px;}'.
							'#optionmail span:first-child {margin-right: 30px;}'.
							'#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 18px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.
						'}'.
						'@media all and (min-width: 321px) and (max-width: 480px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}'.
							'#body {width: 98%;height: auto;background: #FFF; margin: auto}'.
							'#logoweb {width: 95%;height: auto;}'.
							'#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 25px; font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 18px; color: #757272}'.
							'#optionmail span:first-child {margin-right: 50px;}'.
							'#message {padding: 10px;}'.
							'#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px;}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 18px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.
						'}'.
						'@media all and (min-width: 481px) and (max-width: 600px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}'.
							'#body {width: 98%;height: auto;background: #FFF; margin: auto}'.
							'#logoweb {width: 95%;height: auto;}'.
							'#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 25px;font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 20px; color: #757272}'.
							'#message {padding: 10px;}'.
							'#optionmail span:first-child {margin-right: 50px;}'.
							'#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px;}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 18px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.
						'}'.
						'@media all and (min-width: 601px) and (max-width: 800px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;height: auto;background: #BCBABA;overflow-y: hidden;}'.
							'#body {width: 98%;height: auto;background: #FFF; margin: auto}'.
							'#logoweb {width: 95%;height: auto;}'.
							'#titlemail {width: 100%;height: auto;padding-top: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 25px;font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 18px; color: #757272}'.
							'#message {padding: 10px;}'.
							'#optionmail span:first-child {margin-right: 50px;}'.
							'#user {width: 100%; height: 30px; padding-top: 30px;padding-left: 10px}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 18px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.
						'}'.
						'@media all and (min-width: 801px) and (max-width: 1024px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;min-height: 500px;background: #BCBABA;padding: 20px;padding-top: 80px;}'.
							'#body {width: 90%;height: auto;background: #FFF;margin: auto;}'.
							'#logoweb {width: 320px;height: auto;padding: 20px;}'.
							'#titlemail {width: 100%;height: auto;padding-left: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 35px;margin-left: 8px;font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 18px; color: #757272}'.
							'#optionmail span:first-child {margin-right: 50px;}'.
							'#message {padding: 10px;}'.
							'#user {width: 100%; height: 30px; padding-top: 30px; padding-left: 10px;}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 18px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.
						'}'.
						'@media all and (min-width: 1025px)'.
						'{'.
							'body {'.
								'margin: 0;'.
								'padding: 0;'.
								'overflow-y: hidden'.
							'}'.
							'#wrapp {width: 100%;min-height: 500px;background: #BCBABA;padding-top: 30px; overflow-y: hidden}'.
							'#body {width: 80%;height: auto;background: #FFF;margin: auto;overflow-y: hidden}'.
							'#logoweb {width: 80%;height: auto;padding: 20px;}'.
							'#titlemail {width: 100%;height: auto;padding-left: 10px;border-bottom: solid 4px #04B429}'.
							'#titlemail span {text-transform: uppercase;font-size: 35px;font-family: "Open Sans",arial,sans-serif;}'.
							'#optionmail {width: 80%;height: 30px; padding: 10px;}'.
							'#optionmail span {display: inline; font-weight: bold; font-family: "Open Sans",arial,sans-serif; font-size: 18px; color: #757272}'.
							'#optionmail span:first-child {margin-right: 50px;}'.
							
							'#message {padding: 10px;}'.

							'#user {width: 100%; height: 30px; padding-top: 30px; padding-left: 10px;}'.
							'#user span {font-family: "Open Sans",arial,sans-serif; font-weight: bold; font-size: 25px;}'.
							'#footer {width: 100%;height: auto; padding-left: 10px; padding-top: 120px;}'.
							'#footer p {color: #C0B9B9}'.
							'#footer p a {text-decoration: none}'.

						'}'.
					'</style>'.
				'</head>'.
				'<body>'.

					'<div id="wrapp">'.
						'<div id="body">'.
							'<div id="logoweb"><img src="'.base_url("public/icon/ava.png").'"></div>'.
							

							'<div id="titlemail">'.
								'<span>'.$topic.'</span>'.
							'</div>'.
							'<div id="message">'.
								'<span>'.
									'<p>Xin chào '.$username.'</p>'.
									'<p>Cảm ơn bạn đã gửi liên hệ tới 123nam, thư của bạn đã được gửi tới chúng tôi với nội dung: </p>'.
									'<p><b>'.$msgSent.'</b></p>'.
									'<p>Cảm ơn bạn đã tương tác với 123nam, xin chào và hẹn gặp lại.</p>'.
								'</span>'.
							'</div>'.

							'<div id="user">'.
								'<span>'.$bossname.'</span>'.
							'</div>'.


							'<div id="footer">'.
								'<p><a href="http://123nam.com/" target="_blank">123nam.com</a></p>'.
								'<p>Phạm Văn Lực</p>'.
								'<p>Email: contact@123nam.com</p>'.
								'<p>Facebook:<a href="http://facebook.com/lucpham.1995">http://facebook.com/lucpham.1995</a></p>'.
							'</div>'.
						'</div>'.
					'</div>'.
					
				'</body>'.
				'</html>';

				return $message;

		}

		public function sendEmail($message,$mFrom,$mPass,$nTo,$title)
		{
			$nFrom = "123NAM";    //mail duoc gui tu dau, thuong de ten cong ty ban
		    //$mFrom = 'account@123nam.com';  //dia chi email cua ban 
		    //$mPass = 'phamluc999';       //mat khau email cua ban
		    //$nTo = $email; //Ten nguoi nhan
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->CharSet  = "utf-8";
			$mail->SMTPDebug  = 0;
			$mail->SMTPAuth   = true;    // enable SMTP authentication
		    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
		    $mail->Host       = "mail.123nam.com";    // sever gui mail.
		    $mail->Port       = 465;         // cong gui mail de nguyen
		    // xong phan cau hinh bat dau phan gui mail
		    $mail->isHTML(true);
		    $mail->Username   = $mFrom;  // khai bao dia chi email
		    $mail->Password   = $mPass;              // khai bao mat khau
		    $mail->SetFrom($mFrom, $nFrom);
		    $mail->AddReplyTo('lover@123nam.com', '123nam.com'); //khi nguoi dung phan hoi se duoc gui den email nay
		    $mail->Subject    = $title;// tieu de email 
		    $mail->MsgHTML($message);// noi dung chinh cua mail se nam o day.
		    $mail->AddAddress($nTo);
			if(!$mail->Send()) {
		      return 0;
		    } else {
		       return 1;
		    }
		}

	}

?>