<?php 
	class M_thu7 extends CI_Model
	{
		public function __construct() 
		{
			parent::__construct();
		}


		public function getResultId($tablename, $id)
		{
			$this->db->where(array('timeline_id'=>$id));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function update($tablename,$data, $id) {
			$this->db->where(array('timeline_id'=>$id));
			return $this->db->update($tablename,$data);
		}
		public function count_all($tablename) {
			return $this->db->count_all($tablename);
		}
		public function pagination($tablename,$limit, $start) {
			$this->db->order_by('timeline_id', 'desc');
			$this->db->limit($limit,$start);
	        $query=$this->db->get($tablename);
	        if($query->num_rows()>0)
	            return $query->result_array();
	        return false;
		}
		public function deleteById($id, $tablename)
		{
			$this->db->where(array('timeline_id'=>$id));
			return $this->db->delete($tablename);
		}
	}

?>