<?php 
	ini_set('display_errors', 0);
	class C_cv extends CI_Controller {
		public function __construct() 
		{
			parent::__construct();
		}
		public function index()
		{
			$data['title'] = 'Luc Pham Profile';
			$this->load->view('layout/cv/index', $data);
		}
	}

?>