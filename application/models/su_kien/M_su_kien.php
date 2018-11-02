<?php 
	class M_su_kien extends CI_Model
	{
		private $user, $evt_title, $evt_object, $day, $month, $year, $remain,$day_remain_update,$month_remain_update, $year_remain_update, $note_info, $evt_repeat, $evt_remind, $day_of_week, $created, $updated;
		public function setDataInsert($data)
		{
			$this->user = isset($data['user'])?$data['user']:'';
			$this->evt_title = isset($data['evt_title'])?$data['evt_title']:'';
			$this->evt_object = isset($data['evt_object'])?$data['evt_object']:'';
			$this->day = isset($data['day'])?$data['day']:date("d");
			$this->month = isset($data['month'])?$data['month']:date("m");
			$this->year = isset($data['year'])?$data['year']:'';

			$this->remain = isset($data['remain'])?$data['remain']:0;

			$this->day_remain_update = isset($data['day_remain_update'])?$data['day_remain_update']:date('d');

			$this->month_remain_update = isset($data['month_remain_update'])?$data['month_remain_update']:date('m');

			$this->year_remain_update = isset($data['year_remain_update'])?$data['year_remain_update']:date('Y');

			$this->note_info = isset($data['note_info'])?$data['note_info']:'';
			$this->evt_repeat = isset($data['evt_repeat'])?$data['evt_repeat']:'';
			$this->evt_remind = isset($data['evt_remind'])?$data['evt_remind']:'';
			$this->day_of_week = isset($data['day_of_week'])?$data['day_of_week']:'';
			$this->created = isset($data['created'])?$data['created']:date("h:m:sa d-m-Y");
			$this->updated = isset($data['updated'])?$data['updated']:date("h:m:sa d-m-Y");
		}
		public function getDataInsert()
		{
			$data = array(
				'user'=>$this->user,
				'evt_title'=>$this->evt_title,
				'evt_object'=>$this->evt_object,
				'day'=>$this->day,
				'month'=>$this->month,
				'year'=>$this->year,
				'remain'=>$this->remain,
				'day_remain_update'=>$this->day_remain_update,
				'month_remain_update'=>$this->month_remain_update,
				'year_remain_update'=>$this->year_remain_update,
				'note_info'=>$this->note_info,
				'evt_repeat'=>$this->evt_repeat,
				'evt_remind'=>$this->evt_remind,
				'day_of_week'=>$this->day_of_week,
				'created'=>$this->created,
				'updated'=>$this->updated
			);
			return $data;
		}
	}
?>