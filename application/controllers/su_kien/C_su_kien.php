<?php
	ini_set("display_errors",0);
	session_start();
	class C_su_kien extends CI_Controller
	{
		private $ngayhientai;
		private $thanghientai;
		private $namhientai;
		private $nextYear;
		private $next;
		private $userid;
		public function __construct()
		{	
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('su_kien/M_su_kien_table');
			$this->load->model('su_kien/M_su_kien');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->library('session');
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

		public function deleteAjaxEvtToday()
		{
			if ($this->userid)
			{
				$id = $_POST['evtId'];
				if (isset($id) && !empty($id))
				{
					if ($this->M_su_kien_table->delete($id,$this->userid))
					{
						echo 'ok';
					} else echo 'Đã có lỗi, xóa không thành công vui lòng thử lại';
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function evtToday()
		{
			//$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('Al','left');
			//$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('Al','right');
			if ($this->userid)
			{
				$data['title'] = "Sự kiện cần quan tâm hôm nay - 123 Năm";
				$data['path'] = 'su_kien/evtToday';

				$count = $_GET['cnt'];
				if (is_numeric($count) && $count > 0)
				{
					$evtID = array();
					for ($i=0; $i<$count; $i++)
					{
						if (is_numeric($_GET['evt_'.$i]))
						{
							$evtID[$i] = $_GET['evt_'.$i];
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}
					}
					if (!empty($evtID) && count($evtID) == $count)
					{
						$dataEvt = $this->M_su_kien_table->getDataEvtId($evtID,$this->userid);
						$data['dataEvt'] = $dataEvt;
						//var_dump($dataEvt);	
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}

				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
				$this->load->view('layout/su_kien/layoutCreatedEvt',$data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			
		}
		public function deleteAjax()
		{
			$userid = $this->userid;
			if ($userid)
			{
				if (isset($_POST['id']))
				{
						$boolDelete = 1;
						$arrID = $_POST['id'];
						foreach ($arrID as $id)
						{
							$delete = $this->M_su_kien_table->delete($id,$userid);
							if (!$delete)
								$boolDelete = 0;
						}
						if ($boolDelete = 1) {
							echo "Ok";
						} else {
							echo "Đã có lỗi trong quá trình xóa sự kiện!";
						}
				}
			}
		}
		public function delete()
		{
			$id = $this->uri->segment(4);
			$userid = $this->userid;
			if ($id)
			{
				if ($userid)
				{
					$check_id = $this->M_su_kien_table->check_id_event($id,$userid);
					if ($check_id == true)
					{
						$delete = $this->M_su_kien_table->delete($id,$userid);
						if ($delete)
							redirect(site_url('su-kien/su-kien-cua-toi'));
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function edit()
		{
			if (isset($this->userid))
			{
			$evt_id = $this->uri->segment(4);
			$user_id = $this->userid;
			if (!empty($evt_id) && !empty($user_id))
			{
				$check_id = $this->M_su_kien_table->check_id_event($evt_id,$user_id);
				if ($check_id == true)
				{
					// GET DATA TO SHOW
					$tablename = 'eventuser';
					$tablename1 = 'repeat_of_events';
					$tablename2 = 'remind_of_events';
					$data['data_update'] = $this->M_su_kien_table->get_row_array($evt_id,$user_id,$tablename);
					$data['data_repeat_of_evt'] = $this->M_su_kien_table->get_result_array($tablename1);
					$data['data_remind_of_evt'] = $this->M_su_kien_table->get_result_array($tablename2);
					// END
					if ($data['data_update']['evt_repeat'] == 10)
						$data['data_day_of_week'] = $this->M_su_kien_table->get_result_array('day_of_week');

					// UPDATE
						if (isset($_POST['evtBtn']))
							{
								$tablename_update = 'eventuser';
								if (isset($_POST['titleCode']))
									$evt_title = $_POST['titleCode'];
								if (isset($_POST['objectCode']))
									$evt_object = $_POST['objectCode'];
								$day = $_POST['evt_day'];
								$month = $_POST['evt_month'];
								$year = $_POST['evt_year'];
								$note_info = $_POST['info_note'];
								$repeat = $_POST['evt_repeat'];
								$remind = isset($_POST['evt_remind'])?$_POST['evt_remind']:'';
								$day_of_week = isset($_POST['day_of_week'])?$_POST['day_of_week']: '';
								// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND
								$logic = 1; // dung
								$arr_remind_of_per_month_repeat = array(0,1,10); // dung ngay,1ngay,1tuan
								$arr_remind_of_per_year_repeat = array(0,1,10,100); //dung ngay,1ngay,1tuan,1thang
								// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND
								if ($repeat == 100)
								{
									if (!in_array($remind, $arr_remind_of_per_month_repeat))
									{
										$logic = 0;
										$data['logicMonthErr'] = 'Không đúng logic lặp lại tháng';
									} 
								} elseif ($repeat == 1000) {
									if (!in_array($remind, $arr_remind_of_per_year_repeat))
									{
										$logic = 0;
										$data['logicYearErr'] = 'Không đúng logic lặp lại năm';
									}
								}
								// END------>XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND

								if (!empty($evt_title))
								{
									if (!empty($day) && strcmp($day, 0) != 0)
									{
										if (!empty($month) && strcmp($month,0) != 0)
										{
											// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND
											if ($logic == 1)
											{
												// CODE'S HERE
												$data['user'] = $user_id;
												$data['evt_title'] = $evt_title;
												$data['evt_object'] = $evt_object;
												$data['day'] = $day;
												$data['month'] = $month;
												$data['year'] = $year;
												$data['note_info'] = $note_info;
												$data['evt_repeat'] = $repeat;
												$data['evt_remind'] = $remind;
												$data['day_of_week'] = $day_of_week;
												$now = time();
												$mydate = strtotime($this->countBetweenDates($day,$month,$year));
												$remain = ceil(($mydate - $now)/(60*60*24));
												$data['remain'] = $remain;
												$data['day_remain_update'] = date('d');
												$data['month_remain_update'] = date('m');
												$data['year_remain_update'] = date('Y');
												$this->M_su_kien->setDataInsert($data);
												$update = $this->M_su_kien_table->update($evt_id,$user_id,$tablename_update,$this->M_su_kien->getDataInsert());

												if ($update)
													$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Đã lưu sự thay đổi';
											} else echo "Errors";
										} else $data['monthErr'] = 'Vui lòng chọn tháng';
									} else $data['dayErr'] = 'Vui lòng chọn ngày';
								} else $data['titleErr'] = 'Vui lòng nhập tên sự kiện';
								
								//echo "Tieu de: ".$evt_title.", doi tuong: ".$evt_object.", ngay: ".$day.", thang: ".$month.", nam: ".$year.", ghi chu: ".$info_note.", lap lai: ".$repeat.", nhac truoc: ".$remind;
								
							}
					//END UPDATE

				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			$data['title'] = 'Chỉnh sửa - sự kiện của tôi '.$evt_id.' - 123 Năm';
			$data['path'] = 'su_kien/Edit';
			$this->load->view('layout/su_kien/layoutCreatedEvt', $data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function review()
		{
			if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$evt_id = $this->uri->segment(4);
			$tablename1 = 'repeat_of_events';
			$tablename2 = 'remind_of_events';
			if (isset($_COOKIE['verifyAuthID']))
			{
				$tokenCookie = $_COOKIE['verifyAuthID'];
				$checkToken = $this->M_nguoi_dung->checkTokenCookie($tokenCookie);
				$data['checkToken'] = $checkToken;
				$user_id = $checkToken['userid'];
				if ($checkToken != false && hash_equals($tokenCookie, $checkToken['token']) == true)
				{
					if (!empty($evt_id) && !empty($user_id))
					{
						$check_id = $this->M_su_kien_table->check_id_event($evt_id, $user_id);
						if ($check_id == true)
						{	
							$data['arr_repeat'] = $this->M_su_kien_table->get_result_array($tablename1);
							$data['arr_remind'] = $this->M_su_kien_table->get_result_array($tablename2);
							$data['data_review'] = $this->M_su_kien_table->review($evt_id,$user_id);
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
				}
			} else {
				if ($this->session->userdata('id'))
				{
					if ($evt_id)
					{
						$user_id = $this->session->userdata('id');
						$check_id = $this->M_su_kien_table->check_id_event($evt_id, $user_id);
						if ($check_id == true)
						{	
							$data['arr_repeat'] = $this->M_su_kien_table->get_result_array($tablename1);
							$data['arr_remind'] = $this->M_su_kien_table->get_result_array($tablename2);
							$data['data_review'] = $this->M_su_kien_table->review($evt_id,$user_id);
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}
					} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
					}
				} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
				}
			}
			
			$data['title'] = 'Review - Sự kiện của tôi - 123 Năm';
			$data['path'] = 'su_kien/review';
			$this->load->view('layout/su_kien/layoutCreatedEvt', $data);
		}
		public function myEvents()
		{
			if ($this->userid) {
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('myEvt','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('myEvt','right');

				
					$user_id = $this->userid;
					$data['userid'] = $this->userid;
					$data['countEvent'] = $this->M_su_kien_table->countMyEvent($user_id);
					$data['hotenUser'] = $this->M_su_kien_table->getHotenUser($user_id);
					$dataForeach = $this->M_su_kien_table->getResultArrayid('eventuser',$user_id);
					$daynow = date('d');
					$monthnow = date('m');
					$yearnow = date('Y');

					foreach ($dataForeach as $item) {

						if ($item['day_remain_update'] != $daynow || $item['month_remain_update'] != $monthnow || $item['year_remain_update'] != $yearnow) {
							//update remain user,id
							$now = time();
							$mydate = strtotime($this->countBetweenDates($item['day'],$item['month'],$item['year']));
							$remain = ceil(($mydate - $now)/(60*60*24));
							$dataRemain['remain'] = $remain;
							$dataRemain['day_remain_update'] = date('d');
							$dataRemain['month_remain_update'] = date('m');
							$dataRemain['year_remain_update'] = date('Y');
							$this->M_su_kien_table->updateRemain($item['id'],$this->userid,$dataRemain);
						}
					}
					$data['title'] = 'Sự kiện của tôi - Sự kiện - 123 Năm';
					$data['path'] = 'su_kien/myEvents';
					$this->load->view('layout/su_kien/layoutSukien', $data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		
			
		}
		public function create()
		{
			if ($this->userid)
				
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('crtEvt','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('crtEvt','right');
			$data['title'] = "Sự kiện - 123 Năm";
			if (isset($_POST['evtBtn']))
			{
				
				if (isset($_COOKIE['verifyAuthID']))
				{
					$tokenCookie = $_COOKIE['verifyAuthID'];
					$checkToken = $this->M_nguoi_dung->checkTokenCookie($tokenCookie);
					$data['checkToken'] = $checkToken;
					if ($checkToken != false && hash_equals($tokenCookie, $checkToken['token']) == true)
					{
						// check is correct!
						$userid = $checkToken['userid'];
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
					if ($this->session->userdata('id'))
					{
						$userid = $this->session->userdata('id');
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				}

				if (isset($userid))
				{		
						if (isset($_POST['titleCode']))
							$evt_title = $_POST['titleCode'];
						if (isset($_POST['objectCode']))
							$evt_object = $_POST['objectCode'];
						$day = $_POST['evt_day'];//*
						$month = $_POST['evt_month'];//*
						$year = $_POST['evt_year'];
						$note_info = $_POST['info_note'];
						$repeat = $_POST['evt_repeat'];
						$remind = isset($_POST['evt_remind'])?$_POST['evt_remind']:'';
						$day_of_week = isset($_POST['day_of_week'])?$_POST['day_of_week']: '';
						// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND
						$logic = 1; // dung
						$arr_remind_of_per_month_repeat = array(0,1,10); // dung ngay,1ngay,1tuan
						$arr_remind_of_per_year_repeat = array(0,1,10,100); //dung ngay,1ngay,1tuan,1thang
						// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND

						if ($repeat == 0)
						{
							if ($year == '')
							{
								$logic = 0;
								$data['logicYearErr'] = 'Nếu sự kiện này không lặp lại thì bạn cần chọn năm, vui lòng đừng để trống năm của sự kiện!';
							}
							if ($year < $this->namhientai)
							{
								$logic = 0;
								$data['logicYearErr'] = 'Năm cần phải lớn hơn hoặc bằng năm '.$this->namhientai;
							}
						}
						if ($year != '')
						{
							if (!is_numeric($year))
							{
								$logic = 0;
								$data['logicYearErr'] = 'Năm cần nhập dưới dạng số!';
							}
						}
						if ($repeat == 100)
						{
							if (!in_array($remind, $arr_remind_of_per_month_repeat))
							{
								$logic = 0;
								$data['logicMonthErr'] = 'Không đúng logic lặp lại tháng';
							} 
						} elseif ($repeat == 1000) {
							if (!in_array($remind, $arr_remind_of_per_year_repeat))
							{
								$logic = 0;
								$data['logicYearErr'] = 'Không đúng logic lặp lại năm';
							}
						}
						// END------>XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND

						if (!empty($evt_title))
						{
							if (!empty($day) && strcmp($day, 0) != 0)
							{
								if (!empty($month) && strcmp($month,0) != 0)
								{
									if ($repeat == 0)
									{
										if (!empty($year))
										{
											if ($logic == 1)
											{
												// CODE'S HERE
												$data['user'] = $userid;
												$data['evt_title'] = $evt_title;
												$data['evt_object'] = $evt_object;
												$data['day'] = $day;
												$data['month'] = $month;
												$data['year'] = $year;
												$data['note_info'] = $note_info;
												$data['evt_repeat'] = $repeat;
												$data['evt_remind'] = $remind;
												$data['day_of_week'] = $day_of_week;
												$now = time();
												$mydate = strtotime($this->countBetweenDates($day,$month,$year));
												$remain = ceil(($mydate - $now)/(60*60*24));
												$data['remain'] = $remain;
												$data['day_remain_update'] = date('d');
												$data['month_remain_update'] = date('m');
												$data['year_remain_update'] = date('Y');

												$this->M_su_kien->setDataInsert($data);
												$result = $this->M_su_kien_table->insert($this->M_su_kien->getDataInsert());

												if ($result)
													$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Đã tạo một sự kiện mới';
											} else echo "Errors";
										} 
									} else {
										// XỬ LÝ CÁC TRƯỜNG HỢP REPAET VÀ REMIND
									if ($logic == 1)
									{
										// CODE'S HERE
										$data['user'] = $userid;
										$data['evt_title'] = $evt_title;
										$data['evt_object'] = $evt_object;
										$data['day'] = $day;
										$data['month'] = $month;
										$data['year'] = $year;
										$data['note_info'] = $note_info;
										$data['evt_repeat'] = $repeat;
										$data['evt_remind'] = $remind;
										$data['day_of_week'] = $day_of_week;
										$now = time();
										$mydate = strtotime($this->countBetweenDates($day,$month,$year));
										$remain = ceil(($mydate - $now)/(60*60*24));
										$data['remain'] = $remain;
										$data['day_remain_update'] = date('d');
										$data['month_remain_update'] = date('m');
										$data['year_remain_update'] = date('Y');

										$this->M_su_kien->setDataInsert($data);
										$result = $this->M_su_kien_table->insert($this->M_su_kien->getDataInsert());

										if ($result)
											$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Đã tạo một sự kiện mới';
									} else echo "Errors";
									}
									
								} else $data['monthErr'] = 'Vui lòng chọn tháng';
							} else $data['dayErr'] = 'Vui lòng chọn ngày';
						} else $data['titleErr'] = 'Vui lòng nhập tên sự kiện';
						
						//echo "Tieu de: ".$evt_title.", doi tuong: ".$evt_object.", ngay: ".$day.", thang: ".$month.", nam: ".$year.", ghi chu: ".$info_note.", lap lai: ".$repeat.", nhac truoc: ".$remind;
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			}

			$data['data_repeat_of_evt'] = $this->M_su_kien_table->get_result_array('repeat_of_events');
			$data['data_remind_of_evt'] = $this->M_su_kien_table->get_result_array('remind_of_events');
			$data['path'] = 'su_kien/index';
			$this->load->view('layout/su_kien/layoutCreatedEvt',$data);
		}
		public function day_of_week_ajaxLoad()
		{
			$tablename = 'day_of_week';
			$day_of_week = $this->M_su_kien_table->get_result_array($tablename);
			if (isset($day_of_week) && !empty($day_of_week))
			{
				?>
				<div class="htmlDay_of_weekLoad">
					<span>Vào</span> <select name="day_of_week" id="day_of_week">
						<?php 
							foreach ($day_of_week as $item)
							{
								?>
										<option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
								<?php 
							}
						?>
					</select>
				</div>
				<?php 
			} else echo "not found";
		}
		public function remind_of_event_in_month_repeat()
		{
			if (isset($_POST['id']))
				$id = $_POST['id'];
			$tablename = 'remind_of_events';
			$remind_of_events = $this->M_su_kien_table->get_result_array_id($id,$tablename);
			if (isset($remind_of_events) && !empty($remind_of_events))
			{
				?>
				<div class="remindHtmlLoad">
				<span>Nhắc tôi trước</span>
					<select name="evt_remind" id="evt_remind">
						<?php 
							foreach ($remind_of_events as $item)
							{
								?>
										<option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
								<?php 
							}
						?>
					</select>
				</div>
				<?php 
			} else echo "not found";
		}
		public function remind_of_event_ajaxLoad()
		{
			$tablename = 'remind_of_events';
			$remind_of_events = $this->M_su_kien_table->get_result_array($tablename);
			if (isset($remind_of_events) && !empty($remind_of_events))
			{
				?>
				<div class="remindHtmlLoad">
				<span>Nhắc tôi trước</span>
					<select name="evt_remind" id="evt_remind">
						<?php 
							foreach ($remind_of_events as $item)
							{
								?>
										<option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
								<?php 
							}
						?>
					</select>
				</div>
				<?php 
			} else echo "not found";
		}
		public function update()
		{
			if ($this->session->userdata('id'))
			{
				$id = $this->uri->segment(4);
				if (!empty($id))
				{
					$postOfUser = $this->M_su_kien_table->getUserSk($id);
					if ($postOfUser != false && $postOfUser['user'] == $this->session->userdata('id'))
					{ 
						
							$data['event_arr'] = $this->M_su_kien_table->su_kien_id($id);
							if(isset($_POST['su_kien_hoan_thanh']) && !empty($_POST['su_kien_hoan_thanh']))
							{
								if ($_POST['ten_su_kien'] != '' && $_POST['sk_ngay'] != 0 && $_POST['sk_thang'] != 0)
								{
									$data['ten_su_kien'] = $_POST['ten_su_kien'];
									$data['doi_tuong'] = $_POST['doi_tuong'];
									$data['ngay'] = $_POST['sk_ngay'];
									$data['thang'] = $_POST['sk_thang'];
									$data['nam'] = $_POST['sk_nam'];
									$data['ghi_chu'] = $_POST['ghi_chu'];
									$data['ngay_tao'] = $data['event_arr']['ngay_tao'];
									$data['user'] = $this->session->userdata('id');
									$this->load->model('quan_tri/M_su_kien');
									$this->load->model('quan_tri/M_su_kien_table');
									$this->M_su_kien->setData($data);
									$kq = $this->M_su_kien_table->update($this->M_su_kien->getData(), $id);
									if ($kq)
										$data['tb'] = 'Chỉnh sửa hoàn tất!';
								}
								else $data['tb'] = 'Vui lòng nhập đầy đủ thông tin!';
							
						}
						$data['path'] = 'quan_tri/V_sukien_update';
						$this->load->view('layout/quan_tri/layoutAdmin', $data);
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} 
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function ds_su_kien()
		{

			if ($this->session->userdata('id') && $this->session->userdata('email') && $this->session->userdata('password') && $this->session->userdata('adm') == 1)
			{
				$checkPW_login = $this->M_su_kien_table->checkPW_login($this->session->userdata('id'),$this->session->userdata('email'));
				if ($checkPW_login != false && $this->session->userdata('password') == $checkPW_login['password'])
				{
					//Phân trang
					$this->load->library('pagination');
			        $config['base_url'] = base_url().'quan-tri/su-kien/danh-sach-su-kien';
			        $config['total_rows'] = $data['total_rows'] = $this->M_su_kien_table->tong_so_sukien();
			        $data['total_rows'] = $config['total_rows'];
			        $config['per_page'] = 20;
			        $config['uri_segment'] = 4;
			        $config['use_page_numbers'] = TRUE;
			        $config['full_tag_open'] = '<nav><ul class="pagination">';
			        $config['full_tag_close'] = '</ul></nav>';
			        $config['first_link'] = '|<';
			        $config['first_tag_open'] = '<li>';
			        $config['first_tag_close'] = '</li>';
			        $config['first_url'] = '';
			        $config['last_link'] = '>|';
			        $config['last_tag_open'] = '<li>';
			        $config['last_tag_close'] = '</li>';
			        $config['next_link'] = '&gt;';
			        $config['next_tag_open'] = '<li>';
			        $config['next_tag_close'] = '</li>';
			        $config['prev_link'] = '&lt;';
			        $config['prev_tag_open'] = '<li>';
			        $config['prev_tag_close'] = '</li>';
			        $config['cur_tag_open'] = '<li class="active"><a href="#">';
			        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
			        //<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			        $config['num_tag_open'] = '<li>';
			        $config['num_tag_close'] = '</li>';
			        $this->pagination->initialize($config);
			        $trang=$this->uri->segment(4)?$this->uri->segment(4):1;
			        $start=($trang-1)*$config['per_page'];
			        $data['link_page']=$this->pagination->create_links();
			        $data['ds_sukien']=$this->M_su_kien_table->ds_su_kien_phan_trang($config['per_page'],$start);
					$data['path'] = 'quan_tri/V_ds_su_kien';
					$this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
	public function updateRemain($userid,$data)
	{
		if (isset($data))
		{
			if (!empty($data))
			{
				$now = time();
				foreach ($data as $key=>$val)
				{
					$day = $val['day'];
					$month = $val['month'];
					$year = $val['year'];
					$mydate = strtotime($this->countBetweenDates($day,$month,$year));
					$remain = ceil(($mydate - $now)/(60*60*24));
					$dataRemain['remain'] = $remain;
					if (!$this->M_su_kien_table->updateRemain($val['id'],$userid,$dataRemain))
						return false;
				}
			}
		}
	}
	public function countBetweenDates($day,$month,$year)
	{
		$namsk = 0;
		$thangsk = 0;
		$ngaysk = 0;
		if ($year != 0)
		{
			//NEU CO NAM SU KIEN
			if ($year > $this->namhientai)
			{
				//NEU NAM SU KIEN LON HON NAM HIEN TAI
				$namsk = $year;
				$thangsk = $month;
				$ngaysk = $day;
			} elseif ($year = $this->namhientai) {
				//NEU NAM SU KIEN VA NAM HIEN TAI BANG NHAU, XET DEN THANG, NGAY
				if ($month > $this->thanghientai) // neu thang su kien lon hon thang hien tai
				{
					$namsk = $year;
					$thangsk = $month;
					$ngaysk = $day;
				} elseif ($month == $this->thanghientai)
				{
					// neu thang su kien = thang hien tai, xet den ngay
					if ($day >= $this->ngayhientai)
					{
						$namsk = $year;
						$thangsk = $month;
						$ngaysk = $day;
					} elseif ($day < $this->ngayhientai) 
					{
						$namsk = $year+1;
						$thangsk = $month;
						$ngaysk = $day;
					}
				} elseif ($month < $this->thanghientai)
				{
						$namsk = $year+1;
						$thangsk = $month;
						$ngaysk = $day;
				}
			}

		} else {
			// NEU KHONG CO NAM

			

			if ($month > $this->thanghientai) {
				// thang su kien > thang hien tai
					$namsk = $this->namhientai;
					$thangsk = $month;
					$ngaysk = $day;
			} 
			if ($month < $this->thanghientai) {
				// thang su kien < thang hien tai
					$namsk = $this->namhientai+1;
					$thangsk = $month;
					$ngaysk = $day;
			}
			if ($month == $this->thanghientai)
			{
				// neu thang su kien = thang hien tai
				if ($day >= $this->ngayhientai)
				{
					// neu day su kien lon hon ngay hien tai va thang = thanghientai
					$namsk = $this->namhientai;
					$thangsk = $month;
					$ngaysk = $day;
				} elseif ($day < $this->ngayhientai) {
					// neu thang su kien = thang hien tai, nhung ngay lai nho hon
					$namsk = $this->namhientai+1;
					$thangsk = $month;
					$ngaysk = $day;
				}
			} 

			
		} // end else: co nam

		return $namsk.'-'.$thangsk.'-'.$ngaysk;
	}
}

?>