<?php
	class M_su_kien extends CI_Model
	{
		private $ten_su_kien, $doi_tuong, $ngay, $thang, $nam, $ghi_chu, $ngay_tao, $user;

		public function setData($data)
		{
			$this->ten_su_kien = isset($data['ten_su_kien'])?$data['ten_su_kien'] : '';
			$this->doi_tuong = isset($data['doi_tuong'])?$data['doi_tuong'] : '';
			$this->ngay = isset($data['ngay'])?$data['ngay'] : '';
			$this->thang = isset($data['thang'])?$data['thang'] : '';
			$this->nam = isset($data['nam'])?$data['nam'] : '';
			$this->ghi_chu = isset($data['ghi_chu'])?$data['ghi_chu'] : '';
			$this->ngay_tao = isset($data['ngay_tao'])?$data['ngay_tao'] : date("l j\/m\/Y\, h:i:s a");
			$this->user = isset($data['user'])?$data['user'] : '';
		}
		public function getData()
		{
			$data = array(
				'ten_su_kien' => $this->ten_su_kien,
				'doi_tuong' => $this->doi_tuong,
				'ngay' => $this->ngay,
				'thang' => $this->thang,
				'nam' => $this->nam,
				'ghi_chu' => $this->ghi_chu,
				'ngay_tao' => $this->ngay_tao,
				'user' => $this->user
				);
			return $data;
		}

	}

?>