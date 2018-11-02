<?php 
	session_start();
	class C_thu7 extends CI_Controller {

		private $userid;
        public $image;
        public $image_type;
        public $isImage;
		public function __construct() {
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_thu7');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('privated/M_privated');
			$this->load->library('session');
			
			$this->userid = $this->issetCookie();
		}
		public function deleteAjax()
		{
			if (isset($_POST['_id'])) {
				$id = $_POST['_id'];
				if ($this->M_thu7->deleteById($id, 'timeline')) {
					echo true;
				} else echo false;
			}
		}
		public function update() {
			if ($this->userid) {
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
					$id = $this->uri->segment(4);	
					if (isset($id)) {
						$data['data'] = $this->M_thu7->getResultId('timeline', $id);
						if (isset($_POST['addPlaces'])) {
							date_default_timezone_set("Asia/HoChiMinh");
							$isErr = false;
							$places = $_POST['places_title_hidden'];
							$url = $_POST['url'];
							$date = $_POST['date'];
							$keySearch = $_POST['keysearch'];
							$coverImg = $_FILES['cover-img-ip'];
							$avatarImg = $_FILES['avatar-img-ip'];
							$description = $_POST['ckeditor'];
							$size = 2000000;

							if (empty($places) === true) {$data['placesErr'] = true; $isErr = true;}
							if (empty($url) === true) {$data['urlErr'] = true; $isErr = true;}
							if (empty($date) === true) {$data['dateErr'] = true; $isErr = true;}
							if (empty($keySearch) === true) {$data['keySearchErr'] = true; $isErr = true;}
							if (empty($description) === true) {$data['descriptionErr'] = true; $isErr = true;}

							if ($isErr == false) {

								if ($coverImg['name'] != null) {

									if ($this->imageReview($coverImg, $size) === true) {
                                        /*COVER IMAGE*/
                                        $this->load($_FILES['cover-img-ip']['tmp_name']);
                                        $size = $this->calsNewSizeWidth(1350);
                                        $this->resizeToWidth($size['width']);
                                        $this->resizeToHeight($size['height']);
                                        $_FILES['cover-img-ip']['name'] = time().'-cover.'.end(explode(".", $_FILES['cover-img-ip']['name']));
                                        $dataUpdate['cover_img'] = $_FILES['cover-img-ip']['name'];
                                        $this->save('./public/privated/Timeline/CoverImage/'.$dataUpdate['cover_img'], $_FILES['cover-img-ip']['tmp_name']);
										unlink('./public/privated/Timeline/CoverImage/'.$data['data']['cover_img']);
									} else {$data['avatarImgErr'] = true;}
								} else $dataUpdate['cover_img'] = $data['data']['cover_img'];
								if ($avatarImg['name'] != null) {
								    //var_dump(getimagesize($avatarImg['name']));
									if ($this->imageReview($avatarImg, $size) === true) {
                                        /*AVATAR IMAGE*/
                                        $this->load($_FILES['avatar-img-ip']['tmp_name']);
                                        $size = $this->calsNewSizeWidth(420);
                                        $this->resizeToWidth($size['width']);
                                        $this->resizeToHeight($size['height']);
                                        $_FILES['avatar-img-ip']['name'] = time().'-avt.'.end(explode(".", $_FILES['avatar-img-ip']['name']));
                                        $dataUpdate['avatar_img'] = $_FILES['avatar-img-ip']['name'];
                                        $this->save('./public/privated/Timeline/AvatarImage/'.$dataUpdate['avatar_img'], $_FILES['avatar-img-ip']['tmp_name']);
										unlink('./public/privated/Timeline/AvatarImage/'.$data['data']['avatar_img']);
									} else {$data['avatarImgErr'] = true;}
								} else $dataUpdate['avatar_img'] = $data['data']['avatar_img'];
								$dataUpdate['places_title'] = $places;
								$dataUpdate['url'] = $url;
								$dataUpdate['date'] = $date;
								$dataUpdate['keysearch'] = $keySearch;
								$dataUpdate['description'] = $description;
								$dataUpdate['update'] = date("Y-m-d h-i-s");
								if ($this->M_thu7->update('timeline', $dataUpdate, $id)) {
									$data['success'] = true;
								}
							} // isErr
						}
						$data['title'] = 'Update Thu7 - Administrator - 123nam';
						$data['style'] = 'thu7/adminStyle.css';
						$data['script'] = 'layout/ajax/thu7Editor';
						$scriptArr = array();
						$scriptArr[] = 'layout/ajax/thu7Update';
						$data['scriptArr'] = $scriptArr;
						$data['path'] = 'quan_tri/thu7/update';
						$this->load->view('layout/quan_tri/layoutAdmin', $data);
					}
				} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}
			} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}
		}
		public function recordList() {

			if ($this->userid) {
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
                    $this->load->library('pagination');
                    $config['base_url'] = base_url().'quan-tri/thu7/record-list';
                    $config['total_rows'] = $data['total_rows'] = $this->M_thu7->count_all('timeline');
                    $config['per_page'] = $data['per_page'] = 50;
                    $config['uri_segment'] = 4;
                    $config['use_page_numbers'] = TRUE;
                    $config['full_tag_open'] = '<nav><ul class="pagination">';
                    $config['full_tag_close'] = '</ul></nav>';
                    $config['first_link'] = '|<';
                    $config['first_tag_open'] = '<li>';
                    $config['first_tag_close'] = '</li>';
                    $config['first_url'] = '';
                    $config['last_link'] = '>|';
                    $config['last_tag_open'] = '<li>';
                    $config['last_tag_close'] = '</li>';
                    $config['next_link'] = '&gt;';
                    $config['next_tag_open'] = '<li>';
                    $config['next_tag_close'] = '</li>';
                    $config['prev_link'] = '&lt;';
                    $config['prev_tag_open'] = '<li>';
                    $config['prev_tag_close'] = '</li>';
                    $config['cur_tag_open'] = '<li class="active"><a href="#">';
                    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
                    //<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    $config['num_tag_open'] = '<li>';
                    $config['num_tag_close'] = '</li>';
                    $this->pagination->initialize($config);
                    $trang=$this->uri->segment(4)?$this->uri->segment(4):1;
                    $start=($trang-1)*$config['per_page'];
                    $data['link_page']=$this->pagination->create_links();
                    $data['pagination']=$this->M_thu7->pagination('timeline',$config['per_page'], $start);
                    $data['title'] = 'Record Thu7 - Administrator - 123nam';
                    $data['style'] = 'thu7/adminStyle.css';
                    $data['script'] = 'layout/ajax/thu7Editor';
                    $data['path'] = 'quan_tri/thu7/record';
                    $this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}

			} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}
		}
		public function thu7Editor() {
			if ($this->userid) {
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
					if (isset($_POST['addPlaces'])) {
						$isErr = false;
						$places = $_POST['placesHidden'];
						$url = $_POST['url'];
						$date = $_POST['date'];
						$keySearch = $_POST['keysearch'];
						$coverImg = $_FILES['cover-img-ip'];
						$avatarImg = $_FILES['avatar-img-ip'];
						$description = $_POST['ckeditor'];
						$size = 2000000;
						if (empty($places) === true) {$data['placesErr'] = true; $isErr = true;}
						if (empty($url) === true) {$data['urlErr'] = true; $isErr = true;}
						if (empty($date) === true) {$data['dateErr'] = true; $isErr = true;}
						if (empty($keySearch) === true) {$data['keySearchErr'] = true; $isErr = true;}
						if ($coverImg['name'] == '' || $this->imageReview($coverImg, $size) === false) {$data['coverImgErr'] = true; $isErr = true;}
						if ($avatarImg['name'] == '' || $this->imageReview($avatarImg, $size) === false) {$data['avatarImgErr'] = true; $isErr = true;}
						if (empty($description) === true) {$data['descriptionErr'] = true; $isErr = true;}
						if ($isErr == false) {
							date_default_timezone_set("Asia/HoChiMinh");
							$coverImg['name'] = time().'-cover.'.explode('.',$coverImg['name'])[1];
							$avatarImg['name'] = time().'-ava.'.explode('.',$avatarImg['name'])[1];
							$dataInsert['places_title'] = $places;
							$dataInsert['url'] = $url;
							$dataInsert['date'] = $date;
							$dataInsert['keysearch'] = $keySearch;
							$dataInsert['cover_img'] = $coverImg['name'];
							$dataInsert['avatar_img'] = $avatarImg['name'];
							$dataInsert['description'] = $description;
							$dataInsert['create'] = date("Y-m-d h-i-s");
							$dataInsert['user'] = $this->userid;
							/*COVER IMAGE*/
                            $this->load($_FILES['cover-img-ip']['tmp_name']);
                            $size = $this->calsNewSizeWidth(1350);
                            $this->resizeToWidth($size['width']);
                            $this->resizeToHeight($size['height']);
                            $_FILES['cover-img-ip']['name'] = time().'-cover.'.end(explode(".", $_FILES['cover-img-ip']['name']));
                            $dataInsert['cover_img'] = $_FILES['cover-img-ip']['name'];
                            $this->save('./public/privated/Timeline/CoverImage/'.$dataInsert['cover_img'], $_FILES['cover-img-ip']['tmp_name']);
                            /*AVATAR IMAGE*/
                            $this->load($_FILES['avatar-img-ip']['tmp_name']);
                            $size = $this->calsNewSizeWidth(420);
                            $this->resizeToWidth($size['width']);
                            $this->resizeToHeight($size['height']);
                            $_FILES['avatar-img-ip']['name'] = time().'-avt.'.end(explode(".", $_FILES['avatar-img-ip']['name']));
                            $dataInsert['avatar_img'] = $_FILES['avatar-img-ip']['name'];
                            $this->save('./public/privated/Timeline/AvatarImage/'.$dataInsert['avatar_img'], $_FILES['avatar-img-ip']['tmp_name']);
							if ($this->M_privated->insert('timeline', $dataInsert)) {
                                $data['success'] = true;
							}
						}
					} /*BTN*/
					$data['title'] = 'Thu7 Department - Administrator - 123nam';
					$data['style'] = 'thu7/adminStyle.css';
					$data['script'] = 'layout/ajax/thu7Editor';
					$data['path'] = 'quan_tri/thu7/editor';
					$this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}
			} else {$data['title'] = 'Errors'; $this->load->view('errors/index',$data);}
		}/*--------------*/
		public function imageReview($file, $size) {
			$imgType = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
			if (in_array($file['type'], $imgType)) {
			    return true;
			} else return false;
		}
		public function issetCookie()
		{
			$user = null;
			if (isset($_COOKIE['verifyAuthID']) && !$this->session->userdata('id')) {
				$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
				$user = $userArr['id'];
			} else 
				$user = $this->session->userdata('id');
			return $user;
		}

		/**@IMAGE HANDLE*/
        /**
         * @calsNewSizeWidth
         *
         * */
        public function calsNewSizeWidth($widthSet)
        {
            $width = imagesx($this->image);
            $height = imagesy($this->image);
            $ratios = $width/$height;
            $newSize = array();
            if ($width < $widthSet)
            {
                return false;
            } else {
                $height = ceil($widthSet/$ratios);
                $newSize['width'] = $widthSet;
                $newSize['height'] = $height;
                return $newSize;
            }
        }
        /**
         *@isImag
         * check file upload is image format
         */
        public function isImage($file, $size, $sizeAllow)
        {
            $fileTypeAllow = array('image/jpeg', 'image/png', 'image/jpg', 'image/gif');
            $image_info = getimagesize($file);
            if (in_array($image_info['mime'], $fileTypeAllow) == true && $size <= $sizeAllow)
            {
                return true;
            } else return false;
        }
        /**
         * @@load
         */
        public function load($filename)
        {
            $image_info = getimagesize($filename);
            $this->image_type = $image_info['mime'];
            if ($this->image_type == 'image/jpeg')
            {
                $this->image = imagecreatefromjpeg($filename);
            } elseif ($this->image_type == 'image/png'){
                $this->image = imagecreatefrompng($filename);
            } elseif ($this->image_type == 'image/gif') {
                $this->image = imagecreatefromgif($filename);
            }
        }
        /**
        @getWidth
         */
        public function getWidth()
        {
            return imagesx($this->image);
        }
        /**
        @getHeight
         */
        public function getHeight()
        {
            return imagesy($this->image);
        }
        /**
         * @resize
         */
        public function resize($width, $height)
        {
            $newimage = imagecreatetruecolor($width,$height);
            imagecopyresampled($newimage, $this->image, 0, 0,0,0, $width, $height, $this->getWidth(), $this->getHeight());
            $this->image = $newimage;
        }
        /**
         * @resizeToWidth
         */
        public function resizeToWidth($width)
        {
            $ratio = $width/$this->getWidth();
            $height = $this->getHeight()*$ratio;
            $this->resize($width,$height);
        }
        /**
         * @resizeToHeight
         */
        public function resizeToHeight($height)
        {
            $ratio = $height/$this->getHeight();
            $width = $this->getWidth()*$ratio;
            $this->resize($width, $height);
        }
        /**
         * @save
         */
        public function save($path, $filename, $compression=75, $permission=null)
        {
            $image_info = getimagesize($filename);
            $this->image_type = $image_info['mime'];
            if ($this->image_type == 'image/jpeg')
            {
                imagejpeg($this->image, $path, $compression);
            } elseif ($this->image_type == 'image/png'){
                imagepng($this->image, $path, $compression);
            } elseif ($this->image_type == 'image/gif') {
                imagegif($this->image, $path);
            }
            if ($permission != null)
            {
                chmod($filename, $permission);
            }
        }
	}

?>