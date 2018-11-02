<?php 
	class M_nhat_ky extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Count($category,$id)
		{
			$this->db->where(array('user'=>$id));
			$query = $this->db->get($category);
			if ($query->num_rows() > 0)
				return $query->num_rows();
			return false;
		}
		public function RelatedPost($CurrentPostTitle)
		{
			$sql ="SELECT id,tieu_de,hinh,tin_tuc.loai_tin,url,MATCH(tieu_de) AGAINST ('".$CurrentPostTitle."') AS score FROM tin_tuc inner join loai_tin_nhat_ky WHERE tin_tuc.loai_tin=loai_tin_nhat_ky.ma_loai and MATCH(tieu_de) AGAINST ('".$CurrentPostTitle."') AND tieu_de !='".$CurrentPostTitle."' ORDER BY score DESC LIMIT 4";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;

		}
		public function arr_chi_tiet($id)
		{
			$sql = "select * from tin_tuc inner join loai_tin_nhat_ky where tin_tuc.loai_tin=loai_tin_nhat_ky.ma_loai and id=".$id;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function arr_ds_luu_but($loai_tin)
		{
			$sql = "select * from tin_tuc where loai_tin='".$loai_tin."' order by id desc limit 0,7";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function checkPW_login($id,$email)
		{
			$sql = "select password from user where id=".$id." and email='".$email."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function arr_top_diary($loai_tin)
		{
			$sql = "select * from tin_tuc where loai_tin='".$loai_tin."' order by id desc limit 0,1";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function arr_top_diary_ngang($loai_tin)
		{
			$sql = "select * from tin_tuc where loai_tin='".$loai_tin."' order by id desc limit 1,4";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
	}
?>