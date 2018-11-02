<?php

class M_votes extends CI_Model
{
    public function isVoted($user, $place_id, $tablename)
    {
        $this->db->where(array('place_id'=>$place_id, 'user'=>$user));
        $this->db->select('user');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return true;
        return false;
    }
    public function insertVotes($data, $tablename)
    {
        return $this->db->insert($tablename, $data);
    }
    public function updateVotes($place_id, $user, $data, $tablename)
    {
        $this->db->where(array('place_id'=>$place_id, 'user'=>$user));
        return $this->db->update($tablename, $data);
    }
    public function checkIssetScoreAverage($place_id,$tablename)
    {
        $this->db->where(array('place_id'=>$place_id));
        $this->db->select('total_score');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return true;
        return false;
    }
    public function getScorePlace($place_id, $tablename)
    {
        $this->db->where(array('place_id'=>$place_id));
        $this->db->select('score');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
    public function updateAverageVoteScore($place_id, $tablename, $data)
    {
        $this->db->where(array('place_id'=>$place_id));
        return $this->db->update($tablename, $data);
    }
    public function getAverageScore($place_id, $tablename)
    {
        $this->db->where(array('place_id'=>$place_id));
        $this->db->select('total_score');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->row_array();
        return false;
    }
}