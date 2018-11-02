<?php 
	class C_emegazine extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
			$this->load->library('session');
			if (isset($_COOKIE['verifyAuthID']))
			{
				$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
				$this->userid = $userArr['id'];
			}
			if ($this->session->userdata('id') && !isset($_COOKIE['verifyAuthID']))
			{
				$this->userid = $this->session->userdata('id');
			}
		}
		public function editor()
		{
			if (isset($_POST['submit'])) {
				$actived = 1;
				$imgType = array('image/png','image/jpg','image/jpeg','image/gif');
				// Title
				if (empty($_POST['titleEmega'])) {
					$data['errForm'] =  'Tieu de khong de trong';
					$actived = 0;
				}
				// Uri
				if (empty($_POST['uri'])) {
					$data['errForm'] = 'Uri khong de trong';
					$actived = 0;
				}
				// Title image
				if (empty($_FILES['image']['name'])) {
					$data['errForm'] = 'Hinh tieu de khong de trong';
					$actived = 0;
				}
				// Title image type
				if (!in_array($_FILES['image']['type'], $imgType)) {
					$data['errForm'] = 'Vui long chon 1 file hinh';
					$actived = 0;
				}
				// Max index
				foreach ($_POST['maxblock'] as $key=>$val) {
					
					if (!empty($_POST['maxblock'][$key]))
						$maxindex = $_POST['maxblock'][$key];
				}
				// File type
				for ($i = 1; $i<=$maxindex; $i ++) {
					if ($_FILES['img'.$i]) {
						if ($_FILES['img'.$i]['name'] != '') {
							if (!in_array($_FILES['img'.$i]['type'], $imgType)) {
								$data['errForm'] = 'Vui lòng chọn một file hình ở Block: '.$i;
								$actived = 0;
								break;
							} 
						} else { 
							$data['errForm'] = 'Hình tiêu đề trống ở Block: '.$i;
							$actived = 0;
							break;
						}
					}
				}
				// Content
				for ($i = 1; $i<= $maxindex; $i ++) {
					if (empty($_POST['editor'.$i])) {
						$data['errBlock'] = 'Không để trống nội dung ở Block: '.$i;
						$actived = 0;
						break;
					}
				}		
				// Success
				if ($actived == 1) {
					$idrandom = mt_rand();
					$data['idrandom'] = $idrandom;
					$data['tieu_de'] = $_POST['titleEmega'];
					$data['typenews'] = 'emegazine';
					$data['url'] = $_POST['uri'];
					$_FILES['image']['name'] = time().'.'.explode('.', $_FILES['image']['name'])[1];
					$data['hinh'] = $_FILES['image']['name'];
					$data['loai_tin'] = 'emegazine';
					$data['user'] = $this->userid;
					$data['created'] = date("l j\/m\/Y\, h:i:s a");
					if (!empty($_POST['description']))
						$data['description'] = $_POST['description'];
					if (!empty($_POST['keywords']))
						$data['keyword'] = $_POST['keywords'];
					move_uploaded_file($_FILES['image']['tmp_name'],'./public/EmegazineImage/title/'.$data['hinh']);
					try {
						$this->M_tin_tuc_table->insert($data,'tin_tuc');
					} catch (Exception $e) {
						$data['errDb'] = 'Có lỗi trong quá trình thêm vào database (form): '.$e->getMessage();
					}
				}
					$queryid = $this->M_tin_tuc_table->getID('tin_tuc',$idrandom);
					for ($i = 1; $i<=$maxindex; $i ++) {
						if ($_FILES['img'.$i]['name'] != '' && !empty($_POST['editor'.$i])) {
							$dataBlock['idkey'] = $i;
							$dataBlock['postid'] = $queryid['id'];
							$dataBlock['content'] = $_POST['editor'.$i];
							$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];
							$dataBlock['img'] = $_FILES['img'.$i]['name'];
							move_uploaded_file($_FILES['img'.$i]['tmp_name'],'./public/EmegazineImage/block/'.$dataBlock['img']);
							try {
								$this->M_tin_tuc_table->insert($dataBlock,'blockemegazine');
							} catch (Exception $e) {
								$data['errDb'] = 'Có lỗi trong quá trình thêm vào database ở Block '.$i.': '.$e->getMessage();
							}
						}
					}
			} // /Submit

			$data['title'] = 'Emegazine editor';
			$data['path'] = 'quan_tri/emegazine/editor';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);
		} /* -------/Editor-------*/

		public function chi_tiet_tin_cho_phe_duyet_Emegazine()
		{
			if ($this->userid) {
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
					$id = $this->uri->segment(5);
					if (!empty($id)) {
						if ($this->M_tin_tuc_table->checkIssetPostTableAndID('tin_tuc',$id) != false) {
							$data['EmegaArr'] = $this->M_tin_tuc_table->PhotoPostDetail('emegazine','tin_tuc',$id);
							$data['user'] = $this->M_nguoi_dung->getUserFromSession($data['EmegaArr']['user']);
							$data['blockArr'] = $this->M_emegazine->getBlock($id);
							$data['title'] = $data['EmegaArr']['tieu_de'].' - Emegazine Queue';
							$data['path'] = 'quan_tri/emegazine/queue';
							$this->load->view('layout/quan_tri/layoutAdmin', $data);
						} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
						 // if Check Post
					}
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					 // if Check ID
					}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} // if Check Admin
			} /*---------isset USerid----*/
		}
		public function update()
		{
			if ($this->userid) {
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
					$id = $this->uri->segment(5);
					if (!empty($id)) {
						if ($this->M_tin_tuc_table->checkIssetId($id,'tin_tuc') == 1) {
								$data['EmegaArr'] = $this->M_tin_tuc_table->PhotoPostDetail('emegazine','tin_tuc',$id);
								$data['blockArr'] = $this->M_emegazine->getBlock($id);
								if (isset($_POST['updatebtn']) && $_POST['updatebtn'] != '') {
								
								$imgType = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');
								$actived = 1;

								// Title
								if (empty($_POST['titleEmega'])) {
									$actived = 0;
									$data['errTitle'] = 'Tiêu đề trống';
								}
								// Uri
								if (empty($_POST['uri'])) {
									$actived = 0;
									$data['errUri'] = 'URI trống';
								}
								// File
								if (!empty($_FILES['image']['name'])) {
									// Title image type
									if (!in_array($_FILES['image']['type'], $imgType)) {
										$actived = 0;
										$data['errFileType'] = 'Chọn một file có định dạng là hình ảnh: .jpg, .jpeg, .png hoặc .gif';
									}		
								}

								// Max index
								foreach ($_POST['maxblock'] as $key=>$val) {
									
									if (!empty($_POST['maxblock'][$key]))
										$maxindex = $_POST['maxblock'][$key];
								}
								// file block
								for ($i = 1; $i<=$maxindex; $i ++) {
									// Get version.i
									// if version is new
									// if check is not null image
									// if version is old
									// allow null, if new image-->check new image
									if (isset($_POST['version'.$i])) {
										
										if ($_POST['version'.$i] == 'new') {
											if (empty($_FILES['img'.$i]['name'])) // kiem tra file block null?
											{
												$actived = 0;
												$data['errFileBlock'] = 'Chọn 1 file hình ở Block'.$i;
												break;
											} else { // nếu có hình --> kiểm tra định dạng
												// Kiem tra dinh dang file
												if (!in_array($_FILES['img'.$i]['type'], $imgType)) {
													$actived = 0;
													$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													break;
												}
											}
										} else { // version old
											if (!empty($_FILES['img'.$i]['name'])) {
												if (!in_array($_FILES['img'.$i]['type'], $imgType)) {
													$actived = 0;
													$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													break;
												}
											}
										}
									}
										
								}
								// Content
								for ($i = 1; $i<= $maxindex; $i ++) {
									if (empty($_POST['editor'.$i])) {
										$data['errContent'] = 'Không để trống nội dung ở Block'.$i;
										$actived = 0;
										break;
									}
								}
								if ($actived == 1) {
								// Img title
									echo 'actived =1';
								if (!empty($_FILES['image']['name'])) {
									$_FILES['image']['name'] = time().'.'.explode('.', $_FILES['image']['name'])[1];
									$dataUpdate['hinh'] = $_FILES['image']['name'];
									move_uploaded_file($_FILES['image']['tmp_name'],'./public/EmegazineImage/title/'.$dataUpdate['hinh']);
									unlink('./public/EmegazineImage/title/'.$data['EmegaArr']['hinh']);
								}
								$dataUpdate['tieu_de'] = $_POST['titleEmega'];
								$dataUpdate['typenews'] = 'emegazine';
								$dataUpdate['url'] = $_POST['uri'];
								$dataUpdate['loai_tin'] = 'emegazine';
								$dataUpdate['description'] = $_POST['description'];
								$dataUpdate['keyword'] = $_POST['keywords'];
								$dataUpdate['user'] = $this->userid;
								$dataUpdate['updated'] = date("l j\/m\/Y\, h:i:s a");
								var_dump($dataUpdate);
								try {
									$this->M_tin_tuc_table->update('tin_tuc',$id,$dataUpdate);
								} catch (Exception $e) {
									$data['ErrDb'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$e->getMessage();
								}
								// end Titile


								// BLOCK
								for ($i = 1; $i<= $maxindex; $i ++) {
									if (isset($_FILES['img'.$i])) {
										if ($_POST['version'.$i] == 'old') {
											// neu la block old va co hinh moi
											if ($_FILES['img'.$i]['name'] != '') {
												$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];
												$dataUpdateBlockImg['img'] = $_FILES['img'.$i]['name'];
												move_uploaded_file($_FILES['img'.$i]['tmp_name'], './public/EmegazineImage/block/'.$dataUpdateBlockImg['img']);
												$dataUpdateBlockImg['content'] = $_POST['editor'.$i];
												if ($this->M_emegazine->checkIssetBlockAsIndex($i,$id) != false) {
													// neu la block new & isset
													// Update
													try {
														$this->M_emegazine->updateBlock($i,$dataUpdateBlockImg,'blockemegazine');
													} catch (Exception $e) {
														$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
													}
												}
											} else {
												$dataUpdateBlock['idkey'] = $i;
												$dataUpdateBlock['content'] = $_POST['editor'.$i];
												try {
														$this->M_emegazine->updateBlock($i,$dataUpdateBlock,'blockemegazine');
													} catch (Exception $e) {
														$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
													}
											} 	
											
										} else {
											// neu la block new
											$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];
											$dataUpdateBlock['idkey'] = $i;
											$dataUpdateBlock['img'] = $_FILES['img'.$i]['name'];
											move_uploaded_file($_FILES['img'.$i]['tmp_name'], './public/EmegazineImage/block/'.$dataUpdateBlock['img']);
											$dataUpdateBlock['content'] = $_POST['editor'.$i];
											if ($this->M_emegazine->checkIssetBlockAsIndex($i,$id) != false) {
												// neu la block new & isset
												// Update
												try {
													$this->M_emegazine->updateBlock($i,$id,$dataUpdateBlock,'blockemegazine');
												} catch (Exception $e) {
													$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
												}
											} else {
												// neu la block new & !isset
												// insert
												$dataUpdateBlock['postid'] = $id;
												try {
													$this->M_emegazine->insertBlock($dataUpdateBlock,'blockemegazine');
												} catch (Exception $e) {
													$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu ở Block '.$i.': '.$e->getMessage();
												}
											}
										}
										
									}
									}
									// end BLOCK
									$data['finished'] = 'Chỉnh sửa hoàn thành';
								} // end actived	

							} // end Submit
							
							$data['title'] = $data['EmegaArr']['tieu_de'].' - Emegazine update';
							$data['path'] = 'quan_tri/emegazine/update';
							$this->load->view('layout/quan_tri/layoutAdmin', $data);

						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						} // if check Isset postID
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} // if check Isset ID
					
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} // if Check Admin
			} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
			} // if Check User
		}

		public function deleteIndexAjax()
		{
			$index = $_POST['i'];
			$id = $_POST['id'];
			if ($id && $index) {
				try {
					$this->M_emegazine->deleteIndex($index,$id,'blockemegazine');
					echo 'Đã xóa block '.$index;
				} catch (Exception $e) {
					echo 'Có lỗi: '.$e->getMessage();
				}
			} else return false;
		}
		public function deleteEmegaAjax()
		{
			if (isset($_POST['dataid'])) 
				$postId = $_POST['dataid'];
			if ($postId) {
				if ($this->M_tin_tuc_table->checkIssetPostID($postId,'tin_tuc') != false) {
					if ($this->M_tin_tuc_table->deletePostPublishing($postId, 'tin_tuc')) {
						if ($this->M_emegazine->deleteBlock($postId,'blockemegazine')) {
							echo '1';
						} else echo '0';
					} else echo '0';
				} else echo '0';
			} else echo '0';
		}
	}
?>