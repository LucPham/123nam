<?php
	class M_su_kien_table extends CI_Model
	{
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
		public function getTable($tablename)
		{
			$query = $this->db->get($tablename);
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
		public function getUserSk($id_sk)
		{
			$sql = "select user from su_kien where id=".$id_sk;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
		public function su_kien_id($id)
		{
			$this->db->where(array('id'=>$id));
			$query = $this->db->get('su_kien');
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}

		public function ds_su_kien_phan_trang($limit,$start)
		{
			$this->db->order_by('thang', 'desc');
			$this->db->order_by('ngay', 'desc');
			$this->db->limit($limit,$start);
	        $query=$this->db->get('su_kien');
	        if($query->num_rows()>0)
	            return $query->result_array();
	        return false;
		}
		public function tong_so_sukien()
		{
			$this->db->from('su_kien');
			return $this->db->count_all_results();
		}
		public function ds_sk_hom_nay($d,$m,$user)
		{
			$sql = "select * from su_kien where ngay=".$d." and thang=".$m." and user=".$user;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function ds_sk_cac_thang($m, $user)
		{
			$sql = "select * from su_kien where thang=".$m." and user= ".$user." order by ngay";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function sk_trong_thang_hien_tai($ngay_hientai, $m, $user)
		{
			$sql = "select * from su_kien where ngay>".$ngay_hientai." and thang=".$m." and user=".$user." order by ngay";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				return $query->result_array();
			return false;
		}
		public function update($data, $id)
		{	
			$this->db->where(array('id'=>$id));
			return $this->db->update('su_kien', $data);
		}
		public function delete($id)
		{
			$this->db->where(array('id'=>$id));
			return $this->db->delete('su_kien');
		}
		public function tao_su_kien($data)
		{
			return $this->db->insert('su_kien', $data);
		}
	}

?>