<?php 
	session_start();
	ini_set("display_errors", 0);
	class C_emegazine_user extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
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
		
		public function detail()
		{
			$postid = $this->uri->segment(3);
			if ($postid && is_nan($postid) != 1) {

				$typenews = 'emegazine';
				$tablename = 'tin_tuc';
				$idkey = 1;
				$data['postArr'] = $this->M_emegazine->detailTitle($postid,$typenews,$tablename);

				//neu privated
				//Kiem tra sign in
				//Kiem tra id (sign in) co duoc tag voi id khong?
				
				if ($data['postArr']['privated'] == 1) {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} else {
					$data['title'] = 'Emagazine '.$data['postArr']['tieu_de'];
					$data['description'] = $data['postArr']['description'];
					$data['keyword'] = $data['postArr']['keyword'];
					$data['webpageArr'] = $this->M_emegazine->webpage($postid,$idkey,'blockemegazine');
					$data['block'] = $this->M_emegazine->block($postid,$idkey,'blockemegazine');
					$data['path'] = 'emegazine/detail';
					$this->load->view('layout/emegazine/layoutDetail', $data);
				} 
				
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			
		} // detail



		public function privated_detail()
		{
			$postid = $this->uri->segment(4);
			if ($postid && is_nan($postid) != 1) {

				$typenews = 'emegazine';
				$tablename = 'tin_tuc';
				$idkey = 1;
				$data['postArr'] = $this->M_emegazine->detailTitle($postid,$typenews,$tablename);

				//neu privated
				//Kiem tra sign in
				//Kiem tra id (sign in) co duoc tag voi id khong?
				
				if ($data['postArr']['privated'] == 1) {
					if (isset($this->userid) && !empty($this->userid)) {
						$table_name = 'tin_tuc';
						if ($this->M_privated->checkTags($this->userid,$postid,$table_name) === true) {
							$data['title'] = 'Emagazine '.$data['postArr']['tieu_de'];
							$data['description'] = $data['postArr']['description'];
							$data['keyword'] = $data['postArr']['keyword'];
							$data['webpageArr'] = $this->M_emegazine->webpage($postid,$idkey,'blockemegazine');
							$data['block'] = $this->M_emegazine->block($postid,$idkey,'blockemegazine');
							$data['path'] = 'emegazine/detail';
							$this->load->view('layout/emegazine/layoutDetail', $data);
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}
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


	}

?>