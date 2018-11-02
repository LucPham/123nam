<?php 
	session_start();
  	ini_set('display_errors', 0);
	class C_emegazine extends CI_Controller {
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
			$this->load->library('session');
			
			$this->userid = $this->issetCookie();
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

		public function update()
		{
			$id = $this->uri->segment(3);
			$data['EmegaArr'] = $this->M_tin_tuc_table->PhotoPostDetail('emegazine','tin_tuc',$id);
			$data['blockArr'] = $this->M_emegazine->getBlock($id);

			if ($data['EmegaArr']['privated'] == 1) {
				$data['usertags'] = $this->M_tin_tuc_table->getUsertags('usertags',$id);
			}

			if (isset($_POST['submit'])) {
				$maxindex = $_POST['maxindex'];
				

				$actived = 1;
				$imgType = array('image/png','image/jpg','image/jpeg','image/gif');
				// Title
				if (empty($_POST['titleEmega'])) {
					$data['errForm'] =  'Tieu de khong de trong';
					echo 'Tieu de khong de trong';

					$actived = 0;
				}
				// Uri
				if (empty($_POST['uri'])) {
					$data['errForm'] = 'Uri khong de trong';
					echo 'Uri khong de trong';
					$actived = 0;
				}

				// Title image type
				// File
				if (!empty($_FILES['image']['name'])) {
					// Title image type
					if (!in_array($_FILES['image']['type'], $imgType)) {
						$actived = 0;
						$data['errFileType'] = 'Chọn một file có định dạng là hình ảnh: .jpg, .jpeg, .png hoặc .gif';
						echo 'Chọn một file có định dạng là hình ảnh: .jpg, .jpeg, .png hoặc .gif';
					}		
				}
				
				// Content
				for ($i = 1; $i<= $maxindex; $i ++) {
					if (isset($_POST['editor'.$i]) && empty($_POST['editor'.$i])) {
						$data['errBlock'] = 'Không để trống nội dung ở Block: '.$i;
						echo 'Không để trống nội dung ở Block: '.$i;
						$actived = 0;
						break;
					}
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
								echo 'Chọn 1 file hình ở Block'.$i;
								break;
							} else { // nếu có hình --> kiểm tra định dạng
								// Kiem tra dinh dang file
								$filetype = end(explode(".", $_FILES['img'.$i]['name']));
								if (!in_array('image/'.$filetype, $imgType)) {
									$actived = 0;
									$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
									echo 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
									break;
								}
							}
						} else { // version old
							if (!empty($_FILES['img'.$i]['name'])) {
								$filetype = end(explode(".", $_FILES['img'.$i]['name']));
								if (!in_array('image/'.$filetype, $imgType)) {
									$actived = 0;
									$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
									echo 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
									break;
								}
							}
						}
					}
						
				}
				// delete all usertags: public = 1
				if ($data['EmegaArr']['privated'] == 1) {
					if ($_POST['mode'] == 'public') {
						$dataUpdate['privated'] = 0;
						$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
					}
				}

				//isset mode privated
				if ($_POST['mode'] == 'privated') {
					//delete usertags old
					$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
					$dataTags['postid'] = $id;
					$usertags = explode(',', $_POST['usertaged']);
					$dataTags['table_name'] = 'tin_tuc';
					foreach ($usertags as $key=>$val) {
						if ($val != '') {
							$dataTags['userid'] = $val;
							$this->M_tin_tuc_table->insert($dataTags,'usertags');
						}
					}
				} // end isset mode privated

				if ($actived == 1) 

				/*-----------------------UPDATE----------------------*/
				if ($actived == 1) {
					//echo $actived;
				// Img title
				$done = 1;
				if (!empty($_FILES['image']['name'])) {
					$_FILES['image']['name'] = time().'.'.explode('.', $_FILES['image']['name'])[1];
					$dataUpdate['hinh'] = $_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'],'./public/EmegazineImage/title/'.$dataUpdate['hinh']);
					unlink('./public/EmegazineImage/title/'.$data['EmegaArr']['hinh']);
				}
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$dataUpdate['tieu_de'] = $_POST['titleEmega'];
				if ($_POST['mode'] == 'privated') 
					$dataUpdate['privated'] = 1;
				else 
				$dataUpdate['privated'] = 0;
				$dataUpdate['typenews'] = 'emegazine';
				$dataUpdate['url'] = $_POST['uri'];
				$dataUpdate['loai_tin'] = 'emegazine';
				$dataUpdate['description'] = $_POST['description'];
				$dataUpdate['keyword'] = $_POST['keywords'];
				$dataUpdate['user'] = $this->userid;
				$dataUpdate['updated'] = date("l j\/m\/Y\, h:i:s a");
				try {
					$this->M_tin_tuc_table->update('tin_tuc',$id,$dataUpdate);
				} catch (Exception $e) {
					$data['ErrDb'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$e->getMessage();
					$done = 0;
				}
				// end Titile


				// BLOCK
				for ($i = 1; $i<= $maxindex; $i ++) {
					//echo $i;
					if (isset($_POST['editor'.$i])) {

						if (isset($_POST['version'.$i]) && $_POST['version'.$i] == 'old') {

							// neu la block old va co hinh moi
							if ($_FILES['img'.$i]['name'] != '') {
								$idblock = $_POST['idblock'.$i];
								echo 'Block '.$i.' old va co hinh moi va k ton tai, idbloc '.$idblock.'<br/>';

								
								$dataUpdateBlockImg['idkey'] = $_POST['index'.$i];
								$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];
								$dataUpdateBlockImg['img'] = $_FILES['img'.$i]['name'];
								move_uploaded_file($_FILES['img'.$i]['tmp_name'], './public/EmegazineImage/block/'.$dataUpdateBlockImg['img']);
								$dataUpdateBlockImg['content'] = $_POST['editor'.$i];
								
								if ($this->M_emegazine->checkIssetBlockAsIndex($idblock) != false) {
									echo 'Block '.$i.' old va co hinh moi va ton tai<br/>';
									// neu la block new & isset
									// Update
									try {
										$this->M_emegazine->updateBlock($idblock,$dataUpdateBlockImg,'blockemegazine', $id);
									} catch (Exception $e) {
										$data['errDbBlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
										$done = 0;
										break;
									}
								} 
							} else {
								$idblock = $_POST['idblock'.$i];
								echo 'Block '.$i.' old va khong co hinh moi<br/>';
								echo 'index = '.$_POST['index'.$i].'<br/>';
								$dataUpdateBlock['idkey'] = $_POST['index'.$i];
								$dataUpdateBlock['content'] = $_POST['editor'.$i];
								try {
										$this->M_emegazine->updateBlock($idblock,$dataUpdateBlock,'blockemegazine', $id);
									} catch (Exception $e) {
										$data['errDbBlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
										$done = 0;
										break;
									}
							} 
							
						} else {

							if (isset($_POST['editor'.$i])) {
								// neu la block new
								$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];
								$dataUpdateBlock['idkey'] = $_POST['index'.$i];
								$dataUpdateBlock['img'] = $_FILES['img'.$i]['name'];
								move_uploaded_file($_FILES['img'.$i]['tmp_name'], './public/EmegazineImage/block/'.$dataUpdateBlock['img']);
								$dataUpdateBlock['content'] = $_POST['editor'.$i];
								if ($this->M_emegazine->checkIssetBlockidKey($i,$id) != false) {
									echo 'new-ton tai';
									// neu la block new & isset
									// Update
									try {
										$this->M_emegazine->updateBlock($i,$dataUpdateBlock,'blockemegazine', $id);
									} catch (Exception $e) {
										$data['errDbBlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
										$done = 0;
										break;
									}
								} else {
									// neu la block new & !isset
									// insert
									echo 'new-khong ton tai';
									$dataUpdateBlock['postid'] = $id;
									try {
										$this->M_emegazine->insertBlock($dataUpdateBlock,'blockemegazine');
									} catch (Exception $e) {
										$data['errDbBlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu ở Block '.$i.': '.$e->getMessage();
										$done = 0;
										break;
									}
								}

							} // end if isset
						
						}
						}
					}
					// end BLOCK
					if ($done == 1)
						$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Bài viết đã được update thành công';
				} // end actived



				/*----------------------END UPDATE-------------------*/



				// Success


			} // end submit

			$data['title'] = 'update';
			$data['path'] = 'quan_tri/emegazine/update';
			$data['script'] = 'layout/ajax/searchUserUpdate';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);
		}
		public function loadUsertag()
		{
			if (isset($_POST['id'])) {
				$userid = $_POST['id'];
				if (!empty($userid)) {
					if (is_nan($userid) != 1) {
						$user = $this->M_nguoi_dung->getUserFromSession($userid);
						if (!empty($user)) {
							?>
								<div id="wrapp_user_tag<?php echo $userid; ?>" class="wrapp_user_tag">
									<div id="username"><?php echo $user['lastName'].' '.$user['firstName'] ?></div>
									<div id="delete" class="delete" uid="<?php echo $userid; ?>"><a href="#">x</a></div>
								</div>
							<?php 
						}
					}
				}
			}
		}
		public function ajaxSearch ()
		{
			if (isset($_POST['q'])) {
				$query = $_POST['q'];
				if (!empty($query)) {
					$results = $this->M_emegazine->userSearchAjax($query);
					if (!empty($results)) {
						?>
						
						<?php
						foreach ($results as $key=>$result) {
							$key +=1;
							?>
								
								<a href="#" class="resultLink" uqr="<?php echo $result['id']; ?>">
								<div class="row">
									<div class="col-md-1 col-sm-1 col-xs-1"><?php echo $key.'.'; ?></div>
									
									<div class="col-md-6 col-sm-6 col-xs-6"><?php echo $result['lastName'].' '.$result['firstName'] ?></div>
									<div class="col-md-3 col-sm-3 col-xs-3">id = <?php echo $result['id']; ?></div>
								</div>
								<div class="row" id="emailResult">
									<?php echo $result['email'] ?>
								</div>
								</a>
								
							
							<?php 
						}
						?>
						
						<?php 
					} else echo 'Not found';
				} // query
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
				
					$maxindex = $_POST['maxindex'];
				
				// File type
				for ($i = 1; $i<=$maxindex; $i ++) {
					if (isset($_FILES['img'.$i])) {
						if ($_FILES['img'.$i]['name'] != '') {
							$filetype = end(explode(".", $_FILES['img'.$i]['name']));
							if (!in_array('image/'.$filetype, $imgType)) {
								$data['errForm'] = 'Vui lòng chọn một file hình ở Block: '.$i;
								echo 'Vui lòng chọn một file hình ở Block: '.$i.'-'.$filetype;
								$actived = 0;
								break;
							} 
						} else { 
							$data['errForm'] = 'Hình tiêu đề trống ở Block: '.$i;
							echo 'Hình tiêu đề trống ở Block: '.$i;
							$actived = 0;
							break;
						}
					}
				}
				// Content
				for ($i = 1; $i<= $maxindex; $i ++) {
					if (isset($_POST['editor'.$i]) && empty($_POST['editor'.$i])) {
						$data['errBlock'] = 'Không để trống nội dung ở Block: '.$i;
						echo 'Không để trống nội dung ở Block: '.$i;
						$actived = 0;
						break;
					}
				}		
				// Success
				if ($actived == 1) {
					$done = 1;
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
					if ($_POST['mode'] == 'public') 
						$data['privated'] = 0;
					else 
						$data['privated'] = 1;
					



					if (!empty($_POST['description']))
						$data['description'] = $_POST['description'];
					if (!empty($_POST['keywords']))
						$data['keyword'] = $_POST['keywords'];
					move_uploaded_file($_FILES['image']['tmp_name'],'./public/EmegazineImage/title/'.$data['hinh']);
					try {
						$this->M_tin_tuc_table->insert($data,'tin_tuc');
					} catch (Exception $e) {
						$data['errDb'] = 'Có lỗi trong quá trình thêm vào database (form): '.$e->getMessage();
						$done = 0;
					}
					$queryid = $this->M_tin_tuc_table->getID('tin_tuc',$idrandom);

					// usertags
					if ($_POST['mode'] == 'privated') {
						$userArr = $_POST['userArr'];
						$userArr = explode(',', $userArr);
						if (!empty($userArr)) {
							$dataTag['postid'] = $queryid['id'];
							$dataTag['table_name'] = 'tin_tuc';
							foreach ($userArr as $key=>$val) {
								$dataTag['userid'] = $val;
								try {
									$this->M_emegazine->insertBlock($dataTag,'usertags');
								} catch (Exception $e) {
									$data['errDb'] = 'Có lỗi trong quá trình thêm vào database (usertags): '.$e->getMessage();
									$done = 0;
								}
							} // foreach
						}
					} 



					//block

					for ($i = 1; $i<=$maxindex; $i ++) {
						if (isset($_POST['editor'.$i]) && isset($_FILES['img'.$i]['name'])) {
							$dataBlock['idkey'] = $i;
							$dataBlock['postid'] = $queryid['id'];
							$dataBlock['content'] = $_POST['editor'.$i];
							echo "Filename = ".$_FILES['img'.$i]['name']."<br/>";

							echo 'Filetype = '.explode('.',$_FILES['img'.$i]['name'])[1]."<br/>";



							$_FILES['img'.$i]['name'] = time().$i.'.'.explode('.',$_FILES['img'.$i]['name'])[1];

							echo 'File sau khi doi ten: '.$_FILES['img'.$i]['name'];

							$dataBlock['img'] = $_FILES['img'.$i]['name'];
							move_uploaded_file($_FILES['img'.$i]['tmp_name'],'./public/EmegazineImage/block/'.$dataBlock['img']);

							echo 'move_file = (public/EmegazineImage/block/'.$dataBlock['img'].')<br/>';
							try {
								$this->M_tin_tuc_table->insert($dataBlock,'blockemegazine');
							} catch (Exception $e) {
								$data['errDb'] = 'Có lỗi trong quá trình thêm vào database ở Block '.$i.': '.$e->getMessage();
								$done = 0;
							}
						}
					}

					if ($done == 1) 
						$data['success'] = '<span class="glyphicon glyphicon-ok"></span> Bài viết đã được xuất bản thành công và được chuyển qua danh sách chờ phê duyệt'; 

				} // active
					

					
					
			} // /Submit

			$data['title'] = 'Emegazine editor';
			$data['path'] = 'quan_tri/emegazine/editor';
			$data['script'] = 'layout/ajax/searchUser';
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
		public function deleteIndexAjax()
		{
			$index = $_POST['i'];
			$id = $_POST['id'];
			$block = $_POST['block'];
			if ($id && $index) {
				try {
					$this->M_emegazine->deleteIndex($index,$id,'blockemegazine');
					echo 'Đã xóa block '.$block;
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
		public function changePost()
		{
					$id = $this->uri->segment(3);
					
						if ($this->M_tin_tuc_table->checkIssetId($id,'tin_tuc') == 1) {
								$data['EmegaArr'] = $this->M_tin_tuc_table->PhotoPostDetail('emegazine','tin_tuc',$id);
								$data['blockArr'] = $this->M_emegazine->getBlock($id);

								if ($data['EmegaArr']['privated'] == 1) {
									$data['usertags'] = $this->M_tin_tuc_table->getUsertags('usertags',$id);
								}
								

								if (isset($_POST['sss'])) {

									// Max index
									
									$maxindex = $_POST['maxindex'];
								
									// Content
									for ($i = 1; $i<= $maxindex; $i ++) {
										if (empty($_POST['editor'.$i])) {
											$data['errBlock'] = 'Không để trống nội dung ở Block: '.$i;
											$actived = 0;
											break;
										}
									}		
									
									
									

									// delete all usertags: public = 1
									if ($data['EmegaArr']['privated'] == 1) {
										if ($_POST['mode'] == 'public') {
											$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
										}
									}

									//isset mode privated
									if ($_POST['mode'] == 'privated') {
										//delete usertags old
										$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
										$dataTags['postid'] = $id;
										$usertags = explode(',', $_POST['usertaged']);
										foreach ($usertags as $key=>$val) {
											if ($val != '') {
												$dataTags['userid'] = $val;
												$this->M_tin_tuc_table->insert($dataTags,'usertags');
											}
										}
									} // end isset mode privated

								
								$imgType = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');
								$actived = 1;

								// Title
								if (empty($_POST['titleEmega'])) {
									$actived = 0;
									$data['errTitle'] = 'Tiêu đề trống';
									echo 'Tiêu đề trống';
								}
								// Uri
								if (empty($_POST['uri'])) {
									$actived = 0;
									$data['errUri'] = 'URI trống';
									echo 'URI trống';
								}
								// File
								if (!empty($_FILES['image']['name'])) {
									// Title image type
									if (!in_array($_FILES['image']['type'], $imgType)) {
										$actived = 0;
										$data['errFileType'] = 'Chọn một file có định dạng là hình ảnh: .jpg, .jpeg, .png hoặc .gif';
										echo 'Chọn một file có định dạng là hình ảnh: .jpg, .jpeg, .png hoặc .gif';
									}		
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
												echo 'Chọn 1 file hình ở Block'.$i;
												break;
											} else { // nếu có hình --> kiểm tra định dạng
												// Kiem tra dinh dang file
												if (!in_array($_FILES['img'.$i]['type'], $imgType)) {
													$actived = 0;
													$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													echo 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													break;
												}
											}
										} else { // version old
											if (!empty($_FILES['img'.$i]['name'])) {
												if (!in_array($_FILES['img'.$i]['type'], $imgType)) {
													$actived = 0;
													$data['errFileTypeBlock'] = 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													echo 'File hình ở Block'.$i.' cần có định dạng: .jpg, .jpeg, .png hoặc .gif';
													break;
												}
											}
										}
									}
										
								}
								
								echo $actived;
								if ($actived == 1) {
									//echo $actived;
								// Img title
								if (!empty($_FILES['image']['name'])) {
									$_FILES['image']['name'] = time().'.'.explode('.', $_FILES['image']['name'])[1];
									$dataUpdate['hinh'] = $_FILES['image']['name'];
									move_uploaded_file($_FILES['image']['tmp_name'],'./public/EmegazineImage/title/'.$dataUpdate['hinh']);
									unlink('./public/EmegazineImage/title/'.$data['EmegaArr']['hinh']);
								}
								date_default_timezone_set("Asia/Ho_Chi_Minh");
								$dataUpdate['tieu_de'] = $_POST['titleEmega'];
								if ($_POST['mode'] == 'privated') 
									$dataUpdate['privated'] = 1;
								else 
									$dataUpdate['privated'] = 0;
								$dataUpdate['typenews'] = 'emegazine';
								$dataUpdate['url'] = $_POST['uri'];
								$dataUpdate['loai_tin'] = 'emegazine';
								$dataUpdate['description'] = $_POST['description'];
								$dataUpdate['keyword'] = $_POST['keywords'];
								$dataUpdate['user'] = $this->userid;
								$dataUpdate['updated'] = date("l j\/m\/Y\, h:i:s a");
								try {
									$this->M_tin_tuc_table->update('tin_tuc',$id,$dataUpdate);
								} catch (Exception $e) {
									$data['ErrDb'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$e->getMessage();
								}
								// end Titile


								// BLOCK
								for ($i = 1; $i<= $maxindex*1; $i ++) {
									//echo $i;
									if (isset($_FILES['img'.$i])) {
										if (isset($_POST['version'.$i]) && $_POST['version'.$i] == 'old') {
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
														$this->M_emegazine->updateBlock($i,$dataUpdateBlockImg,'blockemegazine', $id);
													} catch (Exception $e) {
														$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
													}
												} else {
													$dataUpdateBlock['idkey'] = $i;
													$dataUpdateBlock['content'] = $_POST['editor'.$i];
													try {
															$this->M_emegazine->updateBlock($i,$dataUpdateBlock,'blockemegazine', $id);
														} catch (Exception $e) {
															$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
														}
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
												echo 'new-ton tai';
												// neu la block new & isset
												// Update
												try {
													$this->M_emegazine->updateBlock($i,$id,$dataUpdateBlock,'blockemegazine', $id);
												} catch (Exception $e) {
													$data['errDbDlock'] = 'Có lỗi trong quá trình chèn cơ sở dữ liệu: '.$i.': '.$e->getMessage();
												}
											} else {
												// neu la block new & !isset
												// insert
												echo 'new-khong ton tai';
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
							$data['script'] = 'layout/ajax/searchUserUpdate';
							$this->load->view('layout/quan_tri/layoutAdmin', $data);

						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						} // if check Isset postID
				
		}
	}// end Class
?>