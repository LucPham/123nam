<?php 
	class C_inform_evt_now extends CI_Controller
	{
		private $ngayhientai;
		private $thanghientai;
		private $namhientai;
		private $nextYear;
		private $next;
		private $dataYear;
		private $dataMonth;
		private $dataWeek;
		private $dataD;
		private $dataNoRepeat;
		private $repeatY;
		private $repeatM;
		private $repeatW; 
		private $repeatD;
		private $noRepeat;

		public function __construct()
		{
			parent::__construct();
			$this->load->model('su_kien/Model_Evt_Email_Handle');
			$this->ngayhientai = date("d");
			$this->thanghientai = date("m");
			$this->namhientai = date("Y");
			$this->nextYear = $this->namhientai+1;
			if ($this->thanghientai == 12)
				$this->next = 1;
			else 
				$this->next = $this->thanghientai + 1;
			$this->repeatY = 1000;
			$this->repeatM = 100;
			$this->repeatW = 10;
			$this->repeatD = 1;
			$this->noRepeat = 0;
			$this->dataYear = $this->Model_Evt_Email_Handle->getData($this->thanghientai,$this->next,$this->repeatY);
			$this->dataMonth = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatM);
			$this->dataWeek = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatW);
			$this->dataD = $this->Model_Evt_Email_Handle->getDataRepeat('eventuser', $this->repeatD);
			$this->dataNoRepeat = $this->Model_Evt_Email_Handle->getDatNoRepeat($this->thanghientai,$this->next,$this->namhientai,$this->nextYear,$this->noRepeat);
		}
	}
?>