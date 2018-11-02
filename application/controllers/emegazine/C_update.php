<?php 
	/**
	* 
	*/
	class C_update extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
			$this->load->library('session');
		}
		public function update()
		{
			if (isset($_POST['post'])) {
				echo $_POST['title'];
			}
			$data['path'] = 'quan_tri/emegazine/update';
			$this->load->view('layout/quan_tri/layoutAdmin',$data);
		}
	}


?>