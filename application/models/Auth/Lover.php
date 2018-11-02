<?php
class Lover extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function isLover($userid,$tablename)
    {
       $this->db->where(array('id'=>$userid, 'lover'=>1));
       $this->db->select('id');
       $query = $this->db->get($tablename);
       if ($query->num_rows() > 0)
           return true;
       return false;
    }
}
