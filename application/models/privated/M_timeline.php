<?php

class M_timeline extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getThumbnailId($placeId, $tablename)
    {
        $this->db->where(array('place_id'=>$placeId));
        $this->db->select('image_name, date_create');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
}