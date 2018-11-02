<?php
	//ini_set("display_errors", 0);
	session_start(); 
	class C_album extends CI_Controller
	{
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('nguoi_dung/M_tin_tuc');
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

		public function index()
		{
			$data['title'] = 'Album hình - 123 Năm';
			$data['description'] = 'Album hình, tổng hợp hình ảnh sự kiện, nhóm - Môn học: công nghệ web và ứng dụng, Giảng viên Trần Anh Dũng, Khoa Công Nghệ Phần Mềm trường ĐH Công Nghệ Thông Tin';
			$data['albumData'] = $this->M_tin_tuc->dsAlbum();
			$data['path'] = 'album/DsAlbum';
			$data['bannerLeft'] = $this->M_tin_tuc->GetBanner('Al','left');
			$data['bannerRight'] = $this->M_tin_tuc->GetBanner('Al','right');
			$this->load->view('layout/ds_album/layoutDsAlbum',$data);
		}
		public function album_chi_tiet()
		{
			$id = $this->uri->segment(3);
			if ($this->userid) {
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			}
			
			if (isset($id))
			{
				$data['albumName'] = $this->M_album->albumName($id);
				$data['keyword'] = $data['albumName']['keyword'];
				$data['description'] = $data['albumName']['description'];
				if ($data['albumName']['privated'] == 1) {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} else {
					$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('AL','left');
					$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('AL','right');
					$data['arr_album_detail'] = $this->M_album->album_chi_tiet($id);

					$data['albumLatest'] = $this->M_album->albumLasted($id);
					$data['title'] = 'Album '.$data['albumName']['tieu_de'].' - 123nam';
					$data['path'] = 'layout/nguoi_dung/album/V_noi_dung';
					$this->load->view('layout/nguoi_dung/album/layoutAlbum', $data);
				}
			} // id
			
		} // album_chi_tiet


		public function privated_album_chi_tiet()
		{
			$id = $this->uri->segment(4);
			if ($this->userid) {

				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			}

			if (!empty($id))
			{
				$data['albumName'] = $this->M_album->albumName($id);
				$data['keyword'] = $data['albumName']['keyword'];
				$data['description'] = $data['albumName']['description'];

				if ($data['albumName']['privated'] == 1) {
					$table_name = 'album';
					
					if ($this->M_privated->checkTags($this->userid,$id,$table_name) == true) {
						
						$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('AL','left');
						$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('AL','right');
						$data['arr_album_detail'] = $this->M_album->album_chi_tiet($id);
						$data['albumLatest'] = $this->M_album->albumLasted($id);
						$data['title'] = $data['albumName']['tieu_de'].' - 123nam';
						$data['path'] = 'layout/nguoi_dung/album/V_noi_dung';
						$this->load->view('layout/nguoi_dung/album/layoutAlbum', $data);

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
			
		} // privated_album_chi_tiet


	} // end class
?>