<?php
	class M_nguoi_dung extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}
		public function maxID($tablename)
		{
			$this->db->select_max('id');
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}

		public function checkPrivateTags($userid,$tablename)
		{
			$this->db->where(array('userid'=>$userid));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return true;
			return false;
		}
		public function checkBoss($userid)
		{
			$this->db->where(array('id'=>$userid,'adm'=>1,'boss'=>1));
			$query = $this->db->get('user');
			if ($query->num_rows() >0)
				return $query->row_array();
			return false;
		}
		public function checkAdmin($userid)
		{
			$this->db->where(array('id'=>$userid,'adm'=>1));
			$query = $this->db->get('user');
			if ($query->num_rows() >0)
				return $query->row_array();
			return false;
		}
		public function checkTokenCookie($tokenCookie)
		{
			$this->db->where(array('token'=>$tokenCookie));
			$query = $this->db->get('auth_token');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function checkTokenIssetTable($userid,$tablename)
		{
			$this->db->where(array('userid'=>$userid));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return true;
			return false;
		}
		public function checkTokenIsset($userid)
		{
			$this->db->where(array('userid'=>$userid));
			$query = $this->db->get('auth_token');
			if ($query->num_rows() > 0)
				return true;
			return false;
		}
		public function dang_nhap($email, $hashPW)
		{
			$sql = "select * from user where email='".$email."' and password='".$hashPW."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getSaltPW($email)
		{
			$sql = "select salt from user where email='".$email."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function dang_ky($data)
		{
			return $this->db->insert('user', $data);
		}
		public function escapeStr($data)
		{
			return $this->db->escape($data);
		}
		public function delete($where, $tablename)
		{
			$this->db->where(array('token'=>$where));
			return $this->db->delete($tablename);
		}
		public function updateAuthToken($tablename, $data, $userid)
		{
			$this->db->where(array('userid'=>$userid));
			return $this->db->update($tablename,$data);
		}
		public function getTokenProfile($userid)
		{
			$sql = "select * from profile_token where userid =".$userid." order by id desc limit 0,1";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function updateTableUser($tablename,$userid,$data)
		{
			$this->db->where(array('id'=>$userid));
			return $this->db->update($tablename,$data);
		}
		public function updateTable($tablename,$userid,$data)
		{
			$this->db->where(array('userid'=>$userid));
			return $this->db->update($tablename,$data);
		}
		public function update($tablename, $data, $email)
		{
			$this->db->where(array('email'=>$email));
			return $this->db->update($tablename,$data);
		}
		public function insert($tablename, $data)
		{
			return $this->db->insert($tablename, $data);
		}
		public function checkTokenAndTimeTable($tablename,$token,$time)
		{
			$sql = "select * from ".$tablename." where token='".$token."' and expired='".$time."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function checkTokenAndTime($token, $time)
		{
			$sql = "select * from resetpwtable where token='".$token."' and time='".$time."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getUserFromSession($sessionid)
		{
			$this->db->where(array('id'=>$sessionid));
			$this->db->select('*');
			$query = $this->db->get('user');
			if ($query -> num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getUserFromTokenId($token)
		{
			$sql = "select user.id,firstName,lastName,email,adm,boss from user inner join auth_token where auth_token.userid=user.id and auth_token.token='".$token."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getUSerid($email)
		{
			$this->db->escape($email);
			$sql = "select id,lastName,firstName from user where email='".$email."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function kiem_tra_email_resetPWtalble($email)
		{
			$sql = "select email from resetpwtable where email='".$email."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return true;
			return false;
		}
		public function kiem_tra_email($email)
		{
			$sql = "select email from user where email='".$email."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return true;
			return false;
		}	
	}

?>