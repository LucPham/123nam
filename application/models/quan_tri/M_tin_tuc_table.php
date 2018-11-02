<?php
class M_tin_tuc_table extends CI_Model
{
	public function ds_tin()
	{
		$query = $this->db->get('tin_tuc');
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function updateToTop1()
	{
		$max = $this->idToTop1();
		$maxID = $max['id'];
		$data['publishing'] =1;
		$data['top'] ='1';
		$data['loai_tin'] = 'news_top1';
		$this->db->where(array('id'=>$maxID));
		return $this->db->update('tin_tuc',$data);
	}
	public function idToTop1()
	{
		$max = $this->maxID('tin_tuc');
		$maxID = $max['id'];
		$this->db->where(array('id!='=>$maxID));
		$this->db->order_by('id','desc');
		$this->db->limit(1,0);
		$this->db->select('id');
		$query = $this->db->get('tin_tuc');
		if ($query->num_rows() > 0)
			return $query->row_array();
		else return false;
	}
	public function kiem_tra_loai_tin($id)
	{
		$sql = "select tin_tuc.loai_tin from tin_tuc inner join loai_tin_nhat_ky where tin_tuc.loai_tin=loai_tin_nhat_ky.ma_loai and id=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return true;
		return false;
	}
	public function checkIssetPostTableAndID($tablename,$id)
	{
		$this->db->where(array('id'=>$id, 'publishing'=>0));
		$this->db->select('id,tieu_de');
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function checkIssetPostID($id,$tablename)
	{
		$this->db->where(array('id'=>$id, 'publishing'=>0));
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function getEmailFromUSertags($idpost) 
	{
		$sql = "SELECT user.email,user.firstName FROM user INNER JOIN usertags WHERE user.id=usertags.userid AND usertags.postid=".$idpost;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;

	}
	public function PhotoPostDetail($typenews,$tablename,$id)
	{
		if ($tablename == 'tin_tuc') {
			$this->db->where(array('typenews'=>$typenews,'id'=>$id));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		} else {
			$this->db->where(array('id'=>$id));
			$query = $this->db->get($tablename);
			if ($query->num_rows() > 0)
				return $query->row_array();
			return false;
		}
	}
	public function checkIssetCategoryId($category,$id)
	{
		$this->db->where(array('loai_tin'=>$category,'id'=>$id));
		$query = $this->db->get('tin_tuc');
		if ($query -> num_rows() > 0)
			return 1;
		else return 0;
	}
	public function checkArticleShowHideID($tablename,$id)
	{
		$this->db->where(array('id'=>$id,'publishing'=>1));
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return 1;
		else return 0;
	}
	public function checkIssetId($id,$tablename)
	{
		$this->db->where(array('id'=>$id));
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return 1;
		return 0;
	}
	public function checkIsset($typenews,$id)
	{
		$type_news_in_tin_tuc_table = array();
		$loai_tin = $this->ds_loai_tin();
		foreach ($loai_tin as $key=>$item) {
			$type_news_in_tin_tuc_table[$key] = $item['ma_loai'];
		} 
		if (in_array($typenews,$type_news_in_tin_tuc_table)) {
			$this->db->where(array('id'=>$id,'loai_tin'=>$typenews));
			$query = $this->db->get('tin_tuc');
			if ($query->num_rows() > 0)
				return 1;
			else return 0;
		} elseif ($typenews == 'album') {
			return 1;
		}
	}
	public function checkPW_login($id,$email)
	{
		$sql = "select password from user where id=".$id." and email='".$email."'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function checkPW_loginUser($id)
	{
		$sql = "select id from user where id=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function GetBanner($layout,$location)
	{
		$sql = "SELECT id,imgName,link from banner where layout='".$layout."' and location='".$location."' and hide_show=1 and usingNow=1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function ajax_chuyen_muc_album($id,$per_load)
	{
		$sql = "SELECT * from album where privated=0 and id<".$id." order by id desc limit ".$per_load;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function ajax_chuyen_muc_tin($id,$category,$per_load)
	{
		$sql = "SELECT * from tin_tuc where privated=0 and loai_tin='".$category."' and id<".$id." order by id desc limit ".$per_load;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function danh_sach_album($per_page)
	{
		$sql = "SELECT * from album where publishing=1 and privated=0 order by id desc limit ".$per_page;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function danh_sach_tin($loai_tin,$per_page)
	{
		$sql = "SELECT * from tin_tuc where publishing=1 and privated=0 and loai_tin='".$loai_tin."' order by id desc limit ".$per_page;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function RelatedPostAlbum($CurrentPostTitle)
	{
		$sql ="SELECT *,MATCH(ten_album) AGAINST ('".$CurrentPostTitle."') AS score FROM album WHERE MATCH(ten_album) AGAINST ('".$CurrentPostTitle."') AND ten_album !='".$CurrentPostTitle."' ORDER BY score DESC LIMIT 4";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;

	}
	public function lastestPost($tablename,$id)
	{
		$this->db->where(array('publishing'=>1, 'privated'=>0, 'id!='=>$id));
		$this->db->order_by('id','desc');
		$this->db->limit(4);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function PrivatelastestPost($tablename,$id)
	{
		$this->db->where(array('publishing'=>1, 'privated'=>1, 'id!='=>$id));
		$this->db->order_by('id','desc');
		$this->db->limit(4);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function RelatedPostLikeCount($tablename, $relatedId)
	{
		$this->db->where(array('publishing'=>1));
		$this->db->where_in('id',$relatedId);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->num_rows();
		return false;

	}
	
	public function RelatedPostLike($tablename, $relatedId)
	{
		$this->db->where(array('publishing'=>1,'privated'=>0));
		$this->db->where_in('id',$relatedId);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;

	}
	public function PrivateRelatedPostLike($tablename, $relatedId)
	{
		$this->db->where(array('publishing'=>1,'privated'=>1));
		$this->db->where_in('id',$relatedId);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;

	}
	public function RelatedPost($CurrentPostTitle,$tablename)
	{
		$sql ="SELECT id,tieu_de,hinh,loai_tin,url,MATCH(tieu_de) AGAINST ('".$CurrentPostTitle."') AS score FROM ".$tablename." WHERE MATCH(tieu_de) AGAINST ('".$CurrentPostTitle."') AND tieu_de !='".$CurrentPostTitle."' ORDER BY score DESC LIMIT 4";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;

	}
	public function ds_bai_viet_moi_nhat($id)
	{
		$sql = "select * from tin_tuc inner join loai_tin where loai_tin.ma_loai=tin_tuc.loai_tin and publishing=1 and privated=0 and id!=".$id." order by id desc limit 0,12";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function private_ds_bai_viet_moi_nhat($id)
	{
		$sql = "select * from tin_tuc inner join loai_tin where loai_tin.ma_loai=tin_tuc.loai_tin and publishing=1 and privated=1 and id!=".$id." order by id desc limit 0,12";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function chi_tiet_tin_cho_phe_duyet($id)
	{
		$this->db->where(array('id'=>$id,'publishing'=>0));
		$query = $this->db->get('tin_tuc');
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function chi_tiet_tin($id)
	{
		$sql = "select * from tin_tuc where id=".$id;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function xoa_bai_viet($id)
	{
		$this->db->where(array('id'=>$id));
		return $this->db->delete('tin_tuc');
	}
	public function deletePostPublishing($id, $tablename)
	{
		$this->db->where(array('id'=>$id, 'publishing'=>0));
		return $this->db->delete($tablename);
	}
	public function delete($tablename,$id)
	{
		$this->db->where(array('id'=>$id));
		return $this->db->delete($tablename);
	}
	public function deleteUsertags($tablename,$id) {
		$this->db->where(array('postid'=>$id));
		return $this->db->delete($tablename);
	}
	public function updateFeildTable($feild, $tablename,$id,$data)
	{
		$this->db->where(array($feild=>$id));
		return $this->db->update($tablename,$data);
	}
	public function updateTop1($tablename,$data)
	{
		$this->db->where(array('top'=>1));
		return $this->db->update($tablename,$data);
	}
	public function update($tablename,$id,$data)
	{
		$this->db->where(array('id'=>$id));
		return $this->db->update($tablename,$data);
	}
	public function insert($data,$tablename)
	{
		return $this->db->insert($tablename,$data);
	}
	public function chinh_sua_bai_viet($id, $data)
	{	
		$this->db->where(array('id'=>$id));
		return $this->db->update('tin_tuc', $data);
	}
	public function tin_theo_id($id)
	{
		$this->db->where(array('id'=>$id));
		$query = $this->db->get('tin_tuc');
		if($query->num_rows()>0)
            return $query->row_array();
        return false;
	}


	public function ten_loai_tin($ma_loai)
	{
		$this->db->where(array('ma_loai'=>$ma_loai));
		$this->db->select('loai_tin');
		$query=$this->db->get('loai_tin');
        if($query->num_rows()>0)
            return $query->result_array();
        return false;
	}
	public function ds_loai_tin_nhat_ky()
	{
		$query = $this->db->get('loai_tin_nhat_ky');
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}

	public function album_cho_phe_duyet_phan_trang($limit,$start,$tablename)
	{
		$this->db->where(array('publishing'=>0));
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get($tablename);
		if($query->num_rows()>0)
            return $query->result_array();
        return false;
	}
	public function ds_cho_phe_duyet_phan_trang($limit,$start,$tablename)
	{
		$this->db->where(array('publishing'=>0,'loai_tin!='=>'diary'));
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get($tablename);
		if($query->num_rows()>0)
            return $query->result_array();
        return false;
	}
	public function ds_tin_loai_tin_phan_trang($limit,$start,$ma_loai)
	{
		$this->db->where(array('publishing'=>1,'loai_tin'=>$ma_loai));
		$this->db->order_by('id', 'desc');
		$this->db->limit($limit,$start);
        $query=$this->db->get('tin_tuc');
        if($query->num_rows()>0)
            return $query->result_array();
        return false;
	}
	public function tong_so_cho_phe_duyet($tablename)
	{
		$this->db->where(array('publishing'=>0));
		$this->db->from($tablename);
		return $this->db->count_all_results();
	}
	public function tong_so_tin_loai_tin($ma_loai)
	{	
		$this->db->where(array('loai_tin'=>$ma_loai));
		$this->db->from('tin_tuc');
		return $this->db->count_all_results();
	}
	public function ds_tin_loai_tin($ma_loai)
	{
		$this->db->where(array('loai_tin'=>$ma_loai));
		$query = $this->db->get('tin_tuc');
			if ($query->num_rows() > 0)
				return $query ->result_array();
			return false;
	}
	public function them_tin($data)
	{	
		$data['tieu_de'] = $this->db->escape_str($data['tieu_de']);
		$data['tom_tat'] = $this->db->escape_str($data['tom_tat']);
		return $this->db->insert('tin_tuc', $data);
	}
	public function loai_tin_nhat_ky()
	{
		$query = $this->db->get('loai_tin_nhat_ky');
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function ds_loai_tin()
	{
		$query= $this->db->get('loai_tin');
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function maxID($tablename)
	{
		$sql = "select max(id) as id from ".$tablename;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function SurveyInsert($tablename,$data)
	{
		return $this->db->insert($tablename,$data);
	}
	public function survey_category()
	{
		$query = $this->db->get('survey_category');
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function getSurvey($articleid)
	{
		$this->db->where(array('articleid'=>$articleid));
		$query = $this->db->get('survey');
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function getSurvey_id($surveyid)
	{
		$this->db->where(array('id'=>$surveyid));
		$query = $this->db->get('survey');
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function get_survey_answer($surveyid)
	{
		$sql = "select * from survey_answers where surveyid=".$surveyid;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function deleteSurveyAnswers($articleid,$surveyid)
	{
		$this->db->where(array('articleid'=>$articleid,'surveyid'=>$surveyid));
		return $this->db->delete('survey_answers');
	}
	public function updateSurvey($surveyid,$data)
	{
		$this->db->where(array('id'=>$surveyid));
		return $this->db->update('survey',$data);
	}
	public function insertSurveyAnswers($data)
	{
		return $this->db->insert('survey_answers',$data);
	}
	public function deleteSurvey($articleid)
	{
		$this->db->where(array('articleid'=>$articleid));
		return $this->db->delete('survey');
	}
	public function insertAnswerResult($data)
	{
		return $this->db->insert('survey_result',$data);
	}
	public function getRultCurrent($answerid)
	{
		$sql = "select result as num from survey_answers where id=".$answerid;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function getAnswerFromUser($answerid)
	{
		$numAnswer = $this->getRultCurrent($answerid);
		$num = ($numAnswer['num'])*1+1;
		$sql = "update survey_answers set result=".$num." where id=".$answerid;
		$query = $this->db->query($sql);
		if($query)
			return true;
		return false;
	}
	/* VOTE*/
	public function sumVote($surveyid)
	{
		$sql = "select sum(result) as sumvote from survey_answers where surveyid=".$surveyid;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
	public function getUsertags($tablename,$postid) {
		$this->db->where(array('postid'=>$postid));
		$query = $this->db->get($tablename);
		if($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function getRowArray($tablename)
	{
		 $query = $this->db->get($tablename);
		 if ($query->num_rows() > 0)
		 	return $query->result_array();
		 return false;
	}
	public function getResult_id($answerid)
	{
		$this->db->where(array('answerid'=>$answerid));
		$this->db->select('results');
		$query = $this->db->get('survey_result');
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}

	public function getArray($tablename,$select) 
	{
		if ($tablename !='album') {
			$nhatky = $this->ds_loai_tin_nhat_ky();
			$nhatkyArr = array();
			foreach ($nhatky as $key=>$item) {
				$nhatkyArr[$key] = $item['ma_loai'];
			}
			$this->db->where_not_in('loai_tin',$nhatkyArr);
		}
		$this->db->select($select);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function getArrayNotId($tablename,$select,$id) 
	{
		$this->db->where(array('id!='=>$id));
		$this->db->select($select);
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->result_array();
		return false;
	}
	public function getID($tablename,$idrandom)
	{
		$this->db->where(array('idrandom'=>$idrandom));
		$this->db->select('id');
		$query = $this->db->get($tablename);
		if ($query->num_rows() > 0)
			return $query->row_array();
		return false;
	}
}

?>