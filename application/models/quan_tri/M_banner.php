<?php
	class M_banner extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function update_layout_duoc_chuyen_den($layout,$location,$data)
		{
			$this->db->where(array('layout'=>$layout, 'location'=>$location));
			
			return $this->db->update('banner',$data);
		}
		public function update_banner_id($id,$data)
		{
			$this->db->where(array('id'=>$id));
			return $this->db->update('banner',$data);
		}
		public function Lay_banner_theo_layout($layout)
		{
			$sql = "SELECT * from banner where banner.layout='".$layout."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function Ds_banner_trong_layout($idLayout)
		{
			$sql = "SELECT *,banner.id as ID from banner inner join layout where layout.id=banner.layout and layout.id='".$idLayout."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function GetLayout()
		{
			$query = $this->db->get('layout');
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function insert($data)
		{
			return $this->db->insert('banner',$data);
		}
	}
?> 