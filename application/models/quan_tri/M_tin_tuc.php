<?php

class M_tin_tuc extends CI_Model
{
	private $publishing, $top, $privated, $tieu_de, $icon, $typenews, $overShort, $tom_tat, $noi_dung, $hinh, $loai_tin, $kieu_tin,$url, $user, $created, $keyword, $description, $issetSurvey;
//kieu tin 

//tintuc: 00
//hinh anh: 01

	public function setData($data)
	{
		$this->publishing = isset($data['publishing'])?$data['publishing'] : 0;
		$this->top = isset($data['top'])?$data['top'] : '0';
		$this->privated = isset($data['privated'])?$data['privated'] : '0';
		$this->tieu_de = isset($data['tieu_de'])?$data['tieu_de'] : '';
		$this->icon = isset($data['icon'])?$data['icon'] : '0';
		$this->typenews = isset($data['typenews'])?$data['typenews'] : 'detail';
		$this->overShort = isset($data['overShort'])?$data['overShort'] : '';
		$this->tom_tat = isset($data['tom_tat'])?$data['tom_tat'] : '';
		$this->noi_dung = isset($data['noi_dung'])?$data['noi_dung'] : '';
		$this->hinh = isset($data['hinh'])?$data['hinh'] : '';
		$this->loai_tin = isset($data['loai_tin'])?$data['loai_tin'] : '';
		$this->kieu_tin = 00;
		$this->url = isset($data['url'])?$data['url'] : '';
		$this->user = isset($data['user'])?$data['user'] : '';
		$this->created = isset($data['created'])?$data['created'] : date("l j\/m\/Y\, h:i:s a");
		$this->keyword = isset($data['keyword'])?$data['keyword'] : '';
		$this->description = isset($data['description'])?$data['description'] : '';
		$this->issetSurvey = isset($data['issetSurvey'])?$data['issetSurvey'] : 0;
	}
	public function getData()
	{
		$data = array(
			'publishing'=>$this->publishing,
			'top'=>$this->top,
			'privated'=>$this->privated,
			'tieu_de'=>$this->tieu_de,
			'icon'=>$this->icon,
			'typenews'=>$this->typenews,
			'overShort'=>$this->overShort,
			'tom_tat'=>$this->tom_tat,
			'noi_dung'=>$this->noi_dung,
			'hinh'=>$this->hinh,
			'loai_tin'=>$this->loai_tin,
			'kieu_tin'=>$this->kieu_tin,
			'url'=>$this->url,
			'user'=>$this->user,
			'created'=>$this->created,
			'keyword'=>$this->keyword,
			'description'=>$this->description,
			'issetSurvey'=>$this->issetSurvey
		);
		return $data;
	}
}

?>