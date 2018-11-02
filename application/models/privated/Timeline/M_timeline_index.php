<?php
class M_timeline_index extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getTimelineLimit($start, $limit, $tablename)
    {
        $this->db->order_by('timeline_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
    public function getTimeline($tablename)
    {
        $this->db->order_by('timeline_id', 'desc');
        $this->db->limit(9);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
}