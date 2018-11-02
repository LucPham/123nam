<?php
class M_getdata_interface extends CI_Model
{
    public function getThumbnail($place_id, $tablename)
    {
        $this->db->where(array('place_id'=>$place_id));
        $this->db->select('image_name,date_create');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->result_array();
        return false;
    }
    public function postRelative($tablename, $keyword)
    {
        $keywordEx = explode(",", $keyword);
        $sqlPrev = "SELECT * FROM $tablename WHERE privated=1 AND (";
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

    public function getRowTimeline($tablename, $id)
    {
        $this->db->where(array('timeline_id'=>$id));
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0)
            return $query->row_array();
        return false;
    }
}