<?php
	ini_set("display_errors", 0);
	class C_nhat_ky extends CI_Controller
	{
		public function __construct()
		{	
			parent::__construct();
			$this->load->model('nhat_ky/M_nhat_ky');
			$this->load->model('quan_tri/M_su_kien_table');
			
		}
		public function chi_tiet_tin()
		{
			if ($this->session->userdata('id') && $this->session->userdata('boss') == 1)
			{
				$checkPW_login = $this->M_nhat_ky->checkPW_login($this->session->userdata('id'),$this->session->userdata('email'));
				if ($checkPW_login != false)
				{
					$id = $this->uri->segment(4);
					if (!$id) {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
					$data['arr_chi_tiet'] = $this->M_nhat_ky->arr_chi_tiet($id);
					$data['title'] = $data['arr_chi_tiet']['tieu_de'].' - Phamlucblog nhật ký ngày xanh';
					$data['keyword'] = $data['arr_chi_tiet']['keyword'];
					$data['description'] = $data['arr_chi_tiet']['description'];
					$currentPostTitle = $data['arr_chi_tiet']['tieu_de'];
					$data['RelatedPost'] = $this->M_nhat_ky->RelatedPost($currentPostTitle);
					$data['path'] = 'layout/nhat_ky/chi_tiet_tin/noi_dung';
					$this->load->view('layout/nhat_ky/chi_tiet_tin/layoutChitiet', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}

			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}

			
		}
		public function index()
		{
			if ($this->session->userdata('id') && $this->session->userdata('boss') == 1)
			{
				$checkPW_login = $this->M_nhat_ky->checkPW_login($this->session->userdata('id'),$this->session->userdata('email'));
				if ($checkPW_login != false)
				{
					$data['title'] = 'Nhật ký - Phamlucblog';
					$data['keyword'] = 'nhat ky, phamluc, phamlucblog, tam su, tinh yeu, 12c2';
					$data['description'] = 'Nhật ký của Pham Luc';
					$data['arr_top_diary'] = $this->M_nhat_ky->arr_top_diary('top_diary');
					$data['arr_top_diary_ngang'] = $this->M_nhat_ky->arr_top_diary_ngang('top_diary');

					$data['arr_ds_luu_but'] = $this->M_nhat_ky->arr_ds_luu_but('news_diary');
					$data['path'] = 'layout/nhat_ky/noi_dung_nhat_ky';
					$this->load->view('layout/nhat_ky/layoutNhatky', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}

			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
	}
?> 