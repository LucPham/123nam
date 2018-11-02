<?php 
	class Model_Evt_Email_Handle extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();

		}
		public function getRemind()
		{
			$query = $this->db->get('remind_of_events');
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getDataUser($userid)
		{
			$this->db->where(array('id'=>$userid));
			$this->db->select('firstName,lastName,email');
			$query = $this->db->get('user');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getData($thanghientai,$next,$repeat)
		{
			
			$sql = "select * from eventuser where month in (".$thanghientai.", ".$next.") and evt_repeat =".$repeat;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getDataRepeat($tablename, $repeat)
		{
			$this->db->where(array('evt_repeat'=>$repeat));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getDatNoRepeat($thanghientai,$nextMonth,$namhientai,$nextYear,$noRepeat)
		{
			$sql = "select * from eventuser where evt_repeat=".$noRepeat." and month in (".$thanghientai.", ".$nextMonth.") and year in (".$namhientai.", ".$nextYear.")";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
	}
?>
