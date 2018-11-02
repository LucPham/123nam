<?php
	class C_admin extends CI_Controller
	{
		public function wellcome()
		{
			$data['path'] = 'quan_tri/V_viet_bai';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);
		}
	}
?>