<?php
session_start();
ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
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
		private $userid;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('nguoi_dung/M_tin_tuc');
		$this->load->model('quan_tri/M_su_kien_table');
		$this->load->model('nguoi_dung/M_nguoi_dung');


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

		$this->userid = $this->issetCookie();
		

		if ($this->userid)
		{
			$this->dataYear = $this->M_su_kien_table->getData($this->thanghientai,$this->next,$this->repeatY,$this->userid);
			$this->dataMonth = $this->M_su_kien_table->getDataRepeat('eventuser', $this->repeatM,$this->userid);
			$this->dataWeek = $this->M_su_kien_table->getDataRepeat('eventuser', $this->repeatW,$this->userid);
			$this->dataD = $this->M_su_kien_table->getDataRepeat('eventuser', $this->repeatD,$this->userid);
			$this->dataNoRepeat = $this->M_su_kien_table->getDatNoRepeat($this->thanghientai,$this->next,$this->namhientai,$this->nextYear,$this->noRepeat,$this->userid);
		}
	}
	public function issetCookie()
	{
		$user = null;

		if (isset($_COOKIE['verifyAuthID']) && !$_SESSION['id']) {

			$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
			$user = $userArr['id'];
		} else 
			$user = $_SESSION['id'];

		return $user;
	}
	public function index()
	{
		$data['userid'] = $this->userid;
		$data['title'] = '123NAM';
		$data['description'] = '123nam - Pham Van Luc - Album - eMagazine';
		
		if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);

		//usertags

		$data['privated'] = $this->M_nguoi_dung->checkPrivateTags($this->userid,'usertags');

		$data['bannerLeft'] = $this->M_tin_tuc->GetBanner('IND','left');
		$data['bannerRight'] = $this->M_tin_tuc->GetBanner('IND','right');
		$data['ds_danh_muc_tin_tuc'] = $this->M_tin_tuc->ds_danh_muc_tin_tuc();
		$data['tin_chinh_trang_nhat'] = $this->M_tin_tuc->tin_chinh_trang_nhat();
		//$data['tin_phu_trang_nhat'] = $this->M_tin_tuc->tin_phu_trang_nhat('top');
		$start = 0;
		$limit = 5;
		$data['hotData']  = $this->M_tin_tuc->ds_tin_limit('hot', $start, $limit);
		$data['arr_album1'] = $this->M_tin_tuc->arr_album1();
		$data['arr_album2'] = $this->M_tin_tuc->arr_album2();
		$data['arr_id_evt_now'] = $this->numEvtNow();
		
		$data['numEvtNow'] = count($data['arr_id_evt_now']);

		$this->load->view('index', $data);
	} //end function index
	public function numEvtNow()
	{
		$ArrEvtNow = array();
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
								array_push($ArrEvtNow,$item['id']);
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
										array_push($ArrEvtNow,$item['id']);
									}
								}
								else {
									$ngaygui = $evtDay - $oneWeek;
									$thanggui = 1;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										array_push($ArrEvtNow,$item['id']);
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
										$numEvtNow = $numEvtNow+1;
										array_push($ArrEvtNow,$item['id']);
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} else {
									$ngaygui = $evtDay - $oneWeek;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										array_push($ArrEvtNow,$item['id']);
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
										array_push($ArrEvtNow,$item['id']);
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								}
								else {
									$ngaygui = $evtDay - $oneDay;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										array_push($ArrEvtNow,$item['id']);
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} 
							} else { // thanghientai <= evtMonth
								// # thang 12
								$max_days_in_month_year = cal_days_in_month(CAL_GREGORIAN, $this->thanghientai, $this->namhientai);
								if ($evtDay == 1) {
									$ngaygui = $max_days_in_month_year;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										array_push($ArrEvtNow,$item['id']);
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								} else {
									$ngaygui = $evtDay - $oneDay;
									$thanggui = $evtMonth;
									if ($ngaygui == $this->ngayhientai && $thanggui == $this->thanghientai)
									{
										array_push($ArrEvtNow,$item['id']);
										// SENDEMAIL() WHERE MONTH = THANGGUI;
									}
								}
							}
							break;
						case '0': // NHẮC ĐÚNG NGÀY
							if ($evtDay == $this->ngayhientai && $evtMonth == $this->thanghientai)
							{
								array_push($ArrEvtNow,$item['id']);
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
						array_push($ArrEvtNow,$item2['id']);
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
							array_push($ArrEvtNow,$item2['id']);
						}
						break;
					case '0': // DUNG NGAY
						if ($evtDay == $this->ngayhientai) {
							array_push($ArrEvtNow,$item2['id']);
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
						array_push($ArrEvtNow,$item3['id']);
					}
				}
			} // end if isset,empty
			// --------------------LAP LAI MOI NGAY --------------------------------
			if (isset($this->dataD) && !empty($this->dataD)) {
				foreach ($this->dataD as $key=>$item4) {
					//echo ($key+1)."<br/>";
					array_push($ArrEvtNow,$item4['id']);
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
								array_push($ArrEvtNow,$item5['id']);
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
								array_push($ArrEvtNow,$item5['id']);
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
									array_push($ArrEvtNow,$item5['id']);
								}	
								break;
							case '0':
								if ($evtDay5 == $this->ngayhientai && $evtMonth5 == $this->thanghientai && $evtYear5 == $this->namhientai)
								{
									array_push($ArrEvtNow,$item5['id']);
								}
								break;
						default:
							# code...
							break;
					}
					}// end foreach dataNoRepeat
				} // end if isset
				return $ArrEvtNow;
	}
}
