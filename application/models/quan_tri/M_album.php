<?php  
class M_album extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_img_to_images_album_update($data)
	{
		return $this->db->insert('images_album', $data);
	}
	public function delete_img_in_images_album($album,$index)
	{
		$this->db->where(array('album'=>$album,'index'=>$index));
		return $this->db->delete('images_album');
	}
	public function update_caption_album($data,$album,$idItem)
	{
		$this->db->where(array('album'=>$album,'id'=>$idItem));
		return $this->db->update('images_album',$data);
	}
	public function update_img_in_images_album($album,$idItem,$data)
	{
		$this->db->where(array('album'=>$album,'id'=>$idItem));
		return $this->db->update('images_album',$data);
	}
	public function countImgUpload($id)
	{
		$this->db->where(array('album'=>$id));
		$this->db->from('images_album');
		return $this->db->count_all_results();
	}

	public function data_unlink($id, $index)
	{
		$sql = "SELECT image FROM images_album WHERE images_album.index=".$index." and album=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function data_upload($id)
	{
		$sql = "select * from images_album where images_album.album=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function data_album($id)
	{
		$sql = "select * from album where id=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function delete_album($id)
	{
		$sql = "delete album,images_album from album inner join images_album where album.id=images_album.album and album.id=".$id;
		return $this->db->query($sql);
	}
	public function ds_album_phan_trang($limit,$start)
	{
		$this->db->where(array('publishing'=>1));
		$this->db->order_by('id', 'desc');
		$this->db->limit($limit,$start);
        $query=$this->db->get('album');
        if($query->num_rows()>0)
            return $query->result_array();
        return false;
	}
	public function tong_so_album()
	{
		$this->db->from('album');
		return $this->db->count_all_results();
	}
	public function albumName($id) {
		$sql = "select * from album where id=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function album_chi_tiet($id) {
		$sql = "select image,caption from images_album where images_album.album=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function albumLasted($id)
	{
		$sql = "select * from album where id !=".$id." and publishing=1 and privated=0 order by id desc limit 0,8";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function upload($data)
	{
		return $this->db->insert('images_album',$data);
	}
	public function Create_album($data)
	{
		return $this->db->insert('album', $data);
	}
	public function maxIdAlbum()
	{
		$sql = "select max(id) as id from album";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
}


?>