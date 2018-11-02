<?php 
	include(APPPATH.'controllers/phpMailer/class.phpmailer.php');
	include(APPPATH.'controllers/phpMailer/class.smtp.php');
	class SendEmailEvtSystem extends CI_Controller
	{
		private $ngayhientai;
		private $thanghientai;
		private $namhientai;
		private $nextYear;
		private $next;
		private $dataYear;
		private $dataMonth;
		private $dataWeek;
		private $dataD;
		private $dataNoRepeat;
		private $repeatY;
		private $repeatM;
		private $repeatW; 
		private $repeatD;
		private $noRepeat;
		
		private $headers;
		public $path;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('su_kien/Model_Evt_Email_Handle');
			$this->ngayhientai = date("d");
			$this->thanghientai = date("m");
			$this->namhientai = date("Y");
			$this->nextYear = $this->namhientai+1;
			if ($this->thanghientai == 12)
				$this->next = 1;
			else 
				$this->next = $this->thanghientai + 1;
			$this->repeatY = 1000;
			$this->repeatM = 100;
			$this->repeatW = 10;
			$this->repeatD = 1;
			$this->noRepeat = 0;
			$this->dataYear = $this->Model_Evt_Email_Handle->getData($this->thanghientai,$this->next,$this->repeatY);
			$this->dataMonth = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatM);
			$this->dataWeek = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatW);
			$this->dataD = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatD);
			$this->dataNoRepeat = $this->Model_Evt_Email_Handle->getDatNoRepeat($this->thanghientai,$this->next,$this->namhientai,$this->nextYear,$this->noRepeat);
			$this->path = site_url();
			$this->headers = "MIME-Version: 1.0" . "\r\n";
			$this->headers .= "Content-type: text/html; charset=UTF-8". "\r\n";
			$this->headers .= 'From: <nicework.sukien@gmail.com>'. "\r\n";

		}
		public function Email_Handle()
		{
			$remindAsinform = array();
			$remindAsName = array();
			$remindTable = $this->Model_Evt_Email_Handle->getRemind();
			if (isset($remindTable) && !empty($remindTable))
			{
				foreach ($remindTable as $remindName)
				{
					$remindAsinform[$remindName['id']] = $remindName['name_as_inform'];
					$remindAsName[$remindName['id']] = $remindName['name'];
				}
			}


			 // -------------------------------------------LAP LAI MOI NAM--------------------------------------
			if (isset($this->dataYear) && !empty($this->dataYear)) {
				foreach ($this->dataYear as $item)
			{
				$repeat = $item['evt_repeat'];
				$remind = $item['evt_remind'];
				$evtDay = $item['day'];
				$evtMonth = $item['month'];
					switch ($remind) {
						case '100': // NHẮC TRƯỚC 1 THÁNG
							if ($this->thanghientai > $evtMonth)
							{
								//thang hien tai =12.
								if ($evtDay == cal_days_in_month(CAL_GREGORIAN,$evtMonth,$this->namhientai+1))
								{
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai,$this->namhientai);
									$thanggui = $this->thanghientai;
								} else {
									$ngaygui = $evtDay;
									$thanggui = $this->thanghientai;
								}
							} else {
								if ($evtDay == cal_days_in_month(CAL_GREGORIAN, $evtMonth, $this->namhientai))
								{
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai,$this->namhientai);
									$thanggui = $evtMonth-1;
								} else {
									$ngaygui = $evtDay;
									$thanggui = $evtMonth-1;
								}
							}
							if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
							{
								$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item['evt_title'];
								$subject = $remindAsinform[$remind].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
									<p>'.$item['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>

									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';

								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
								echo "LAP MOI NAM, TRUOC 1 THANG, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
							}

							break;
						case '10': // NHẮC TRƯỚC 1 TUẦN
							$oneWeek = 7;
							if ($this->thanghientai > $evtMonth) // thang hien tai =12 va thang evt =1 
							{	
								$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN, $this->thanghientai, $this->namhientai);
								if ($evtDay <=7) // ngay trong su kien <= 7
								{
									$ngaygui = $max_days_in_month_year - ($oneWeek - $evtDay);
									$thanggui = 12;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);

										echo "LAP MOI NAM, TRUOC 1 TUAN, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
									}
								}
								else {
									$ngaygui = $evtDay - $oneWeek;
									$thanggui = 1;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 THANG, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} 
							} elseif ($this->thanghientai <= $evtMonth) {
								// # thang 12
								$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN, $this->thanghientai, $this->namhientai);
								if ($evtDay <= 7) {
									$ngaygui = $max_days_in_month_year - ($oneWeek - $evtDay);
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										
										echo "LAP MOI NAM, TRUOC 1 THANG, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} else {
									$ngaygui = $evtDay - $oneWeek;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 THANG, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								}
							}
							break;
						case '1': // NHẮC TRƯỚC 1 NGÀY
							$oneDay = 1;
							if ($this->thanghientai > $evtMonth) // thang hien tai =12 va thang evt =1 
							{	
								$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN, $this->thanghientai, $this->namhientai);
								if ($evtDay == 1) // ngay trong su kien <= 7
								{
									$ngaygui = $max_days_in_month_year;
									$thanggui = 1;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 NGAY, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								}
								else {
									$ngaygui = $evtDay - $oneDay;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 NGAY, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} 
							} elseif ($this->thanghientai <= $evtMonth) {
								// # thang 12
								$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN, $this->thanghientai, $this->namhientai);
								if ($evtDay == 1) {
									$ngaygui = $max_days_in_month_year;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 NGAY, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} else {
									$ngaygui = $evtDay - $oneDay;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
										$userName = $dataUser['firstName'];
										$nTo = $dataUser['email'];
										$title = $item['evt_title'];
										$subject = $remindAsinform[$remind].': '.$title;

										$message = '
											<!DOCTYPE html>
											<html>
											<head>
												<title>'.$title.'</title>
											</head>
											<body>
											<p>Xin chào '.$userName.'</p>
											<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
											<p>'.$item['note_info'].'</p>
											<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
											<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
											</body>
											</html>	
										';
										$message = wordwrap($message, 70);
										$mFrom = 'account@123nam.com';
										$mPass = 'phamluc999';
										$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
										echo "LAP MOI NAM, TRUOC 1 NGAY, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								}
							}
							break;
						case '0': // NHẮC ĐÚNG NGÀY
							if ($evtDay == $this->ngayhientai && $evtMonth == $this->thanghientai)
							{
								$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item['evt_title'];
								$subject = $remindAsinform[$remind].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item['evt_object'].'</b></p>
									<p>'.$item['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
								echo "LAP MOI NAM, TRUOC DUNG NGAY, send mail() sukien:".$item['evt_title']."ngaysukien: ".$item['day']."/".$item['month']."<br/>";
							}
							break;
						default:
							# code...
							break;
					}
				} //end foreach
			} // end if isset,empty

			// -------------------------------------------LAP LAI MOI THANG ------------------------------

			if (isset($this->dataMonth) && !empty($this->dataMonth)) {
				foreach ($this->dataMonth as $key=>$item2)
			{
				$remind2 = $item2['evt_remind'];
				$evtMonth = $item2['month'];
				$evtDay = $item2['day'];
				$oneWeek = 7;
				$oneDay = 1;
				switch ($remind2) {
					case '10': // NHAC TRUOC 1 TUAN
					$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai, $this->namhientai);
					if ($evtDay <= 7) {
						$ngaygui = $max_days_in_month_year - ($oneWeek - $evtDay);
					} else {
						$ngaygui = $evtDay - $oneWeek;
					}
					if ($ngaygui == $this->ngayhientai) {
						$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item2['user']);
						$userName = $dataUser['firstName'];
						$nTo = $dataUser['email'];
						$title = $item2['evt_title'];
						$subject = $remindAsinform[$remind2].': '.$title;

						$message = '
							<!DOCTYPE html>
							<html>
							<head>
								<title>'.$title.'</title>
							</head>
							<body>
							<p>Xin chào '.$userName.'</p>
							<p><b>'.$remindAsinform[$remind2].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item2['evt_object'].'</b></p>
							<p>'.$item2['note_info'].'</p>
							<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind2].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'</i></p>
							<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
							</body>
							</html>	
						';
						$message = wordwrap($message, 70);
						$mFrom = 'account@123nam.com';
						$mPass = 'phamluc999';
						$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
					
						echo "LAP MOI THANG, TRUOC 1 TUAN, send mail() sukien:".$item2['evt_title']."ngaysukien: ".$item2['day']."/".$item2['month']."<br/>";
					}

						break;
					case '1': // NHAC TRUOC 1 NGAY
						$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai, $this->namhientai);
						if ($evtDay == 1) {
							$ngaygui = $max_days_in_month_year;
						} else {
							$ngaygui = $evtDay - $oneDay;
						}
						if ($ngaygui == $this->ngayhientai) {
							$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item2['user']);
								$userName = $dataUser['firstName'];
								$to = $dataUser['email'];
								$title = $item2['evt_title'];
								$subject = $remindAsinform[$remind2].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind2].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item2['evt_object'].'</b></p>
									<p>'.$item2['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind2].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'</i></p>	
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								mail($to,$subject,$message,$this->headers);
							echo "LAP MOI THANG, TRUOC 1 NGAY, send mail() sukien:".$item2['evt_title']."ngaysukien: ".$item2['day']."/".$item2['month']."<br/>";
						}

						break;
					case '0': // DUNG NGAY
						if ($evtDay == $this->ngayhientai) {
							$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item2['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item2['evt_title'];
								$subject = $remindAsinform[$remind2].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind2].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item2['evt_object'].'</b></p>
									<p>'.$item2['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind2].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item2['id'].'</i></p>	
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
							echo "LAP MOI THANG, TRUOC DUNG NGAY, send mail() sukien:".$item2['evt_title']."ngaysukien: ".$item2['day']."/".$item2['month']."<br/>";
						}
						break;
					default:
							# code...
							break;
					}
				} // end foreach dataMonth
			}
			// ------------------------LAP LAI MOI TUAN ----------------------------------------------
			if (isset($this->dataWeek) && !empty($this->dataWeek)) {
				$numDay = array (
				'Monday' => '102',
				'Tuesday' => '103',
				'Wednesday' => '104',
				'Thursday' => '105',
				'Friday' => '106',
				'Saturday' => '107',
				'Sunday' => '108'
				);


				foreach ($this->dataWeek as $key => $item3)
				{
					$remind = $item3['evt_remind'];
					$evtDay = $item3['day'];
					$evtMonth = $item3['month'];
					$day_of_week_evt = $item3['day_of_week'];
					$day_of_week_now = $numDay[date("l")];

					if ($day_of_week_evt == $day_of_week_now) {
						$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item3['user']);
						$userName = $dataUser['firstName'];
						$nTo = $dataUser['email'];
						$title = $item3['evt_title'];
						$subject = $remindAsinform[$remind].': '.$title;

						$message = '
							<!DOCTYPE html>
							<html>
							<head>
								<title>'.$title.'</title>
							</head>
							<body>
							<p>Xin chào '.$userName.'</p>
							<p><b>'.$remindAsinform[$remind].' (ngày '.$this->ngayhientai.'/'.$this->thanghientai.'/'.$this->namhientai.') bạn có một sự kiện được nhắc tới: '.$title.' (ngày '.$evtDay.'/'.$evtMonth.'), '.$item['evt_object'].'</b></p>
							<p>'.$item3['note_info'].'</p>
							<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item3['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item3['id'].'</i></p>	
							<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
							</body>
							</html>	
						';
						$message = wordwrap($message, 70);
						$mFrom = 'account@123nam.com';
						$mPass = 'phamluc999';
						$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
						echo "LAP MOI TUAN, send mail() sukien:".$item3['evt_title']."ngaysukien: ".$item3['day']."/".$item3['month']."<br/>";
					}
				}
			} // end if isset,empty

			// --------------------LAP LAI MOI NGAY --------------------------------
			
			if (isset($this->dataD) && !empty($this->dataD)) {
				foreach ($this->dataD as $key=>$item4) {
					//echo ($key+1)."<br/>";
						$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item4['user']);
						$userName = $dataUser['firstName'];
						$nTo = $dataUser['email'];
						$title = $item4['evt_title'];
						$subject = $title;

						$message = '
							<!DOCTYPE html>
							<html>
							<head>
								<title>'.$title.'</title>
							</head>
							<body>
							<p>Xin chào '.$userName.'</p>
							<p><b>Bạn có sự kiện: '.$title.' vào ngày: '.$item4['day'].'/'.$item4['month'].', '.$item4['evt_object'].'</b></p>
							<p>'.$item4['note_info'].'</p>
							<p><i>Sự kiện này được nhắc mỗi ngày, bạn có thể thay đổi điều này tại: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item4['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item4['id'].'</i></p>

							<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>	
							</body>
							</html>	
						';
						$message = wordwrap($message, 70);
						$mFrom = 'account@123nam.com';
						$mPass = 'phamluc999';
						$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
					echo "LAP MOI NGAY, send mail() sukien:".$item4['evt_title']."ngaysukien: ".$item4['day']."/".$item4['month']."<br>";
				} // end foreach DataD
			}



			// ---------------------- KHONG LAP LAI ----------------------------------

			if (isset($this->dataNoRepeat) && !empty($this->dataNoRepeat)) {
				foreach ($this->dataNoRepeat as $key=>$item5) {

					//echo ($key+1)."khong lap lai: ".$item5['day']."-".$item5['month']."-".$item5['year']."<br/>";
					
					$repeat5 = $item5['evt_repeat'];
					$remind5 = $item5['evt_remind'];
					$evtDay5 = $item5['day'];
					$evtMonth5 = $item5['month'];
					$evtYear5 = $item5['year'];
					switch ($remind5) {
						case '100': // -- NHAC TRUOC 1THANG --
							// NEU THANG HIEN TAI=12
							if ($this->thanghientai > $this->next)
							{
									// NEU NGAY SU KIEN LA CUOI THANG
								if ($evtDay5 == cal_days_in_month(CAL_GREGORIAN,$evtMonth5,$evtYear5))
								{
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai,$evtYear5-1);
									$thanggui = $this->thanghientai;
									$namgui = $evtYear5-1;
								} else {
									$ngaygui = $evtDay5;
									$thanggui = $this->thanghientai;
									$namgui = $evtYear5-1;
								}
							} else {
								$monthPrev = $evtMonth5-1;
								if ($monthPrev == 0)
										$monthPrev = 12;
								if ($evtDay5 == cal_days_in_month(CAL_GREGORIAN,$evtMonth5,$evtYear5))
								{
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$monthPrev,$evtYear5);
									$thanggui = $evtMonth5-1;
									$namgui = $evtYear5;
								} else {
									$ngaygui = $evtDay5;
									$thanggui = $evtMonth5-1;
									$namgui = $evtYear5;
								}
							}	
							if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai && $namgui == $this->namhientai) 
							{
								$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item5['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item5['evt_title'];
								$subject = $remindAsinform[$remind5].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind5].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item5['evt_object'].'</b></p>
									<p>'.$item5['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind5].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item5['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
								echo "KLL,send email()->".$item5['evt_title']."--".$item5['day']."/".$item5['month']."/".$item5['year']." id=".$item5['id']."<br/>";
							}
							break;
						case '10':
							$oneWeek5 = 7;
							if ($this->thanghientai > $this->next)
							{
								// THANG HIEN TAI=12
								if ($evtDay5 <= 7)
								{
									//5/1/2017
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai,$evtYear5-1) - ($oneWeek5-$evtDay5);
									$thanggui = $this->thanghientai;
									$namgui = $evtYear5-1;
								} else {//8/1/2017
									$ngaygui = $evtDay5 - $oneWeek5;
									$thanggui = $evtMonth5;
									$namgui = $evtYear5;
								}
							} else {
								$monthPrev = $evtMonth5-1;
								if ($monthPrev == 0)
										$monthPrev = 12;
								if ($evtDay5 <= 7)
								{
									//5/2/2017
									$ngaygui = cal_days_in_month(CAL_GREGORIAN,$monthPrev,$evtYear5);
									$thanggui = $evtMonth5-1;
									$namgui = $evtYear5;
								} else {
									//12/6/2017
									$ngaygui = $evtDay5-$oneWeek5;
									$thanggui = $evtMonth5;
									$namgui = $evtYear5;
								}
							}

							if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai && $namgui == $this->namhientai) 
							{
								$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item5['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item5['evt_title'];
								$subject = $remindAsinform[$remind5].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind5].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item5['evt_object'].'</b></p>
									<p>'.$item5['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind5].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item5['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
								echo "Khong lap lai, nhac truoc 1 tuan: send email()->".$item5['evt_title']."--".$item5['day']."/".$item5['month']."/".$item5['year']." id=".$item5['id']."<br/>";
							}
							break;
							case '1': // -------- TRUOC 1 NGAY ---------
								if ($this->thanghientai > $this->next)
								{
									// NEU THANG HIEN TAI =12 & THANG SU KIEN =1
									if ($evtDay5 == 1)
									{
										//1/1/2017
										$ngaygui = cal_days_in_month(CAL_GREGORIAN,$this->thanghientai,$evtYear5-1);
										$thanggui = $this->thanghientai;
										$namgui = $evtYear5-1;
									} else {
										//2/1/2017
										$ngaygui = $evtDay5-1;
										$thanggui = $evtMonth5;
										$namgui = $evtYear5;
									}
								} else {
									if ($evtDay5 == 1)
									{
										//1/3/2017
										$ngaygui = cal_days_in_month(CAL_GREGORIAN,$evtMonth5-1,$evtYear5);
										$thanggui = $evtMonth5-1;
										$namgui = $evtYear5;
									} else {
										//4/4/2017
										$ngaygui = $evtDay5-1;
										$thanggui = $evtMonth5;
										$namgui = $evtYear5;
									}
								}
								if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai && $namgui == $this->namhientai) 
								{
									$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item5['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item5['evt_title'];
								$subject = $remindAsinform[$remind5].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind5].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item5['evt_object'].'</b></p>
									<p>'.$item5['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind5].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item5['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
									echo "Khong lap lai, nhac truoc 1 ngay: send email()->".$item5['evt_title']."--".$item5['day']."/".$item5['month']."/".$item5['year']." id=".$item5['id']."<br/>";
								}	
								break;
							case '0':
								if ($evtDay5 == $this->ngayhientai && $evtMonth5 == $this->thanghientai && $evtYear5 == $this->namhientai)
								{
									$dataUser = $this->Model_Evt_Email_Handle->getDataUser($item5['user']);
								$userName = $dataUser['firstName'];
								$nTo = $dataUser['email'];
								$title = $item5['evt_title'];
								$subject = $remindAsinform[$remind5].': '.$title;

								$message = '
									<!DOCTYPE html>
									<html>
									<head>
										<title>'.$title.'</title>
									</head>
									<body>
									<p>Xin chào '.$userName.'</p>
									<p><b>'.$remindAsinform[$remind5].' (ngày '.$evtDay.'/'.$evtMonth.') bạn có sự kiện: '.$title.', '.$item5['evt_object'].'</b></p>
									<p>'.$item5['note_info'].'</p>
									<p><i>Sự kiện này được nhắc trước: '.$remindAsName[$remind5].', bạn có thể thay đổi điều này với địa chỉ: <a href="'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item5['id'].'">'.$this->path.'/su-kien/su-kien-cua-toi/review/'.$item['id'].'</i></p>
									<p stlye="float: right; font-size: 25px"><b><a href="'.$this->path.'">123NAM.COM<a/></b></p>		
									</body>
									</html>	
								';
								$message = wordwrap($message, 70);
								$mFrom = 'account@123nam.com';
								$mPass = 'phamluc999';
								$this->sendEmail($message,$mFrom,$mPass,$nTo,$title);
									echo "Khong lap lai, nhac truoc dung ngay: send email()->".$item5['evt_title']."--".$item5['day']."/".$item5['month']."/".$item5['year']." id=".$item5['id']."<br/>";
								}
								break;
						default:
							# code...
							break;
					}

					}// end foreach dataNoRepeat
				}
		}


		/*--EMAIL FUNCTION--*/
		public function sendEmail($message,$mFrom,$mPass,$nTo,$title)
		{
			$nFrom = "123NAM.COM-SCHEDULER";    //mail duoc gui tu dau, thuong de ten cong ty ban
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
		/*--!EMAIL FUNCTION--*/
	}
?>