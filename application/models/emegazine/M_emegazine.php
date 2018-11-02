<?php 
	class M_emegazine extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function userSearchAjax($query)
		{
			$sql = "select * from user where firstName like '".$query."' or lastName like '".$query."' or email like '".$query."'";
			$querys = $this->db->query($sql);
			if ($querys -> num_rows() > 0)
				return $querys->result_array();
			return false;
		}
		public function getBlock($idpost)
		{
			$this->db->where(array('postid'=>$idpost));
			$this->db->order_by('idkey','asc');
			$query = $this->db->get('blockemegazine');
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function checkIssetBlockAsIndex($id)
		{
			$this->db->where(array('id'=>$id));
			$query = $this->db->get('blockemegazine');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function checkIssetBlockidKey($idkey,$postid)
		{
			$this->db->where(array('idkey'=>$idkey, 'postid'=>$postid));
			$query = $this->db->get('blockemegazine');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function updateBlock($id,$data,$tablename, $postid)
		{
			$this->db->where(array('id'=>$id, 'postid'=>$postid));
			return $this->db->update($tablename,$data);
		}
		public function updateBlockIdkey($idkey,$data,$tablename, $postid)
		{
			$this->db->where(array('idkey'=>$idkey, 'postid'=>$postid));
			return $this->db->update($tablename,$data);
		}
		public function insertBlock($data,$tablename)
		{
			return $this->db->insert($tablename,$data);
		}
		public function deleteIndex($index,$postid,$tablename)
		{
			$this->db->where(array('postid'=>$postid, 'idkey'=>$index));
			return $this->db->delete($tablename);
		}
		public function deleteBlock($postid,$tablename)
		{
			$this->db->where(array('postid'=>$postid));
			return $this->db->delete($tablename);
		}

		/*__detail__*/

		public function detailTitle($postid,$typenews,$tablename)
		{
			$this->db->where(array('id'=>$postid, 'typenews'=>$typenews,'publishing'=>1));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function webpage($postid,$idkey,$tablename)
		{
			$this->db->where(array('postid'=>$postid, 'idkey'=>$idkey));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function block($postid,$idkey,$tablename)
		{
			$this->db->where(array('postid'=>$postid, 'idkey!='=>$idkey));
			$this->db->order_by('idkey','asc');
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
	}
?>