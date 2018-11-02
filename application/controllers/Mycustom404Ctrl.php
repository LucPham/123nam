<?php
	ini_set('display_errors',0);
	class Mycustom404Ctrl extends CI_Controller{
		public function __construct()
		{
			parent:: __construct();
		}
		public function index()
		{
			//$this->output_set_status_header('404 - Rat tiec khong tim thay trang ban can');
			$data['title'] = 'Errors';
			$this->load->view('errors/index',$data);
		}
	}

?>