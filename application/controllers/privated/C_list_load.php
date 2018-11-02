<?php 
	session_start();
	class C_list_load extends CI_Controller
	{
		private $userid;

		public function __construct()
		{
			parent::__construct();
			parent::__construct();
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

		public function insertAutoUserTags()
		{
			$data['table_name'] = 'tin_tuc';
			
			$data['userid'] = '10';

			for ($i = 137; $i <= 300; $i ++) {

				$data['postid'] = $i;
				$this->M_privated->insert('usertags',$data);

			}

		}
		public function insertAutoAlbum()
		{
			
			$data['publishing'] = 1;
			$data['privated'] = 1;
			$data['tom_tat'] = 'Thực tế, đơn xin nghỉ việc được bà Thoa gửi tới lãnh đạo Bộ từ ngày 28/7/2017, nhưng ở thời điểm thư này';


			$data['hinh'] = 'album-title.jpg';
			$data['url'] = 'auto-demo-test-list';
			$data['user'] = '10';
			$data['created'] = date('Y:m:d H:i:s');
			$data['updated'] = date('Y:m:d H:i:s');
			$data['keyword'] = 'auto,list,update,ajax';
			$data['description'] = 'news';
			
			for ($i = 1; $i <= 200; $i ++) {
				$data['tieu_de'] = 'Test List Menu Tags List Album '.$i;

				$this->M_privated->insert('album',$data);
			}
		}
		public function insertAuto()
		{
			$data['idrandom'] = '123';
			$data['publishing'] = 1;
			$data['privated'] = 1;
			
			$data['icon'] = 'photo';
			$data['typenews'] = 'detail';
			$data['overShort'] = 'hực tế, đơn xin nghỉ việc được bà Thoa gửi tới lãnh đạo Bộ từ ngày 28/7/2017, nhưng ở thời điểm đó đơn của bà không được chấp nhận do vẫn là cán bộ cấp cao chịu sự quản lý của Ban bí thư Trung ương. Sau khi Thủ tướng';
			$data['tom_tat'] = 'Thực tế, đơn xin nghỉ việc được bà Thoa gửi tới lãnh đạo Bộ từ ngày 28/7/2017, nhưng ở thời điểm đó đơn của bà không được chấp nhận do vẫn là cán bộ cấp cao chịu sự quản lý của Ban bí thư Trung ương. Sau khi Thủ tướng có quyết định miễn nhiệm chức danh Thứ trưởng Công Thương, bà Thoa trở thành công chức bình thường của Bộ. Do đó, việc quyết định cho bà nghỉ việc hay không thuộc thẩm quyền quyết định của lãnh đạo cơ quan này';
			$data['noi_dung'] = 'Thực tế, đơn xin nghỉ việc được bà Thoa gửi tới lãnh đạo Bộ từ ngày 28/7/2017, nhưng ở thời điểm đó đơn của bà không được chấp nhận do vẫn là cán bộ cấp cao chịu sự quản lý của Ban bí thư Trung ương. Sau khi Thủ tướng có quyết định miễn nhiệm chức danh Thứ trưởng Công Thương, bà Thoa trở thành công chức bình thường của Bộ. Do đó, việc quyết định cho bà nghỉ việc hay không thuộc thẩm quyền quyết định của lãnh đạo cơ quan nàyThực tế, đơn xin nghỉ việc được bà Thoa gửi tới lãnh đạo Bộ từ ngày 28/7/2017, nhưng ở thời điểm đó đơn của bà không được chấp nhận do vẫn là cán bộ cấp cao chịu sự quản lý của Ban bí thư Trung ương. Sau khi Thủ tướng có quyết định miễn nhiệm chức danh Thứ trưởng Công Thương, bà Thoa trở thành công chức bình thường của Bộ. Do đó, việc quyết định cho bà nghỉ việc hay không thuộc thẩm quyền quyết định của lãnh đạo cơ quan này';


			$data['hinh'] = 'title.jpg';
			$data['loai_tin'] = 'news';
			$data['url'] = 'auto-demo-test-list';
			$data['user'] = '10';
			$data['created'] = date('Y:m:d H:i:s');
			$data['updated'] = date('Y:m:d H:i:s');
			$data['keyword'] = 'auto,list,update,ajax';
			$data['description'] = 'news';
			
			for ($i = 1; $i <= 200; $i ++) {
				$data['tieu_de'] = 'Test List Menu Tags List Post '.$i;

				$this->M_privated->insert('tin_tuc',$data);
			}


		}
		public function menu_tags_list()
		{

			if (isset($this->userid)) {

				$userlover = $this->M_privated->checkLoverUser($this->userid);
				$data['userlover'] = $userlover;
					if (isset($userlover) && $userlover != false) {

						/*---OPTION---*/
							$start = 0;
							$limit = 16;
						/*---/OPTION---*/
						


						if ($this->uri->segment(2)) {
							$tablename = '';
							switch ($this->uri->segment(2)) {
								case 'album':
									$tablename = 'album';
									break;
								case 'mytag':
									$tablename = 'tin_tuc';
									break;
								default:
									# code...
									break;
							}
						}
						$data['title'] = $this->uri->segment(2).' - private, 123nam.com';
						$data['dataArr'] = $this->M_privated->getListLoad($this->userid,$tablename,$start,$limit);
						$data['tablename'] = $this->uri->segment(2);

						$data['nextpageisset'] = $this->M_privated->getListLoad($this->userid,$tablename,16,16);

						foreach ($nextpageisset as $item) {
							echo $item['id'].'--'.$item['tieu_de'].'<br/>';
						}

						$script = array();
						$script[] = 'layout/ajax/show_more_menu_tag';
						$data['script'] = $script;
						$data['path'] = 'layout/privated/list_load';
						$this->load->view('layout/privated/layout',$data);

					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index', $data);
					}	

			} /*--USER ID--*/

		}
		public function menu_tags_list_ajax()
		{
			if (isset($this->userid)) {

				$userlover = $this->M_privated->checkLoverUser($this->userid);
					if (isset($userlover) && $userlover != false) {

						$page = $_POST['page'];
						/*---OPTION---*/
							
							$limit = 16;
							$start = $page*$limit+1;
						/*---/OPTION---*/
						


						if ($_POST['tablename']) {
							$tablename = '';
							switch ($_POST['tablename']) {
								case 'album':
									$tablename = 'album';
									break;
								case 'mytag':
									$tablename = 'tin_tuc';
									break;
								default:
									# code...
									break;
							}
						}
						
						$data['dataArr'] = $this->M_privated->getListLoad($this->userid,$tablename,$start,$limit);
						$data['tablename'] = $_POST['tablename'];
						$data['page'] = $page;
						$data['pagenext'] = $page+1;
						$startnext = ($page+1)*$limit+1;
						$data['nextpageisset'] = $this->M_privated->getListLoad($this->userid,$tablename,$startnext,$limit);

						$this->load->view('layout/privated/show_more_menu_tag_ajax', $data);

					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index', $data);
					}	

			} /*--USER ID--*/
		}
	}
?>