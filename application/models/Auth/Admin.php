<?php
class Admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function isAdmin($userid, $tablename)
    {
        $this->db->where(array('id'=>$userid, 'adm'=>1));
        $this->db->select('id');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return true;
        return false;
    }
    public function isBoss($userid, $tablename)
    {
        $this->db->where(array('id'=>$userid, 'boss'=>1));
        $this->db->select('id');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return true;
        return false;
    }
}
