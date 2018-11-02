<?php 
	class C_user extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('quan_tri/M_user_system');
		}


		public function listUserRegisterThisMonth()
		{
			$currentMonth = date('m');
			$currentYear = date('Y');
			$this->load->library('pagination');
	        $config['base_url'] = site_url().'quan-tri/user/list/this-month';
	        $config['total_rows'] = $data['total_rows'] = $this->M_user_system->listUserRegisterThisMonthTotal($currentMonth,$currentYear);
	        $config['per_page'] = 20;
	        $config['uri_segment'] = 5;
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
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $this->pagination->initialize($config);
	        $trang=$this->uri->segment(5)?$this->uri->segment(5):1;
	        $start=($trang-1)*$config['per_page'];
	        $data['link_page']=$this->pagination->create_links();
	        $data['listArr']=$this->M_user_system->listUserRegisterThisMonth($config['per_page'],$start,$currentMonth,$currentYear);

			$data['title'] = 'User Register This Month';
			$data['childmenu'] = 'menuChildRegisterSystem';
			$data['path'] = 'user_system/thisMonth';
			$this->load->view('layout/quan_tri/layoutAdmin',$data);
		}
		public function listUserOderByLogDate()
		{
			if ($this->uri->segment(4)) {
				 if ($this->uri->segment(4) == 'latest') 
				 	$oderby = 'desc';
				 else 
				 	$oderby = 'asc';
				 $data['ob'] = $this->uri->segment(4);
			}
			$this->load->library('pagination');
	        $config['base_url'] = site_url().'quan-tri/user/list/'.$this->uri->segment(4);
	        $config['total_rows'] = $data['total_rows'] = $this->M_user_system->UserTotal();
	        $config['per_page'] = 20;
	        $config['uri_segment'] = 5;
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
	        $trang=$this->uri->segment(5)?$this->uri->segment(5):1;
	        $start=($trang-1)*$config['per_page'];
	        $data['link_page']=$this->pagination->create_links();
	        $data['listArr']=$this->M_user_system->listUserOderByLogDate($config['per_page'],$start,$oderby);

			$data['title'] = 'List User';
			$data['childmenu'] = 'menuChildRegisterSystem';
			$data['path'] = 'user_system/latest';
			$this->load->view('layout/quan_tri/layoutAdmin',$data);
		}
		public function registerManageIndex()
		{
			$data['title'] = 'Register Manage System';
			$data['childmenu'] = 'menuChildRegisterSystem';
			$data['path'] = 'user_system/registerManageIndex';
			$this->load->view('layout/quan_tri/layoutAdmin',$data);
		}
		public function overview()
		{
			$data['count'] = $this->M_user_system->countUser();
			$count = $data['count']['countUser'];
			/*-----GENDER-----*/
			$countMale = $this->M_user_system->countUserGender(1);
			$countFemale = $this->M_user_system->countUserGender(0);
			$countOther = $this->M_user_system->countUserGender(3);

			$data['countMale'] = $countMale['countGender'];
			$data['countFemale'] = $countFemale['countGender'];
			$data['countOther'] = $countOther['countGender'];

			$data['percentMale'] = number_format(($countMale['countGender']/$data['count']['countUser'])*100,2);
			$data['percentFemale'] = number_format(($countFemale['countGender']/$data['count']['countUser'])*100,2);
			$data['percentOther'] = number_format(($countOther['countGender']/$data['count']['countUser'])*100,2);
			/*-----/GENDER-----*/
			

			/*-------YEARS OLD----*/
			$yearsOld2to9 = $this->M_user_system->countUserYearsOld(2,9);
			$yearsOld10to15 = $this->M_user_system->countUserYearsOld(10,15);
			$yearsOld16to32 = $this->M_user_system->countUserYearsOld(16,32);
			$yearsOld33to50 = $this->M_user_system->countUserYearsOld(33,50);
			$yearsOldUp50 = $this->M_user_system->countUserYearsOldUp(50);

			$data['yearsOld2to9'] = $yearsOld2to9['countYearsOld'];
			$data['yearsOld10to15'] = $yearsOld10to15['countYearsOld'];
			$data['yearsOld16to32'] = $yearsOld16to32['countYearsOld'];
			$data['yearsOld33to50'] = $yearsOld33to50['countYearsOld'];
			$data['yearsOldUp50'] = $yearsOldUp50['countYearsOld'];

			$data['percent2to9'] = number_format(($data['yearsOld2to9']/$count)*100,2);
			$data['percent10to15'] = number_format(($data['yearsOld10to15']/$count)*100,2);
			$data['percent16to32'] = number_format(($data['yearsOld16to32']/$count)*100,2);
			$data['percent33to50'] = number_format(($data['yearsOld33to50']/$count)*100,2);
			$data['percentUp50'] = number_format(($data['yearsOldUp50']/$count)*100,2);


			/*-------/YEARS OLD----*/

			$data['title'] = 'Overview User System';
			$data['path'] = 'user_system/overview';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);
		}
	}
?>