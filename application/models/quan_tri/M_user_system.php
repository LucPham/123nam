<?php 
	class M_user_system extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function countUser()
		{
			$sql = "select count(DISTINCT id) as countUser from user";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function UserTotal()
		{
			$this->db->from('user');
			return $this->db->count_all_results();
		}
		public function listUserRegisterThisMonthTotal($currentMonth,$currentYear)
		{
			$this->db->where(array('logMonth'=>$currentMonth, 'logYear'=>$currentYear));
			$this->db->from('user');
			return $this->db->count_all_results();
		}
		/*----------SELECT---------*/
		public function listUserRegisterThisMonth($limit,$start,$currentMonth,$currentYear)
		{
			$this->db->where(array('logMonth'=>$currentMonth, 'logYear'=>$currentYear));
			$this->db->order_by('logYear','desc');
			$this->db->order_by('logMonth', 'desc');
			$this->db->order_by('logDay', 'desc');
			$this->db->limit($limit,$start);
	        $query=$this->db->get('user');
	        if($query->num_rows()>0)
	            return $query->result_array();
	        return false;
		}
		public function listUserOderByLogDate($limit,$start,$oderby)
		{
			$this->db->order_by('logYear', $oderby);
			$this->db->order_by('logMonth', $oderby);
			$this->db->order_by('logDay', $oderby);
			$this->db->limit($limit,$start);
	        $query=$this->db->get('user');
	        if($query->num_rows()>0)
	            return $query->result_array();
	        return false;
		}
	/*----------/SELECT---------*/
		/*----GENDER----*/
		public function countUserGender($gender)
		{
			$sql = "select count(DISTINCT id) as countGender from user where gioi_tinh=".$gender;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		/*-----YEARS OLD----*/
		public function countUserYearsOld($start,$end)
		{
			$sql = "select count(DISTINCT id) as countYearsOld from user where old between ".$start." and ".$end;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function countUserYearsOldUp($old)
		{
			$sql = "select count(DISTINCT id) as countYearsOld from user where old > ".$old;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
	}
?>