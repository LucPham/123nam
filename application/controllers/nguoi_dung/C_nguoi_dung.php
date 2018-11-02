<?php
	session_start();
	ini_set('display_errors',0);
	include (APPPATH.'controllers/phpMailer/class.phpmailer.php');
	include (APPPATH.'controllers/phpMailer/class.smtp.php');
	class C_nguoi_dung extends CI_Controller
	{
		private $header;
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('nguoi_dung/M_nguoi_dung');
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
		public function profileIndex()
		{
			if ($this->userid)
			{
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
				$data['title'] = $data['username']['lastName'].' '.$data['username']['firstName'].' - 123Nam';
				$data['path'] = 'profile/index';
				$this->load->view('layout/nguoi_dung/profile/layoutProfile',$data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function profileUpdate()
		{
			if ($this->userid)
			{
				if (isset($_POST['firstName']))
				{
					if (!empty($_POST['firstName']))
						$dataUpdate['firstName'] = $_POST['firstName'];
					else $data['err'] = 'Vui lòng nhập đầy đủ thông tin!';
				} 
				if (isset($_POST['lastName'])) {
					if (!empty($_POST['lastName']))
						$dataUpdate['lastName'] = $_POST['lastName'];
					else $data['err'] = 'Vui lòng nhập đầy đủ thông tin!';
				} 
				if (isset($_POST['ngay_sinh'])) {
					if (!empty($_POST['ngay_sinh']))
						$dataUpdate['ngay_sinh'] = $_POST['ngay_sinh'];
					else $data['err'] = 'Vui lòng nhập đầy đủ thông tin!';
				} 
				if (isset($_POST['thang_sinh'])) {
					if (!empty($_POST['thang_sinh']))
						$dataUpdate['thang_sinh'] = $_POST['thang_sinh'];
					else $data['err'] = 'Vui lòng nhập đầy đủ thông tin!';
				} 
				if (isset($_POST['nam_sinh'])) {
					if (!empty($_POST['nam_sinh']))
						$dataUpdate['nam_sinh'] = $_POST['nam_sinh'];
					else $data['err'] = 'Vui lòng nhập đầy đủ thông tin!';
				} 
				if (isset($dataUpdate) && !empty($dataUpdate)){
					//var_dump($dataUpdate);
					$pattern = '/^[a-zA-Z0-9\s-_@]+$/';
					if (preg_match($pattern, $dataUpdate['firstName']) && preg_match($pattern, $dataUpdate['lastName']))
					{
						if ($this->M_nguoi_dung->updateTableUser('user',$this->userid,$dataUpdate)) {
							$data['success'] = true;
						} else $data['err'] = 'Đã có lỗi trong quá trình xử lý dữ liệu, vui lòng thực hiện lại!';
					} else $data['err'] = 'Có một vài ký tự ở họ, tên của bạn mà chúng tôi không khuyến khích dùng, bạn vui lòng nhập đúng tên của mình';
					
				}
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
				$data['title'] = 'Cập nhật thông tin - '.$data['username']['lastName'].' '.$data['username']['firstName'];
				$data['path'] = 'profile/profileUpdate';

				$this->load->view('layout/nguoi_dung/profile/layoutProfile',$data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function changeEmailHandle()
		{
			$data['title'] = 'Xác nhận thay đổi Email - 123Năm';
				$token = $_GET['tku'];
				$timeCreated = $_GET['texp'];
				if (isset($token) && !empty($token))
				{
					if (isset($timeCreated) && !empty($timeCreated))
					{
						$checkTokenTime = $this->M_nguoi_dung->checkTokenAndTimeTable('profile_token',$token,$timeCreated);
						if ($checkTokenTime != false)
						{
							$expired = (time()-$timeCreated)/(60*60);
							if ($expired <= 24)
							{
								$dataUpdateUserEmail['email'] = $checkTokenTime['email'];
								$idUser = $checkTokenTime['userid'];
								if ($this->M_nguoi_dung->updateTableUser('user',$idUser,$dataUpdateUserEmail))
									$data['successInfo'] = $checkTokenTime;

							} else $data['err'] = 'Đường dẫn này đã hết hạn sau 24h!';
						} else $data['err'] = 'Đường dẫn này không có, bạn vui lòng kiểm tra lai!';
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			$data['path'] = 'profile/emailVerify';
			$this->load->view('layout/nguoi_dung/profile/layoutProfile',$data);
		}
		public function updateEmailHandle()
		{
			if ($this->userid)
			{
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
				$data['title'] = $data['username']['lastName'].' '.$data['username']['firstName'].' - 123Nam';

				if (isset($_POST['changeEmailBtn']))
				{
					$email = $_POST['email'];
					$password = $_POST['pw'];
					if (!empty($email) && !empty($password))
					{
						if (strcasecmp($email,$data['username']['email']) != 0)
						{
							$escapePW = $this->M_nguoi_dung->escapeStr($password);

							$row = $this->M_nguoi_dung->getSaltPW($data['username']['email']);
							$salt = $row['salt'];
							$saltedPW = $escapePW.$salt;
							$hashPW = hash('sha256', $saltedPW);
							$result = $this->M_nguoi_dung->dang_nhap($data['username']['email'],$hashPW);
							if ($result != false && !empty($result))
							{
								if ($this->M_nguoi_dung->kiem_tra_email($email) == false)
								{
									//send email
								//$this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 0
								$dataInsert['token'] = hash('sha256',rand());
								$dataInsert['email'] = $email;
								$dataInsert['userid'] = $this->userid;
								$dataInsert['date'] = date("Y-m-d h:i:sa");
								$dataInsert['expired'] = time();

								if ($this->M_nguoi_dung->checkTokenIssetTable($this->userid,'profile_token') !=false)
								{
									//update
									if ($this->M_nguoi_dung->updateTable('profile_token',$this->userid,$dataInsert))
									{
										$userinfo = $this->M_nguoi_dung->getTokenProfile($this->userid);
										$title = 'Xác nhận thay đổi địa chỉ email';
										$link = site_url().'email-active-verify?tku='.$userinfo['token'].'&texp='.$userinfo['expired'];
										$message = '<!DOCTYPE html>
												<html>
												<head>
													<title>'.$title.'</title>
												</head>
												<body>
												<p>Xin chào <b>'.$data['username']['firstName'].'</b></p>
												<p>Bạn hoặc ai đó vừa sử dụng địa chỉ email này trên 123Nam.com, bạn hãy  <p><a href="'.$link.'">truy cập vào đường dẫn này</a></p> để xác nhận với chúng tôi, hoặc bạn có thể copy link sau: <p><b>'.$link.'</b></p> và dán vào trình duyệt, đường dẫn này sẽ hết hạn sau 24h. <a href="'.base_url().'" title="123 Năm">123 Năm</a></p>
												<p>Trân trọng! Chúc bạn luôn vui vẻ</p>
												<p><b>Đội ngũ 123 Năm</b></p>	
												</body>
												</html>';
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$nTo = $email;
										if ($this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 0) {
											$data['Err'] = 'Rất đáng tiếc, đã có lỗi trong quá trình xử lý bạn vui lòng nhập lại email của mình và gửi lại một lần nữa.';
										} else {
											$data['success'] = 'Chúng tôi đã gửi một email kèm với đường dẫn để hoàn tất quá trình đổi email trên tài khoản này. Nếu bạn không tìm thấy trong <b>hộp thư đến</b> của mình thì bạn có thể tìm trong thư mục <b><span style="font-size:15px">spam</span></b>, bạn vui lòng chú ý!';
										}
									} else $data['err'] = 'Có lỗi trong quá trình xác nhận email, vui lòng thử lại!';
								} else {
									//insert
									if ($this->M_nguoi_dung->insert('profile_token', $dataInsert))
									{
										$userinfo = $this->M_nguoi_dung->getTokenProfile($this->userid);
										$title = 'Xác nhận thay đổi địa chỉ email';
										$link = site_url().'email-active-verify?tku='.$userinfo['token'].'&texp='.$userinfo['expired'];
										$message = '<!DOCTYPE html>
												<html>
												<head>
													<title>'.$title.'</title>
												</head>
												<body>
												<p>Xin chào <b>'.$data['username']['firstName'].'</b></p>
												<p>Bạn hoặc ai đó vừa sử dụng địa chỉ email này trên 123Nam.com, bạn hãy  <p><a href="'.$link.'">truy cập vào đường dẫn này</a></p> để xác nhận với chúng tôi, hoặc bạn có thể copy link sau: <p><b>'.$link.'</b></p> và dán vào trình duyệt, đường dẫn này sẽ hết hạn sau 24h. <a href="'.base_url().'" title="123 Năm">123 Năm</a></p>
												<p>Trân trọng! Chúc bạn luôn vui vẻ</p>
												<p><b>Đội ngũ 123 Năm</b></p>	
												</body>
												</html>';
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$nTo = $email;
										if ($this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 0) {
											$data['Err'] = 'Rất đáng tiếc, đã có lỗi trong quá trình xử lý bạn vui lòng nhập lại email của mình và gửi lại một lần nữa.';
										} else {
											$data['success'] = 'Chúng tôi đã gửi một email kèm với đường dẫn để hoàn tất quá trình đổi email trên tài khoản này. Nếu bạn không tìm thấy trong <b>hộp thư đến</b> của mình thì bạn có thể tìm trong thư mục <b><span style="font-size:15px">spam</span></b>, bạn vui lòng chú ý!';
										}
									} else $data['err'] = 'Có lỗi trong quá trình xác nhận email, vui lòng thử lại!';
								}
								} else $data['err'] = 'Email này đã được sử dụng!';
							} else $data['err'] = 'Mật khẩu chưa chính xác!';
						} else $data['errInfo'] = 'Email mới của bạn giống với email hiện tại, như vậy bạn không cần phải thay đổi nữa!';
					} else $data['err'] = 'Vui lòng nhập email mà bạn muốn thay đổi và mật khẩu của bạn!';
				}
				$data['path'] = 'profile/formUpdateEmail';
				$this->load->view('layout/nguoi_dung/profile/layoutProfile',$data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function changed_password()
		{
			$data['title'] = 'Đổi mật khẩu - 123 Năm';
			if ($this->userid)
			{
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
				if (isset($_POST['submit']))
				{
					if (isset($_COOKIE['verifyAuthID']))
					{
						$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
						$email = $userArr['email'];
					}
					if ($this->session->userdata('id') && !isset($_COOKIE['verifyAuthID']))
					{
						$userArr = $this->M_nguoi_dung->getUserFromSession($this->session->userdata('id'));
						$email = $userArr['email'];
					}
					$pwOld = $this->M_nguoi_dung->escapeStr($_POST['pwold']);
					$pwNew = $this->M_nguoi_dung->escapeStr($_POST['pwnew']);
					$repwNew = $this->M_nguoi_dung->escapeStr($_POST['repwnew']);
					if ($pwOld != "''" && $pwNew != "''" && $repwNew != "''")
					{
						$row = $this->M_nguoi_dung->getSaltPW($email);
						if ($row != false)
						{
							$salt = $row['salt'];
							$saltedPW = $pwOld.$salt;
							$hashPW = hash('sha256', $saltedPW);
							$checkPWOld = $this->M_nguoi_dung->dang_nhap($email,$hashPW);
							if ($checkPWOld != false)
							{
								if (strcasecmp($pwNew, $repwNew) == 0)
								{
									$saltNew = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
									$saltPWNew = $pwNew.$saltNew;
									$saltRePWNew = $repwNew.$saltNew;
									$hashPWNew = hash('sha256', $saltPWNew);
									$hashRePWNew = hash('sha256', $saltRePWNew);
									$dataUpdate['password'] = $hashPWNew;
									$dataUpdate['salt'] = $saltNew;
									$dataUpdate['re_pass'] = $hashRePWNew;

									$updatePW = $this->M_nguoi_dung->update('user', $dataUpdate, $email);
									if ($updatePW)
										$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Mật khẩu của bạn đã được thay đổi.';
									else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Đã có lỗi trong quá trình thay đổi mật khẩu, bạn vui lòng thử lại.';

								} else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Mật khẩu mới và xác nhận mật khẩu chưa giống nhau';
							} else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Mật khẩu cũ chưa chính xác';
						} else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Không tìm thấy thông tin tài khoản này';
					} else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Vui lòng nhập đầy đủ thông tin.';
				}
				$data['path'] = 'user/changedPW';
				$this->load->view('layout/user/layoutResetPassword', $data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function resetPW()
		{
			$token =  $_GET['tku'];
			$time = $_GET['tcr'];
			if (!empty($token) && !empty($time))
			{
				$checkTokenTime = $this->M_nguoi_dung->checkTokenAndTime($token, $time);
				if ($checkTokenTime != false)
				{	
						$timeCreated = $checkTokenTime['time'];
						$expire = (time() - $timeCreated)/60/60;
			 	 		if ($expire < 24)
			 	 		{
			 	 			if (isset($_POST['resetBtn']) && $_POST['resetBtn'] != '')
			 	 			{
		 	 					$password = $_POST['password'];
				 	 			$repassword = $_POST['re-password'];
				 	 			$email = $checkTokenTime['email'];
				 	 			if ($password != '' && $repassword != '')
				 	 			{
				 	 				if (strcasecmp($password, $repassword) == 0)
				 	 				{
				 	 					$escapePW = $this->M_nguoi_dung->escapeStr($password);
										$escapeRe_pass = $this->M_nguoi_dung->escapeStr($repassword);
										$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
										$saltedPW = $escapePW.$salt;
										$saltedRe_pass = $escapeRe_pass.$salt;
										$dataUpdate['salt'] = $salt;
										$dataUpdate['password'] = hash('sha256', $saltedPW); //password to insert to database
										$dataUpdate['re_pass'] = hash('sha256', $saltedRe_pass);
										$update = $this->M_nguoi_dung->update('user', $dataUpdate, $email);
										if ($update)
										{
											$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Mật khẩu của bạn đã được đặt lại thành công.';
										} else $data['errVerifyPW'] = '<span class="glyphicon glyphicon-alert"></span> Có lỗi trong quá trình đặt lại mật khẩu bạn vui lòng thử lại.';
				 	 				} else $data['errVerifyPW'] = '<span class="glyphicon glyphicon-alert"></span> Mật khẩu & xác nhận mật khẩu chưa giống nhau.';
				 	 			} else $data['formErr'] = '<span class="glyphicon glyphicon-alert"></span> Vui lòng nhập đầy đủ mật khẩu và xác nhận mật khẩu.';
			 	 			}
			 	 		} else $data['expireOut'] = 'Chức năng này đã hết hạn sau 24h, bạn vui lòng thực hiện lại, <a href="#">quên mật khẩu</a>';
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			$data['title'] = 'User password verify';
			$data['path'] = 'user/resetPWForm';
			$this->load->view('layout/user/layoutResetPassword',$data);
		}
		public function forgetPasswordIndex()
		{
			$data['title'] = 'Quên mật khẩu - 123 Năm';
			if (isset($_POST['submitEmail']) && $_POST['submitEmail'] != '')
			{
				$email = $_POST['email'];
				if (!empty($email))
				{
					$emailChecked = $this->M_nguoi_dung->kiem_tra_email($email);
					if ($emailChecked === true)
					{
						$emailCheckedResetPWTable = $this->M_nguoi_dung->kiem_tra_email_resetPWtalble($email);
						if ($emailCheckedResetPWTable === true)
						{
							// updater
							$id = $this->M_nguoi_dung->getUSerid($email);
							$dataUpdate['userid'] = $id['id'];
							$dataUpdate['email'] = $email;
							$dataUpdate['token'] = hash('sha256',rand());
							$dataUpdate['time'] = time();
							$update = $this->M_nguoi_dung->update('resetpwtable', $dataUpdate, $email);
							$title = 'Xác nhận quên mật khẩu';
							if ($update)
							{
								$link = site_url().'user-password-verify?tku='.$dataUpdate['token'].'&tcr='.$dataUpdate['time'];
								$message = '<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào <b>'.$id['firstName'].',</b></p>
											<p>Bạn hoặc ai đó vừa bắt đầu quá trình xác nhận để lấy lại mật khẩu trên 123 Năm, bạn hãy  <p><a href="'.$link.'">truy cập vào đường dẫn này</a></p> để đặt lại mật khẩu của mình, <p>hoặc bạn có thể copy link sau:</p> <p><b>'.$link.'</b></p> và dán vào trình duyệt, đường dẫn này sẽ hết hạn sau 24h. <a href="'.base_url().'" title="123 Năm">123 Năm</a></p>
											<p>Trân trọng! Chúc bạn luôn vui vẻ</p>
											<p><b>Đội ngũ 123 Năm</b></p>	
											</body>
											</html>';

								$nFrom = "123nam.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
							    $mFrom = 'account@123nam.com';  //dia chi email cua ban 
							    $mPass = 'phamluc999';       //mat khau email cua ban
							    $nTo = $email; //Ten nguoi nhan
								
								if($this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 0) {
							       $data['emailNull'] = 'Rất đáng tiếc, đã có lỗi trong quá trình xử lý bạn vui lòng nhập lại email của mình và gửi lại một lần nữa.';
							         
							    } else {
							       $data['sendSuccess'] = 'Chúng tôi đã gửi một email kèm với đường dẫn để bạn có đặt lại mật khẩu của mình. Nếu bạn không tìm thấy trong <b>hộp thư đến</b> của mình thì bạn có thể tìm trong thư mục <b><span style="font-size:20px">SPAM</span></b>, bạn vui lòng chú ý!';
							    }
							} else $data['emailNull'] = '<span class="glyphicon glyphicon-alert"></span> Có lỗi trong quá trình xử lý email, bạn vui lòng nhập lại email này';
						} else {
							// insert
							//$this->load->library('email');
							$id = $this->M_nguoi_dung->getUSerid($email);
							$dataInsert['userid'] = $id['id'];
							$dataInsert['email'] = $email;
							$dataInsert['token'] = hash('sha256',rand());
							$dataInsert['time'] = time();
							$insert = $this->M_nguoi_dung->insert('resetpwtable', $dataInsert);
							$title = 'Xác nhận quên mật khẩu';
							if ($insert)
							{
								$to = $email;
								$subject = 'Nicework - Xác nhận quên mật khẩu - '.$email;
								$link = site_url().'user-password-verify?tku='.$dataInsert['token'].'&tcr='.$dataInsert['time'];
								$message = '<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào <b>'.$id['hoten'].'</b></p>
											<p>Bạn hoặc ai đó vừa bắt đầu quá trình xác nhận để lấy lại mật khẩu trên Nicework, bạn hãy  <a href="'.$link.'">truy cập vào đường dẫn này</a> để đặt lại mật khẩu của mình, hoặc bạn có thể copy link sau: <b>'.$link.'</b> và dán vào trình duyệt, đường dẫn này sẽ hết hạn sau 24h. <a href="'.base_url().'" title="123 Năm">123 Năm</a></p>
											<p>Trân trọng! Chúc bạn luôn vui vẻ</p>
											<p><b>Đội ngũ 123 Năm</b></p>	
											</body>
											</html>';
								
								$nFrom = "123nam.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
							    $mFrom = 'account@123nam.com';  //dia chi email cua ban 
							    $mPass = 'phamluc999';       //mat khau email cua ban
							    $nTo = $email; //Ten nguoi nhan
								
								if($this->sendEmail($message,$mFrom,$mPass,$nTo,$title) == 0) {
							       $data['emailNull'] = 'Rất đáng tiếc, đã có lỗi trong quá trình xử lý bạn vui lòng nhập lại email của mình và gửi lại một lần nữa.';
							    } else {
							         
							       $data['sendSuccess'] = 'Chúng tôi đã gửi một email kèm với đường dẫn để bạn có đặt lại mật khẩu của mình. Nếu bạn không tìm thấy trong <b>hộp thư đến</b> của mình thì bạn có thể tìm trong thư mục <b><span style="font-size:20px">SPAM</span></b>, bạn vui lòng chú ý!';
							    }

							} else $data['emailNull'] = '<span class="glyphicon glyphicon-alert"></span> Có lỗi trong quá trình xử lý email, bạn vui lòng nhập lại email này';
						}
					} else $data['emailNull'] = '<span class="glyphicon glyphicon-alert"></span> Chúng tôi không tìm thấy email này';
				} else $data['emailNull'] = '<span class="glyphicon glyphicon-alert"></span> Vui lòng nhập email';
			}
			$data['path'] = 'user/formEnterEmail';
			$this->load->view('layout/user/layoutResetPassword',$data);
		}
		public function index()
		{
			
			$data['path'] = 'layout/nguoi_dung/dang_ky/index_login_fb';
			$this->load->view('layout/nguoi_dung/dang_ky/layoutDangky',$data);
		}
		public function dang_xuat()
		{
			if (isset($_COOKIE['verifyAuthID'])) {
				$token = $_COOKIE['verifyAuthID'];
				$deleteToken = $this->M_nguoi_dung->delete($token, 'auth_token');
				if ($deleteToken)
				{
					$this->load->helper('cookie');
					delete_cookie('verifyAuthID', '123.com');
					$this->session->sess_destroy();
					echo 1;
				
				}
			} else {
				$this->session->sess_destroy();
				echo 1;
				
			}
			
		}
		public function dang_nhap()
		{
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$rememberMe = 0;

			if (isset($_POST['rememberMe'])) {
				$rememberMe = $_POST['rememberMe'];
			}
			

			$escapePW = $this->M_nguoi_dung->escapeStr($pass);

			$row = $this->M_nguoi_dung->getSaltPW($email);
			if ($row == false)
			{
				echo "Email này chưa đăng ký!";
			} else
			{
				$salt = $row['salt'];
				$saltedPW = $escapePW.$salt;
				$hashPW = hash('sha256', $saltedPW);
				$result = $this->M_nguoi_dung->dang_nhap($email,$hashPW);
				$login = 0;
				if ($result == false)
					echo 'Mật khẩu chưa chính xác!';

				else {

					//create a session login

					$userArr = array(
						'id' => $result['id'],
						'rememberMe' => $rememberMe
						);

					$this->session->set_userdata($userArr);

					$login = 1;
					if ($rememberMe == 1) {

						$token = hash('sha256', rand());
						$dataToken['token'] = $token;
						$dataToken['userid'] = $result['id'];
						$dataToken['expired'] = time();

						$insert = $this->M_nguoi_dung->insert('auth_token', $dataToken);
						if ($insert)
						{
							$params = session_get_cookie_params();
							setcookie('verifyAuthID',$token,time()+(31556926),$params['path'],'123nam.com',$params['secure'],isset($params['httponly']));
							$login = 1;
						} else $login = 'Đã có lỗi trong quá trình đăng nhập, vui lòng thử lại.';
					}

					echo $login;
				}	
			}
		}
		public function createUserTool()
		{
			for ($i = 866; $i <=1204; $i++) {
				$data['firstName'] = 'number'.$i;
				$data['lastName'] = 'thanhvien'.$i;
				$data['email'] = 'number'.$i.'@gmail.com';
				$password = '123nam';
				$re_pass = '123nam';
				$escapePW = $this->M_nguoi_dung->escapeStr($password);
				$escapeRe_pass = $this->M_nguoi_dung->escapeStr($re_pass);

				$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
				$data['salt'] = $salt;
				$saltedPW = $escapePW.$salt;
				$saltedRe_pass = $escapeRe_pass.$salt;
				$data['password'] = hash('sha256', $saltedPW); //password to insert to database
				$data['re_pass'] = hash('sha256', $saltedRe_pass);
				$data['ngay_sinh'] = rand(1,31);
				$data['thang_sinh'] = rand(1,12);
				$data['nam_sinh'] = rand(1941,2015);
				$data['gioi_tinh'] = rand(0,1);
				$data['adm'] = 0;
				$data['boss'] = 0;
				$data['logDay'] = rand(1,31);
				$data['logMonth'] = rand(1,12);
				$data['logYear'] = rand(2014,2017);
				$logDay = date('d');
				$logMonth = date('m');
				$logYear = date('Y');
				$birthTime = strtotime($data['nam_sinh'].'-'.$data['thang_sinh'].'-'.$data['ngay_sinh']);
				$logDate = strtotime($logYear.'-'.$logMonth.'-'.$logDay);
				$old = floor(($logDate-$birthTime)/60/60/24/365);
				$data['old'] = $old;
				if ($this->M_nguoi_dung->dang_ky($data)) {
					echo '<br/>inserted <br/>'.$i;
				}
 			}
		}
		public function dang_ky()
		{
			$data['title'] = 'Đăng ký tài khoản - Thành viên - 123 Năm';
			$data['keyword'] = 'dang ky tai khoan 123nam,tai khoan 123nam,dang ky tai khoan';
			$data['description'] = 'Đăng ký tài khoản là thành viên website 123nam, Pham Luc bằng email';
			
			
			if (isset($_POST['btn_dangky']))
			{
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$email = $_POST['email'];
				$password = $_POST['mat_khau_dk'];
				$re_pass = $_POST['nhap_lai_mk'];
				$ngay_sinh = $_POST['ngay_sinh'];
				$thang_sinh = $_POST['thang_sinh'];
				$nam_sinh = $_POST['nam_sinh'];
				$gioi_tinh = $_POST['gioi_tinh'];
				$patternEmail = '/^([a-zA-Z0-9_]+)(@)([a-zA-Z]+)([\.])([a-zA-Z]+)$/';
				$logDay = date('d');
				$logMonth = date('m');
				$logYear = date('Y');
				$birthTime = strtotime($nam_sinh.'-'.$thang_sinh.'-'.$ngay_sinh);
				$logDate = strtotime($logYear.'-'.$logMonth.'-'.$logDay);
				$old = floor(($logDate-$birthTime)/60/60/24/365);

				if (!empty($firstName) && !empty($lastName))
				{
					$pattern = '/^[a-zA-Z0-9\s-_@]+$/';
					if (preg_match($pattern, $firstName) && preg_match($pattern, $lastName))
					{
					if (!empty($email))
					{
					 if (preg_match($patternEmail, $email)) 
					 {
						if (!empty($password))
						{
							if (!empty($re_pass))
							{
								if ($ngay_sinh != 0 && $thang_sinh != 0 && $nam_sinh != 0)
								{
									if (strcasecmp($password, $re_pass) == 0)
								{	
									$testEmail = $this->M_nguoi_dung->kiem_tra_email($email);
									if ($testEmail == false)
									{
										if ($gioi_tinh != '') 
										{
										$dataRegister['firstName'] = $firstName;
										$dataRegister['lastName'] = $lastName;
										$dataRegister['email'] = $email;

										$escapePW = $this->M_nguoi_dung->escapeStr($password);
										$escapeRe_pass = $this->M_nguoi_dung->escapeStr($re_pass);

										$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
										$dataRegister['salt'] = $salt;
										$saltedPW = $escapePW.$salt;
										$saltedRe_pass = $escapeRe_pass.$salt;
										$dataRegister['password'] = hash('sha256', $saltedPW); //password to insert to database
										$dataRegister['re_pass'] = hash('sha256', $saltedRe_pass);
										$dataRegister['ngay_sinh'] = $ngay_sinh;
										$dataRegister['thang_sinh'] = $thang_sinh;
										$dataRegister['nam_sinh'] = $nam_sinh;
										$dataRegister['gioi_tinh'] = $gioi_tinh;
										$dataRegister['logDay'] = $logDay;
										$dataRegister['logMonth'] = $logMonth;
										$dataRegister['logYear'] = $logYear;
										$dataRegister['old'] = $old;
										if ($this->M_nguoi_dung->dang_ky($dataRegister))
											$data['success'] = 'Đăng ký thành công.';
									} else $data['err'] = 'Vui lòng chọn giới tính';
									} else $data['err'] = 'Email này đã được sử dụng';

								} else $data['err'] = 'Mật khẩu và xác nhận chưa giống nhau';
								} else $data['err'] = 'Bạn vui lòng chọn đầy đủ ngày, tháng, năm sinh của mình!';
							} else $data['err'] = 'Bạn cần xác nhận chính xác lại mật khẩu của mình!';
						} else $data['err'] = 'Cần một mật khẩu cho tài khoản của bạn, đừng để trống!';
					} else $data['err'] = 'Vui lòng nhập đúng Email';
				 } else $data['err'] = 'Email rất cần thiết cho tài khoản của bạn, vui lòng đừng để trống!';
				} else $data['err'] = 'Có một vài ký tự ở họ, tên của bạn mà chúng tôi không khuyến khích dùng, bạn vui lòng nhập đúng tên của mình';
				} else	$data['err'] = 'Vui lòng nhập đầy đủ tên của bạn!';
			} // end button dang ky
			$data['path'] = 'user/V_dang_ky';
			$this->load->view('layout/nguoi_dung/dang_ky/layoutDangky', $data);
		}
		public function sendEmail($message,$mFrom,$mPass,$nTo,$title)
		{
			$nFrom = "123NAM.COM";    //mail duoc gui tu dau, thuong de ten cong ty ban
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
		    $mail->Username   = $mFrom;  // khai bao dia chi email
		    $mail->Password   = $mPass;              // khai bao mat khau
		    $mail->SetFrom($mFrom, $nFrom);
		    $mail->AddReplyTo('account@123nam.com', '123nam.com'); //khi nguoi dung phan hoi se duoc gui den email nay
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