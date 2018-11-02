<?php 

class demo extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Auto/AutoDb');
    }

    public function postList() {
       $ojb = $this->AutoDb->getPostList('tin_tuc');
       
       $array = array();
       
       header('Access-Control-Allow-Origin: *');  
       foreach ($ojb as $item) {
         array_push($array, array(
         	 'id'	 => $item['id'],		
             'title' => $item['tieu_de'],
             'image' => $item['hinh']
         ));
       }
       echo json_encode($array, JSON_UNESCAPED_UNICODE);
    }
}