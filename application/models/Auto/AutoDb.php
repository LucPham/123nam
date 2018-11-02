<?php
class AutoDb extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function TimelineInsert($tablename, $data)
    {
        return $this->db->insert($tablename, $data);
    }
    public function getKeySearch($tablename, $keyword)
    {
        $keywordEx = explode(",", $keyword);
        $sqlPrev = "SELECT id,tieu_de,keyword FROM $tablename WHERE privated=1 AND (";
        $sqlLike = "";
        $count = count($keywordEx);
        foreach ($keywordEx as $key=>$item) {
            if ($key < $count-1) {
                $sqlLike .= "keyword LIKE '%".$item."%' OR ";
            } else $sqlLike .= "keyword LIKE '%".$item."%'";
        }
        $sqlLast = ")";
        $sql = $sqlPrev.$sqlLike.$sqlLast;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
    public function getPostList($tablename) {
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) 
            return $query->result_array();
        return false;
    }
}