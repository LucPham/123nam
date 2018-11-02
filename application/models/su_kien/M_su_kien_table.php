<?php 
	class M_su_kien_table extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function getDataEvtId($arrayid,$userid)
		{
			$newid = implode(",",$arrayid);
			$sql = "select id,evt_title,day,month,year,evt_repeat,evt_remind,day_of_week from eventuser where id in (".$newid.") and user=".$userid." order by evt_remind";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getResultArrayid($tablename,$userid)
		{
			$sql = "select id,day,month,year,remain,day_remain_update,month_remain_update,year_remain_update from ".$tablename." where user=".$userid;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getTable($tablename)
		{
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getData($thanghientai,$next,$repeat,$userid)
		{
			$sql = "select * from eventuser where month in (".$thanghientai.", ".$next.") and evt_repeat =".$repeat." and user=".$userid;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getDataRepeat($tablename, $repeat,$userid)
		{
			$this->db->where(array('evt_repeat'=>$repeat,'user'=>$userid));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getDatNoRepeat($thanghientai,$nextMonth,$namhientai,$nextYear,$noRepeat, $userid)
		{
			$sql = "select * from eventuser where evt_repeat=".$noRepeat." and month in (".$thanghientai.", ".$nextMonth.") and year in (".$namhientai.", ".$nextYear.") and user=".$userid;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getHotenUser($userid)
		{
			$this->db->where(array('id'=>$userid));
			$this->db->select('firstName,lastName');
			$query = $this->db->get('user');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function countMyEvent($userid)
		{
			$sql = "SELECT count(id) as countEvent FROM eventuser WHERE user=".$userid;
			$query = $this->db->query($sql);
			return $query->row_array();
		}
		public function get_row_array($id,$userid,$tablename)
		{
			$this->db->where(array('id'=>$id,'user'=>$userid));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
		 	return false;
		}
		public function review($evtid,$userid)
		{
			$this->db->where(array('id'=>$evtid,'user'=>$userid));
			$query = $this->db->get('eventuser');
			if ($query->num_rows() > 0)
				return $query->row_array();
		 	return false;
		}
		public function get_event_user_month($userid,$month)
		{
			$sql = "select id,evt_title,day,month,year,remain,updated from eventuser where user=".$userid." and month=".$month." order by day";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
		 	return false;
		}
		public function get_result_array($tablename)
		{
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			else return false;
		}
		public function get_result_array_id($id,$tablename)
		{
			$sql = "select * from remind_of_events where id<".$id;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
		 	return false;
		}
		public function delete($id,$userid)
		{
			$this->db->where(array('id'=>$id,'user'=>$userid));
			return $this->db->delete('eventuser');
		}
		public function updateRemain($id,$userid,$data)
		{
			$this->db->where(array('id'=>$id,'user'=>$userid));
			return $this->db->update('eventuser',$data);
		}
		public function update($evtid,$userid,$tablename,$data)
		{
			$this->db->where(array('id'=>$evtid,'user'=>$userid));
			return $this->db->update($tablename,$data);
		}
		public function insert($data)
		{
			return $this->db->insert('eventuser',$data);
		}
		public function check_id_event($evt_id, $user_id)
		{
			$sql = "select id from eventuser where user=".$user_id." and id=".$evt_id;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return true;
		 	return false;
		}
	}
?>