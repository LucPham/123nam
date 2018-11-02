<?php 
	class C_survey extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function multiple_choice()
		{
			$this->load->view('layout/survey/dang_trac_nghiem');
		}
		public function yes_no()
		{
			$this->load->view('layout/survey/dang_yes_no');
		}
		public function menu_dropdown()
		{
			$this->load->view('layout/survey/dang_menu_tha');
		}
		public function list_select()
		{
			$this->load->view('layout/survey/dang_trac_nghiem');
		}
	}
?>