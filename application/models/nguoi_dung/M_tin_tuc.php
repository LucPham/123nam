<?php
	class M_tin_tuc extends CI_Model
	{
		
		public function GetBanner($layout,$location)
		{
			$sql = "SELECT * from banner where layout='".$layout."' and location='".$location."' and hide_show=1 and usingNow=1";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function arr_album2() {
			$sql = "select * from album where publishing=1 and privated=0 order by id desc limit 4,4";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function arr_album1() {
			$sql = "select * from album where publishing=1 and privated=0 order by id desc limit 0,6";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function dsAlbum()
		{
			$sql = "select * from album order by id desc limit 0,20";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function ds_tin_limit($loai_tin, $start, $limit)
		{
			$sql = "select * from tin_tuc where publishing=1 and privated=0 and loai_tin='".$loai_tin."' order by id desc limit ".$start.",".$limit;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function ds_danh_muc_tin_tuc()
		{
			$sql = "select * from tin_tuc where publishing = 1 and privated=0 and top= 0 and loai_tin !='hot' and loai_tin != 'diary' order by id desc limit 0,13";
			
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function tin_phu_trang_nhat($loai_tin)
		{
			$sql = "select * from tin_tuc where loai_tin = '".$loai_tin."' order by id desc limit 1,4";
			
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function tin_chinh_trang_nhat()
		{
			$this->db->where(array('publishing'=>1, 'top'=>1,'privated'=>0, 'loai_tin'=>'news_top1'));
			$query = $this->db->get('tin_tuc');
			if ($query->num_rows() > 0) 
				return $query->row_array();
		}
	}
?>