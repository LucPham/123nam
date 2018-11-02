<?php  
	/**
	* 
	*/
	ini_set('display_errors',0);
	class C_search extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			
			$this->userid = $this->issetCookie();
		}
		public function issetCookie()
		{
			$user = null;

			if (isset($_COOKIE['verifyAuthID'])) {

				$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
				$user = $userArr['id'];
			} else 
				$user = $this->session->userdata('id');

			return $user;
		}
		public function search()
		{
			$q = $_GET['q'];
			$query = explode(' ',strtolower($q));

			$relatedId = $this->searchRelate('news', $query);
			$relatedIdAlbum = $this->searchRelate('album', $query);
			if (!empty($relatedId)){
				$data['resultNews'] = $this->M_tin_tuc_table->RelatedPostLike('tin_tuc', $relatedId);
				$data['size'] = $this->M_tin_tuc_table->RelatedPostLikeCount('tin_tuc', $relatedId);
			}
			if (!empty($relatedIdAlbum)) {
				$data['resultAlbum'] = $this->M_tin_tuc_table->RelatedPostLike('album', $relatedIdAlbum);
				$data['sizeAlbum'] = $this->M_tin_tuc_table->RelatedPostLikeCount('album', $relatedIdAlbum);
				//var_dump($relatedIdAlbum);
				//var_dump($data['resultAlbum']);
			}
			$data['query'] = $q;
			$data['title'] = $q.' - Tìm kiếm';
			$data['path'] = 'search/result';
			$this->load->view('layout/search/index',$data);
		}

		public function searchNews()
		{
			$q = $_GET['q'];
			$query = explode(' ',strtolower($q));
			$relatedId = $this->searchRelate('news', $query);
			if (!empty($relatedId)){
				$data['resultNews'] = $this->M_tin_tuc_table->RelatedPostLike('tin_tuc', $relatedId);
				$data['size'] = $this->M_tin_tuc_table->RelatedPostLikeCount('tin_tuc', $relatedId);
			}
			$data['query'] = $q;
			$data['title'] = $q.' - Tìm kiếm';
			$data['path'] = 'search/resultNews';
			$this->load->view('layout/search/index',$data);
		}
		public function searchAlbum()
		{
			$q = $_GET['q'];
			$query = explode(' ',strtolower($q));
			$relatedIdAlbum = $this->searchRelate('album', $query);
			if (!empty($relatedIdAlbum)) {
				$data['resultAlbum'] = $this->M_tin_tuc_table->RelatedPostLike('album', $relatedIdAlbum);
				$data['sizeAlbum'] = $this->M_tin_tuc_table->RelatedPostLikeCount('album', $relatedIdAlbum);
				//var_dump($relatedIdAlbum);
				//var_dump($data['resultAlbum']);
			}
			$data['query'] = $q;
			$data['title'] = $q.' - Tìm kiếm';
			$data['path'] = 'search/resultAlbum';
			$this->load->view('layout/search/index',$data);
		}
		public function searchRelate($category, $query) 
		{
			$index = $this->getIndex($category);
			$matchDocs = array();
			$docCount = count($index['docCount']);
			foreach($query as $qterm) {
			        $entry = $index['dictionary'][$qterm];
			        foreach($entry['postings'] as $docID => $posting) {
			                $matchDocs[$docID] += $posting['tf'] * log($docCount+1 / $entry['df']+1, 2);
			        }
			}
			// length normalise
			$postId = array();
			$indexPost = 0;
			foreach($matchDocs as $docID => $score) {
			     $matchDocs[$docID] = ($score/$index['docCount'][$docID]);
			}
			arsort($matchDocs); // high to low
			$i= 0;
			$relatedId = array();
			foreach ($matchDocs as $id=>$item) {
				$relatedId[$i] = $id;
				if (++$i > 6) break;
			}
			return $relatedId;
		}
		public function getIndex($type) {
				
		        $collection = array();
		        if ($type == 'album') {
		        	$select = 'id,tieu_de,tom_tat';
					$dataCollection = $this->M_tin_tuc_table->getArray('album',$select);
		        	foreach ($dataCollection as $postId=>$post) {
		        	$collection[$post['id']] = strtolower($post['tieu_de']).' '.strtolower($post['tom_tat']);
		       		}
		        } else {
		        	$select = 'id,tieu_de,tom_tat,noi_dung';
		        	$dataCollection = $this->M_tin_tuc_table->getArray('tin_tuc',$select);
		        	foreach ($dataCollection as $postId=>$post) {
		        	$collection[$post['id']] = strtolower($post['tieu_de']).' '.strtolower($post['tom_tat']).' '.$post['noi_dung'];
		       	 	}
		        }
		        
		        $dictionary = array();
		        $docCount = array();

		        foreach($collection as $docID => $doc) {
		                $terms = explode(' ', $doc);
		                $docCount[$docID] = count($terms);

		                foreach($terms as $term) {
		                        if(!isset($dictionary[$term])) { // Khởi tạo nếu chưa có, và sự xuất hiện trong tài liệu 0 (chưa có trong tài liệu nào, df = 0)
		                                $dictionary[$term] = array('df' => 0, 'postings' => array());
		                        }
		                        if(!isset($dictionary[$term]['postings'][$docID])) {
		                                $dictionary[$term]['df']++; // Gán =1 bằng chính tài liệu đang xét
		                                $dictionary[$term]['postings'][$docID] = array('tf' => 0);
		                        }

		                        $dictionary[$term]['postings'][$docID]['tf']++;
		                }
		        }
		        
		        return array('docCount' => $docCount, 'dictionary' => $dictionary);
		}
	}


?>