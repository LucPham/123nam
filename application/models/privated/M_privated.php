<?php 
	ini_set("display_errors", 0);
	class M_privated extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('nguoi_dung/M_nguoi_dung');
		}


		public function deleteMultiLetter($userid,$mulid,$tablename)
		{
			$sql = "DELETE FROM ".$tablename." WHERE user=".$userid." and id in (".$mulid.")";
			return $query = $this->db->query($sql);
		}
		public function getLetterAvailable($userid,$limit,$start,$tablename)
		{
			$this->db->where(array('user'=>$userid));
			$this->db->order_by('_date', 'desc');
			$this->db->limit($limit,$start);
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function letterAvailableIsset($userid,$start,$limit,$tablename)
		{

			if ($this->M_nguoi_dung->checkBoss($userid) != false) {

				$this->db->select('id');
				$this->db->order_by('_date', 'desc');
				$this->db->limit($limit,$start);
				$query = $this->db->get($tablename);
				if ($query->num_rows() > 0)
					return true;
				return false;
				
			} else {
				$this->db->where(array('user'=>$userid));
				$this->db->select('id');
				$this->db->order_by('_date', 'desc');
				$this->db->limit($limit,$start);
				$query = $this->db->get($tablename);
				if ($query->num_rows() > 0)
					return true;
				return false;
			}

			
		}
		public function getLetterUser($tablename,$userid)
		{
			if ($this->M_nguoi_dung->checkBoss($userid) != false) {
				$this->db->limit(16,0);
				$this->db->order_by('_date', 'desc');
				$query = $this->db->get($tablename);
				if ($query->num_rows() > 0)
					return $query->result_array();
				return false;
			} else {
				$this->db->where(array('user'=>$userid));
				$this->db->limit(16,0);
				$this->db->order_by('_date', 'desc');
				$query = $this->db->get($tablename);
				if ($query->num_rows() > 0)
					return $query->result_array();
				return false;
			}
			

		}

		public function updateIdkey($tablename, $idkey, $data)
		{
			$this->db->where(array('idkey'=>$idkey));
			return $this->db->update($tablename,$data);
		}
		public function slideUsing($table_name)
		{
			$this->db->where(array('idkey!='=>0));
			$this->db->order_by('idkey','asc');
			$query = $this->db->get($table_name);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function checkLoverUser($userid) 
		{
			$this->db->where(array('id'=>$userid,'lover'=>1));
			$this->db->select('lover');
			$query = $this->db->get('user');
			if ($query->num_rows() > 0)
				return true;
			return false;
		}

		public function getListLoad($userid,$tablename,$start,$limit)
		{
			$sql = "SELECT *,".$tablename.'.id'." FROM $tablename inner join usertags where $tablename.id=usertags.postid and $tablename.publishing=1 and $tablename.privated = 1 and usertags.table_name='".$tablename."' and usertags.userid=".$userid." order by $tablename.id desc limit $start,$limit";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}

		public function getControl($tablename)
		{
			$this->db->where(array('tablename'=>$tablename));
			$query = $this->db->get('control');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getResultArray($tablename) {
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getRow($cond,$val,$tablename) 
		{
			$this->db->where(array($cond=>$val));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function checkControlvalid($controlvalid,$tablename) 
		{
			$this->db->where(array('tablename'=>$tablename, 'controlvalid'=>$controlvalid));
			$query = $this->db->get('control');
			if ($query->num_rows() > 0)
				return true;
			return false;
		}

		public function checkTags($userid,$postid,$table_name) 
		{
			$this->db->where(array('table_name'=>$table_name,'postid'=>$postid,'userid'=>$userid));
			$this->db->select('id');
			$query = $this->db->get('usertags');
			if ($query->num_rows() > 0)
				return true;
			return false;
		}
		public function slide($tablename)
		{
			$this->db->where(array('idkey!='=>0));
			$this->db->order_by('idkey','asc');
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query -> result_array();
			return false;
		}
		public function topPost1($userid)
		{
			$sql = "SELECT *,tin_tuc.id FROM tin_tuc inner join usertags where tin_tuc.id=usertags.postid and tin_tuc.publishing=1 and tin_tuc.privated = 1 and usertags.table_name='tin_tuc' and usertags.userid=".$userid." order by tin_tuc.id desc limit 0,3";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function topPost2($userid)
		{
			$sql = "SELECT *,tin_tuc.id FROM tin_tuc inner join usertags where tin_tuc.id=usertags.postid and tin_tuc.publishing=1 and tin_tuc.privated = 1 and usertags.table_name='tin_tuc' and usertags.userid=".$userid." order by tin_tuc.id desc limit 3,3";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function album($userid)
		{
			$sql = "SELECT album.id,album.tieu_de,album.url,album.hinh,album.created FROM album inner join usertags where album.id=usertags.postid and album.publishing=1 and usertags.userid=".$userid." order by album.id desc limit 0,4";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function update($cond,$val,$tablename,$data)
		{
			$this->db->where(array($cond=>$val));
			return $this->db->update($tablename,$data);
		}
		public function delete($id,$idkey,$tablename)
		{
			$this->db->where(array('id'=>$id, 'idkey'=>$idkey));
			return $this->db->delete($tablename);
		}
		public function getEmailId($id)
		{
			$sql = "select email from user where id=".$id;
			$query = $this->db->query($sql);
			if ($query -> num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function getTableOrderby($tablename,$oderCol,$opt) {
			$this->db->order_by($oderCol,$opt);
			$query = $this->db->get($tablename);
			if ($query -> num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getTable($tablename)
		{
			$query = $this->db->get($tablename);
			if ($query -> num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function getItemCond() 
		{
			$sql = "select id from user where boss =1";
			$query = $this->db->query($sql);
			if ($query -> num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function updateCond($tablename,$data,$idkey)
		{
			$this->db->where(array('idkey'=>$idkey));
			return $this->db->update($tablename,$data);
		}

		public function insert($tablename,$data)
		{
			return $this->db->insert($tablename,$data);
		}
	}
?>