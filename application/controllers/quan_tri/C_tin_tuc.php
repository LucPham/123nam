<?php
	session_start();
	//ini_set("display_errors",0);
	include(APPPATH.'controllers/phpMailer/class.phpmailer.php');
	include(APPPATH.'controllers/phpMailer/class.smtp.php');
	class C_tin_tuc extends CI_Controller
	{
		private $userid;

		public function __construct()
		{	
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
			$this->load->model('privated/M_privated');
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

		public function index()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$data['title'] = 'Administrator System - 123nam';
					$data['path'] = 'quan_tri/index';
					$this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function ajax_chuyen_muc_album()
		{
			$id = $_POST['ID'];
			$per_load = 5;
			$arr_ajax_chuyen_muc_tin = $this->M_tin_tuc_table->ajax_chuyen_muc_album($id,$per_load);
			$id_next = 0;
			if (!empty($arr_ajax_chuyen_muc_tin))
			{
				foreach ($arr_ajax_chuyen_muc_tin as $id) {
					$id_next = $id['id'];
				}
			}
			if ($id_next > 0)
				$arr_chuyen_muc_tin_next = $this->M_tin_tuc_table->ajax_chuyen_muc_album($id_next,$per_load);
			else 
				$arr_chuyen_muc_tin_next = '';
			if (isset($arr_chuyen_muc_tin_next) && !empty($arr_chuyen_muc_tin_next)) // ----------CON TIN TIEP THEO --------
			{
				$id = 0;
				$category = '';
				foreach ($arr_ajax_chuyen_muc_tin as $item) {
					$id = $item['id'];
					?>
					<tr>
						<td class="td_more">
							
				 				<?php  
									if ($item['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>">
											</a>
										<?php 
									} elseif ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>">
											</a>
										<?php
									}

								?>
						</td>	
						<td>
							<p class="td_chuyen_muc_tin">
								
						 		<?php  
									if ($item['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php echo $item['tieu_de'] ?>
											</a>
										<?php 
									} elseif ($item['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item['url'].'/'.$item['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item['tieu_de']; ?>" alt="<?php echo $item['tieu_de']; ?>">
												<?php echo $item['tieu_de'] ?>
											</a>
										<?php
									}

								?>
							</p>
							<p class="nd_chuyen_muc_tin"><?php echo $item['created'] ?></p>
						</td>
					</tr>
					
					<?php
				}
			?>
					<tr class="tr_viewmore_gif<?php echo $id; ?>" style="display: none">
						<td></td>
						<td class="col-lg-12" align="center">
							<img  src="<?php echo base_url('public/icon/reload.gif') ?>">
						</td>
					</tr> <!--end /GIF loading -->

					<tr class="btn_viewmore">
						<td></td>
						<td class="col-lg-12" align="center">
							<button class="btn viewmore" id="<?php echo $id ?>">Xem thêm</button>
						</td>
					</tr> <!-- end BUTTON viewmore-->
			<?php
			} else {  // ----------HET TIN TIEP THEO --------
				if (!empty($arr_ajax_chuyen_muc_tin)) {
				foreach ($arr_ajax_chuyen_muc_tin as $item2) {
					?>
					<tr>
						<td class="td_more">


				 				<?php  
									if ($item2['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item2['url'].'/'.$item2['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>">
											</a>
										<?php 
									} elseif ($item2['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item2['url'].'/'.$item2['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
												<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>">
											</a>
										<?php
									}

								?>
						</td>	
						<td>
							<p class="td_chuyen_muc_tin">
								
						 			<?php  
									if ($item2['typenews'] != 'photo'){
										?>
											<a href="<?php echo site_url('tin-tuc/'.$item2['url'].'/'.$item2['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
												<?php echo $item2['tieu_de'] ?>
											</a>
										<?php 
									} elseif ($item2['typenews'] == 'photo') {
										?>
											<a href="<?php echo site_url('tin-tuc/photo/'.$item2['url'].'/'.$item2['id']) ?>" class="tieu_de_tin_moi_nhat" title="<?php echo $item2['tieu_de']; ?>" alt="<?php echo $item2['tieu_de']; ?>">
												<?php echo $item2['tieu_de'] ?>
											</a>
										<?php
									}

								?>
							</p>
							<p class="nd_chuyen_muc_tin"><?php echo $item2['created'] ?></p>
						</td>
					</tr>
					<?php
				}
			}
			}
		}
		public function ajax_chuyen_muc_tin()
		{
			$id = $_POST['ID'];
			$per_load = 5;
			if (isset($_POST['cate']))
				$category = $_POST['cate'];
			$arr_ajax_chuyen_muc_tin = $this->M_tin_tuc_table->ajax_chuyen_muc_tin($id,$category,$per_load);
			$id_next = 0;
			if (!empty($arr_ajax_chuyen_muc_tin))
			{
				foreach ($arr_ajax_chuyen_muc_tin as $id) {
					$id_next = $id['id'];
				}
			}
			
			if ($id_next > 0)
				$arr_chuyen_muc_tin_next = $this->M_tin_tuc_table->ajax_chuyen_muc_tin($id_next,$category,$per_load);
			else 
				$arr_chuyen_muc_tin_next = '';
			if (isset($arr_chuyen_muc_tin_next) && !empty($arr_chuyen_muc_tin_next)) // ----------CON TIN TIEP THEO --------
			{
				$id = 0;
				$category = '';
				foreach ($arr_ajax_chuyen_muc_tin as $item) {
					$id = $item['id'];
					$category = $item['loai_tin'];
					?>
					<tr>
						<td class="td_more">
							<?php 
				 				if ($item['loai_tin'] =='news') // truong hop tin thuoc chuyen muc tin tuc
				 				{
				 				?>
				 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>">
				 					<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>">
				 				</a>
			 				<?php
				 				}
				 			 ?>

				 			 <?php 
				 				if ($item['loai_tin'] =='top') // truong hop tin thuoc chuyen muc tin tuc
				 				{
				 				?>
				 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('trang-nhat/'.$item['url'].'/'.$item['id']) ?>">
				 					
				 					<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item['hinh']) ?>" alt="<?php echo $item['tieu_de'] ?>" title="<?php echo $item['tieu_de'] ?>">
				 				</a>
			 				<?php
				 				}
				 			 ?>
									
						</td>	
						<td>
							<p class="td_chuyen_muc_tin">
								<?php 
						 				if ($item['loai_tin'] =='news') // truong hop tin thuoc chuyen muc tin tuc
						 				{
						 				?>
						 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('tin-tuc/'.$item['url'].'/'.$item['id']) ?>"><?php echo $item['tieu_de'] ?></a>
					 				<?php
						 				}
						 			 ?>

						 			 <?php 
						 				if ($item['loai_tin'] =='top') // truong hop tin thuoc chuyen muc tin tuc
						 				{
						 				?>
						 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('trang-nhat/'.$item['url'].'/'.$item['id']) ?>"><?php echo $item['tieu_de'] ?></a>
					 				<?php
						 				}
						 			 ?>
							</p>
							<p class="nd_chuyen_muc_tin"><?php echo $item['created'] ?></p>
						</td>
					</tr>
					
					<?php
				}
			?>
					<tr class="tr_viewmore_gif<?php echo $id; ?>" style="display: none">
						<td></td>
						<td class="col-lg-12" align="center">
							<img  src="<?php echo base_url('public/icon/reload.gif') ?>">
						</td>
					</tr> <!--end /GIF loading -->

					<tr class="btn_viewmore">
						<td></td>
						<td class="col-lg-12" align="center">
							<button data-category="<?php echo $category; ?>" class="btn viewmore" id="<?php echo $id ?>">Xem thêm</button>
						</td>
					</tr> <!-- end BUTTON viewmore-->
			<?php
			} else {  // ----------HET TIN TIEP THEO --------
				if (!empty($arr_ajax_chuyen_muc_tin)) {
				foreach ($arr_ajax_chuyen_muc_tin as $item2) {
					?>
					<tr>
						<td class="td_more">
							<?php 
				 				if ($item2['loai_tin'] =='news') // truong hop tin thuoc chuyen muc tin tuc
				 				{
				 				?>
				 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('tin-tuc/'.$item2['url'].'/'.$item2['id']) ?>">
				 					<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>" alt="<?php echo $item2['tieu_de'] ?>" title="<?php echo $item2['tieu_de'] ?>">
				 				</a>
			 				<?php
				 				}
				 			 ?>

				 			 <?php 
				 				if ($item2['loai_tin'] =='top') // truong hop tin thuoc chuyen muc tin tuc
				 				{
				 				?>
				 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('trang-nhat/'.$item2['url'].'/'.$item2['id']) ?>">
				 					
				 					<img class="img_chuyen_muc_tin" src="<?php echo base_url('public/hinh_tieu_de/'.$item2['hinh']) ?>" alt="<?php echo $item2['tieu_de'] ?>" title="<?php echo $item2['tieu_de'] ?>">
				 				</a>
			 				<?php
				 				}
				 			 ?>
						</td>	
						<td>
							<p class="td_chuyen_muc_tin">
								<?php 
						 				if ($item2['loai_tin'] =='news') // truong hop tin thuoc chuyen muc tin tuc
						 				{
						 				?>
						 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('tin-tuc/'.$item2['url'].'/'.$item2['id']) ?>"><?php echo $item2['tieu_de'] ?></a>
					 				<?php
						 				}
						 			 ?>

						 			 <?php 
						 				if ($item2['loai_tin'] =='top') // truong hop tin thuoc chuyen muc tin tuc
						 				{
						 				?>
						 				<a class="tieu_de_tin_moi_nhat" href="<?php echo site_url('trang-nhat/'.$item2['url'].'/'.$item2['id']) ?>"><?php echo $item2['tieu_de'] ?></a>
					 				<?php
						 				}
						 			 ?>
							</p>
							<p class="tt_chuyen_muc_tin"><?php if (strlen($item2['tom_tat']) > 200) echo substr($item2['tom_tat'],0,200).' ...'; else echo $item2['tom_tat'] ?></p>
							<p class="nd_chuyen_muc_tin"><?php echo $item2['created'] ?></p>
						</td>
					</tr>
					<?php
				}
			}
			}
		}
		public function chuyen_muc_album()
		{
			if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
		
			$data['title'] = 'Album - 123nam';
			$data['description'] = 'Album hinh anh pham luc';
			$data['keyword'] = 'Album hinh, hinh phamluc';
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('categoryNews','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('categoryNews','right');
			$per_page = 20;
			$per_load = 5;
			$id_next = 0;
			$data['arr_chuyen_muc_tin'] = $this->M_tin_tuc_table->danh_sach_album($per_page);
			foreach ($data['arr_chuyen_muc_tin'] as $id) {
				$id_next = $id['id'];
			}
			if ($id_next > 1) 
			{
				$arr_next = $this->M_tin_tuc_table->ajax_chuyen_muc_album($id_next,$per_load);
				if ($arr_next === false)
					$data['hide_btn_more'] = 1;
				else
					$data['show_btn_more'] = 1;
			} else $data['hide_btn_more'] = 1;
			$data['path'] = 'layout/chuyen_muc_album/Danh_sach_album';
			$this->load->view('layout/chuyen_muc_album/layoutChuyenMucAlbum', $data);
		}
		public function chuyen_muc_tin()
		{
			if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			
			$data['description'] = 'Chuyen muc tin tuc cua Pham Van Luc - 123 Năm';
			$data['keyword'] = 'Tin tuc phamluc, tin moi xuan 2017, tin nhom uoc mo di xa, pham van luc';

			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('categoryNews','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('categoryNews','right');

			$category = $this->uri->segment(2);
			if ($category == 'news') 
				$data['title'] = 'Tin tức - 123 Năm';
			elseif ($category == 'hot')
				$data['title'] = 'Hot - 123 Năm';
			$per_page = 20;
			$per_load = 5;
			$id_next = 0;
			if (!isset($category) && empty($category))
			{
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}

			$data['arr_chuyen_muc_tin'] = $this->M_tin_tuc_table->danh_sach_tin($category,$per_page);
			foreach ($data['arr_chuyen_muc_tin'] as $id) {
				$id_next = $id['id'];
			}
			if ($id_next > 1) 
			{
				$arr_next = $this->M_tin_tuc_table->ajax_chuyen_muc_tin($id_next,$category,$per_load);
				if ($arr_next === false)
					$data['hide_btn_more'] = 1;
				else
					$data['show_btn_more'] = 1;
			} else $data['hide_btn_more'] = 1;

			$data['category'] = $category;
			$data['path'] = 'layout/chuyen_muc_tin/Danh_sach_tin';
			$this->load->view('layout/chuyen_muc_tin/layoutChuyenmuctin', $data);
		}
		
		public function update_album()
		{
				$id = $this->uri->segment(4);
				$postcategories = $_GET['postcategories'];
				$loai_tin = $this->M_tin_tuc_table->ds_loai_tin();
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
					if ($data['username']['adm'] == 1 && $data['username']['boss'] == 1) {
						$data['loai_tin_nhat_ky'] = $this->M_tin_tuc_table->ds_loai_tin_nhat_ky();
					}
				$data['loai_tin'] = $loai_tin;
					
					if ($this->M_tin_tuc_table->checkIsset($postcategories,$id) == 1)
					{
						$data['loai_tin_get'] = $postcategories;
						$loai_tin_tin_tuc_arr = array();
						foreach ($loai_tin as $key=>$idname) {
							$loai_tin_tin_tuc_arr[$key] = $idname['ma_loai'];
						}
						$loai_tin_nhat_ky = $data['loai_tin_nhat_ky'];
						$countEleLoai_tin_tin_tuc_arr = count($loai_tin_tin_tuc_arr);
						foreach ($loai_tin_nhat_ky as $key=>$nkname) {
							$loai_tin_tin_tuc_arr[$countEleLoai_tin_tin_tuc_arr+$key] = $nkname['ma_loai'];
						}
						//var_dump($loai_tin_tin_tuc_arr);
						if (in_array($postcategories,$loai_tin_tin_tuc_arr)) {
							$data['arr_album'] = $this->M_tin_tuc_table->tin_theo_id($id);

							//usertags arr
							if ($data['arr_album']['privated'] == 1) 
								$data['usertags'] = $this->M_tin_tuc_table->getUsertags('usertags',$id);
							
							$data['imgLocation'] = 'tin_tuc';
							$data['title'] = $data['arr_album']['tieu_de'].' - Update';

						} else {
							$data['arr_album'] = $this->M_album->data_album($id);
							//usertags arr
							if ($data['arr_album']['privated'] == '1') 
								$data['usertags'] = $this->M_tin_tuc_table->getUsertags('usertags',$id);
							//var_dump($data['usertags']);

							$data['imgLocation'] = 'album';
							$data['title'] = $data['arr_album']['tieu_de'].' - Update';
						}
						// XU LY HINH TIEU DE
						if (isset($_POST['btn']))
						{

						// Xu ly usertags
							
						// delete all usertags: public = 1
						if ($data['arr_album']['privated'] == 1) {
							if ($_POST['mode'] == 'public') {
								$dataEdit['privated'] = 0;
								$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
							}
						}
						// usertags

						//isset mode privated
						if ($_POST['mode'] == 'privated') {
							//delete usertags old
							$dataEdit['privated'] = 1;
						} // end isset mode privated




						$file = $_FILES['albumFile'];
					
						if ($file['name'] != '') {
							// khong thay doi hinh
							$filetype = array('image/png','image/jpeg','image/jpg','image/gif');
							if (in_array($file['type'], $filetype)) {
								if ($file['size'] < 2000000) {
									$filename = time().'.'.end(explode(".", $file['name']));

									if (in_array($_POST['loai_tin_album_upload'],$loai_tin_tin_tuc_arr)) {
										// THUOC TIN_TUC TABLE
										move_uploaded_file($file['tmp_name'],'./public/hinh_tieu_de/'.$filename);

									} else {
										// THUOC ALBUM TABLE
										move_uploaded_file($file['tmp_name'],'./public/album/hinh_tieu_de/'.$filename);
									}

									// XOA HINH CŨ
									if ($postcategories == 'album') {
										unlink('./public/album/hinh_noi_dung/'.$data['arr_album']['hinh']);
									} else {
										unlink('./public/hinh_tieu_de/'.$data['arr_album']['hinh']);
									}
								} else $data['err'] = 'Vui lòng chọn 1 file hình có kích thước nhỏ hơn 2Mb!';								
							} else $data['err'] = 'Vui lòng chọn 1 file hình!';
						} else {
							$filename = $data['arr_album']['hinh'];
							if (in_array($postcategories, $loai_tin_tin_tuc_arr)) {
								// NEU GET_FROM_URL THUOC TIN_TUC
								if (!in_array($_POST['loai_tin_album_upload'], $loai_tin_tin_tuc_arr)) {
									// NEU POST LOAI_TIN THUOC ALBUM --> COPY
									copy('./public/hinh_tieu_de/'.$data['arr_album']['hinh'], './public/album/hinh_tieu_de/'.$data['arr_album']['hinh']);
								} 
							} else {
								// NEU GET_FROM_URL THUOC ALBUM
								if (in_array($_POST['loai_tin_album_upload'], $loai_tin_tin_tuc_arr)) {
									// NEU POST LOAI_TIN THUOC TIN_TUC --> UPDATE
									copy('./public/album/hinh_tieu_de/'.$data['arr_album']['hinh'],'./public/hinh_tieu_de/'.$data['arr_album']['hinh']);
								} 
							}
						}
						// XỬ LÝ UPDATE || INSERT
						if ($_POST['loai_tin_album_upload'] == 'news_top1') {
							$dataEdit['top'] = 1;
							$dataTopUpdate['top'] = '0';
							$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
						}
						if (isset($data['arr_album']['top']) && $data['arr_album']['top'] == 1) {
							if ($_POST['loai_tin_album_upload'] != 'news_top1') {
									$dataTopUpdate['top'] = '0';
									$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
									$this->M_tin_tuc_table->updateToTop1();

								}
						}
						$dataEdit['tieu_de'] = $_POST['albumName'];
						$dataEdit['tom_tat'] = $_POST['tom_tat_album_upload'];
						$dataEdit['url'] = $_POST['url'];
						$dataEdit['hinh'] = $filename;

						$dataEdit['updated'] = date("l j\/m\/Y\, h:i:s a");
						$dataEdit['user'] = $this->userid;
						$task1 = 0;
						if (in_array($postcategories, $loai_tin_tin_tuc_arr)) {
							// NEU GET_FROM_URL THUOC TIN_TUC
							if (in_array($_POST['loai_tin_album_upload'], $loai_tin_tin_tuc_arr)) {
								// NEU POST LOAI_TIN THUOC TIN_TUC --> UPDATE
								//'update tin_tuc table';
								$dataEdit['loai_tin'] = $_POST['loai_tin_album_upload'];
								//usertags


								//isset mode privated
								if ($_POST['mode'] == 'privated') {
									//delete usertags old
									$dataEdit['privated'] = 1;
									$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
									$dataTags['postid'] = $id;
									$usertags = explode(',', $_POST['usertaged']);
									if ($_POST['loai_tin_album_upload'] == 'album')
										$dataTags['table_name'] = 'album';
									else  
										$dataTags['table_name'] = 'tin_tuc';
									foreach ($usertags as $key=>$val) {
										if ($val != '') {
											$dataTags['userid'] = $val;
											$this->M_tin_tuc_table->insert($dataTags,'usertags');
										}
									}
								} // end isset mode privated


								if ($this->M_tin_tuc_table->update('tin_tuc',$id,$dataEdit))
									$task1 = 1;
							} else {
								//insert-->album, delete tin_tuc table, get maxid(album) update-->images_album';
								if ($this->M_tin_tuc_table->insert($dataEdit,'album')) {
									if ($this->M_tin_tuc_table->delete('tin_tuc',$id)) {
										$max = $this->M_tin_tuc_table->maxID('album');
										$dataImagesAlbum['album'] = $max['id'];
										if ($this->M_tin_tuc_table->updateFeildTable('album', 'images_album',$id,$dataImagesAlbum))
											$task1 = 1;
										//isset mode privated
										if ($_POST['mode'] == 'privated') {
											//delete usertags old
											$dataEdit['privated'] = 1;
											$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
											$dataTags['postid'] = $max['id'];
											$usertags = explode(',', $_POST['usertaged']);
											if ($_POST['loai_tin_album_upload'] == 'album')
												$dataTags['table_name'] = 'album';
											else  
												$dataTags['table_name'] = 'tin_tuc';
											foreach ($usertags as $key=>$val) {
												if ($val != '') {
													$dataTags['userid'] = $val;
													$this->M_tin_tuc_table->insert($dataTags,'usertags');
												}
											}
										} // end isset mode privated
										$id = $max['id'];

										
									}
								}

							}
						} else {
							// NEU GET_FROM_URL THUOC ALBUM
							if (in_array($_POST['loai_tin_album_upload'], $loai_tin_tin_tuc_arr)) {
								// NEU POST LOAI_TIN THUOC TIN_TUC --> UPDATE
								//'insert-->tin_tuc, delete album table,get maxid(tin_tuc) update-->images_album';
								$dataEdit['typenews'] = 'photo';
								$dataEdit['loai_tin'] = $_POST['loai_tin_album_upload'];
								if ($this->M_tin_tuc_table->insert($dataEdit,'tin_tuc')) {
									if ($this->M_tin_tuc_table->delete('album',$id)) {
										$max = $this->M_tin_tuc_table->maxID('tin_tuc');
										$dataImagesAlbum['album'] = $max['id'];
										if ($this->M_tin_tuc_table->updateFeildTable('album', 'images_album',$id,$dataImagesAlbum))
											$task1 = 1;

										//isset mode privated
										if ($_POST['mode'] == 'privated') {
											//delete usertags old
											$dataEdit['privated'] = 1;
											$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
											$dataTags['postid'] = $max['id'];
											$usertags = explode(',', $_POST['usertaged']);
											if ($_POST['loai_tin_album_upload'] == 'album')
												$dataTags['table_name'] = 'album';
											else  
												$dataTags['table_name'] = 'tin_tuc';
											foreach ($usertags as $key=>$val) {
												if ($val != '') {
													$dataTags['userid'] = $val;
													$this->M_tin_tuc_table->insert($dataTags,'usertags');
												}
											}
										} // end isset mode privated
										$id = $max['id'];
									}
								}
							} else {
								//'update album';
								if ($this->M_tin_tuc_table->update('album',$id,$dataEdit))
									$task1 = 1;
								//isset mode privated
								if ($_POST['mode'] == 'privated') {
									//delete usertags old
									$dataEdit['privated'] = 1;
									$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
									$dataTags['postid'] = $id;
									$usertags = explode(',', $_POST['usertaged']);
									if ($_POST['loai_tin_album_upload'] == 'album')
										$dataTags['table_name'] = 'album';
									else  
										$dataTags['table_name'] = 'tin_tuc';
									foreach ($usertags as $key=>$val) {
										if ($val != '') {
											$dataTags['userid'] = $val;
											$this->M_tin_tuc_table->insert($dataTags,'usertags');
										}
									}
								} // end isset mode privated
							}
						}
						}// end isset BTN


					} else echo 'not found';// end check
				
						$data['arr_upload']= $this->M_album->data_upload($id);
					if ($task1 = 1)
					{
						
						$ImgUpload = $this->M_album->countImgUpload($id); 
						$ImgUpdate = 0;

						if (isset($_POST['btn']) && $_POST['btn'] != '') {
							foreach ($_FILES['data']['tmp_name'] as $key=>$val) {
								$ImgUpdate = $key+1;
							}
							
							if ($ImgUpdate == $ImgUpload) {//----------------Hinh khong thay doi ----->
								foreach ($_FILES['data']['tmp_name'] as $key=>$val) {
									if ($_FILES['data']['name'][$key] != '') //co hinh moi
									{
										$temp = explode(".", $_FILES['data']['name'][$key]);
										$newfilename = round(microtime(true)).'.'.end($temp);
										$data1['image'] = ($key+1).'-'.$newfilename;
										$data1['caption'] = $_POST['caption'][$key];
										$data1['album'] = $id;
										$data1['index'] = $_POST['stt'][$key];
										$idItem = $_POST['idItem'][$key];
										move_uploaded_file($_FILES['data']['tmp_name'][$key],'./public/album/hinh_noi_dung/'.$data1['image']);
										$arr_upload = $this->M_album->data_unlink($id, $data1['index']);
										unlink('./public/album/hinh_noi_dung/'.$arr_upload['image']); //xoa file cu~

										$update = $this->M_album->update_img_in_images_album($id,$idItem,$data1);
										//echo $data1['image']."thay doi o hinh so index=".($key+1);
										if ($update)
											$data['success'] = "Cập nhật Album ".$id." thành công.";
									} else //---hinh khong thay doi --- UPDATE CAPTION---> 
									{
										$data2['caption'] = $_POST['caption'][$key];
										$data2['index'] = $_POST['stt'][$key]; 
										$idItem = $_POST['idItem'][$key];
										$update_caption_album = $this->M_album->update_caption_album($data2,$id,$idItem);
										if ($update_caption_album)
											$data['success'] = "Cập nhật thành công.";
									}
								} //end //FOREACH
							} elseif ($ImgUpdate < $ImgUpload) {  //----Hinh moi it hon hinh cu  ----DELETE --->
								$index_uploaded = array();
								$index_get_delete = array();
								for ($i = 1; $i <= $ImgUpload; $i++) 
								{
									$index_uploaded[$i-1] = $i;
								} 
								
								foreach ($_FILES['data']['tmp_name'] as $key=>$val) {
									if (in_array($_POST['stt'][$key], $index_uploaded)) {
										//echo "Update ".$_POST['stt'][$key];
										$index_get_delete[$key] = $_POST['stt'][$key];

										if ($_FILES['data']['name'][$key] != '') //co hinh moi
										{
											$temp = explode(".", $_FILES['data']['name'][$key]);
											$newfilename = round(microtime(true)).'.'.end($temp);
											$data3['image'] = ($key+1).'-'.$newfilename;
											$data3['caption'] = $_POST['caption'][$key];
											$data3['album'] = $id;
											$data3['index'] = $_POST['stt'][$key];
											$idItem = $_POST['idItem'][$key];
											move_uploaded_file($_FILES['data']['tmp_name'][$key],'./public/album/hinh_noi_dung/'.$data3['image']);
											$arr_upload = $this->M_album->data_unlink($id, $_POST['stt'][$key]);
											unlink('./public/album/hinh_noi_dung/'.$arr_upload['image']); //xoa file cu~

											$update = $this->M_album->update_img_in_images_album($id,$idItem,$data3);
											//echo $data1['image']."thay doi o hinh so index=".($key+1);
											if ($update)
												$data['success'] = "Cập nhật Album ".$id." thành công.";
										} else //---hinh khong thay doi --- UPDATE CAPTION---> 
										{
											$data4['caption'] = $_POST['caption'][$key];
											$data4['index'] = $_POST['stt'][$key];
											$idItem = $_POST['idItem'][$key];
											$update_caption_album = $this->M_album->update_caption_album($data4,$id,$idItem);
											if ($update_caption_album)
												$data['success'] = "Cập nhật thành công.";
										}

									}

								} // end /FOREACH
								for ($i = 1; $i <= $ImgUpload; $i++) 
								{
									if (in_array($i,$index_get_delete))
									{

									} else {
										//echo "Xoa: ".$i.", ";
										$delete_img_in_images_album = $this->M_album->delete_img_in_images_album($id,$i);
										if ($delete_img_in_images_album)
											$data['err'] = "Đã xóa hình ".$i;
									}
								} 
								
							} else { //////-----------Hinh moi nhieu hon cu~---->
								$arr_index_cu = array();
								for ($i = 1; $i <= $ImgUpload; $i++)
								{
									$arr_index_cu[] = $i;
								}
								foreach ($_FILES['data']['tmp_name'] as $key => $val) {
									if (($key+1) <= $ImgUpload)
									{
										$fileremove = $key+1;
										if ($_POST['stt'][$key] != $fileremove)
										{
											echo "File ".$fileremove." da xoa"; 
										}
									}
									if (in_array($_POST['stt'][$key],$arr_index_cu)) //index cu ---- UPDATE
									{
										if ($_FILES['data']['name'][$key] != '') //có hình mới
										{
											$temp = explode(".", $_FILES['data']['name'][$key]);
											$newfilename = round(microtime(true)).'.'.end($temp);
											$data4['image'] = ($key+1).'-'.$newfilename;
											$data4['caption'] = $_POST['caption'][$key];
											$data4['index'] = $_POST['stt'][$key];
											$idItem = $_POST['idItem'][$key];
											move_uploaded_file($_FILES['data']['tmp_name'][$key],'./public/album/hinh_noi_dung/'.$data4['image']);
											$update = $this->M_album->update_img_in_images_album($id,$idItem,$data4);
											if ($update)
												$data['success'] = "Cập nhật thành công hình: ".$_POST['stt'][$key];
										} else { //khong co hinh
											//echo "Khong co hinh: ".($key+1);

											$data5['caption'] = $_POST['caption'][$key];
											$data5['index'] = $_POST['stt'][$key];
											$idItem = $_POST['idItem'][$key];
											$update_caption = $this->M_album->update_caption_album($data5,$id,$idItem);
											if ($update_caption)
												$data['success'] = 'Cập nhật thành công.';
										}
									} else {	//index moi ----Insert---->
										//echo "Index moi: ".$_POST['stt'][$key];
										if ($_FILES['data']['name'][$key] != '')
										{
											$temp = explode(".", $_FILES['data']['name'][$key]);
											$newfilename = round(microtime(true)).'.'.end($temp);
											$data6['image'] = ($key+1).'-'.$newfilename;
											$data6['caption'] = $_POST['caption'][$key];
											$data6['album'] = $id;
											$data6['index'] = $key+1;
											
											move_uploaded_file($_FILES['data']['tmp_name'][$key],'./public/album/hinh_noi_dung/'.$data6['image']);
											$insert = $this->M_album->insert_img_to_images_album_update($data6);
											if ($insert)
												$data['success'] = "Đã thêm hình mới thành công.";
										} else {
											$data['err'] = 'Để thêm ảnh vào album, cần tải ảnh lên (hinh so: '.($key+1).')';
										}
									} 
								}
						
						}//end hinh moi nhieu hon hinh cu
						}
					}

					$data['path'] = 'quan_tri/V_update_album';
					$data['script'] = 'layout/ajax/searchUserUpdate';
					$this->load->view('layout/quan_tri/layoutUpdate_Upload', $data);
			
		}
		public function delete_album()
		{
			
			if (isset($_POST['id']) && !empty($_POST['id']))
			{
				$id = $_POST['id'];
				$delete_album = $this->M_album->delete_album($id);
				if ($delete_album)
					echo "Đã xóa một Album!";
				else
					echo "-_- Đã xảy ra lỗi trong quá trình xóa -_-";
			} else echo "-_- Không tồn tại Album cần xóa -_-";
		
		}
		public function ds_album()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$data['title'] = 'Album Item List - Adm System 123nam';
					$this->load->library('pagination');
			        $config['base_url'] = base_url().'quan-tri/album/danh-sach-album';
			        $config['total_rows'] = $data['total_rows'] = $this->M_album->tong_so_album();
			        $config['per_page'] = 20;
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
			        $data['ds_album']=$this->M_album->ds_album_phan_trang($config['per_page'],$start);
					$data['path'] = 'quan_tri/V_ds_album';
					$data['script'] = 'layout/ajax/show_hide_article';
					$this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function upload()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$data['title'] = 'Album Publish Center - 123nam';
					$data['loai_tin'] = $this->M_tin_tuc_table->ds_loai_tin();
					$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
						if ($data['username']['adm'] == 1 && $data['username']['boss'] == 1) {
							$data['loai_tin_nhat_ky'] = $this->M_tin_tuc_table->ds_loai_tin_nhat_ky();
						}

					date_default_timezone_set("Asia/Ho_Chi_Minh");
					if (isset($_POST['btn']) && $_POST['btn'] != '')
					{
					if (!empty($_POST['albumName'])) {
					if (!empty($_POST['urlalbum'])) {
					if($_POST['loai_tin_album_upload'] != '0') {
					if (!empty($_POST['tom_tat_album_upload'])) {
					if (!empty($_POST['description'])) {
					if (!empty($_POST['keyword'])) {
						if ($_POST['albumName'] != '' && $_FILES['albumFile']['name'] != '')
						{
							if ($_FILES['albumFile']['size'] <= 1000000)
							{
								$type_of_news_table_arr = array();
								$loaiTin = $this->M_tin_tuc_table->getRowArray('loai_tin');
								foreach ($loaiTin as $key=>$item) {
									$type_of_news_table_arr[$key] = $item['ma_loai'];
								}

								$typeSelect = $_POST['loai_tin_album_upload'];
								$listOk = 0;


																		

								if (in_array($typeSelect, $type_of_news_table_arr))
								{
									// LOAI TIN THUOC HOT, TIN TUC, TOP1
									// INSERT --> TIN_TUC TABLE
									if ($_POST['mode'] == 'privated') {
										$dataInsert['privated'] = 1;
										$dataTag['table_name'] = 'tin_tuc';
									}

									if ($_POST['loai_tin_album_upload'] == 'news_top1') {
										$dataInsertNewsTable['top'] = 1;
										$dataTopUpdate['top'] = 0;
										$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
									}
									$data['success'] = 'insert -> tin_tuc table';
									$dataInsertNewsTable['tieu_de'] =  $_POST['albumName'];
									$dataInsertNewsTable['typenews'] = 'photo';
									$dataInsertNewsTable['tom_tat'] = $_POST['tom_tat_album_upload'];
									$dataInsertNewsTable['description'] = $_POST['description'];
									$dataInsertNewsTable['keyword'] = $_POST['keyword'];
									$temp1 = explode(".", $_FILES['albumFile']['name']);
									$newfilename1 = round(microtime(true)).'.'.end($temp1);
									$dataInsertNewsTable['hinh'] = $newfilename1;
									$dataInsertNewsTable['loai_tin'] = $_POST['loai_tin_album_upload'];
									$dataInsertNewsTable['url'] = $_POST['urlalbum'];
									$dataInsertNewsTable['user'] = $this->userid;
									$dataInsertNewsTable['created'] = date("l j\/m\/Y\, h:i:s a");
									
									move_uploaded_file($_FILES['albumFile']['tmp_name'], './public/hinh_tieu_de/'.$dataInsertNewsTable['hinh']);
									if ($this->M_tin_tuc_table->insert($dataInsertNewsTable,'tin_tuc')) {
										$listOk = 1;
										$data['success'] = 'inserted to tin_tuc';
										$idalbum = $this->M_tin_tuc_table->maxID('tin_tuc');
									}
								} else {
									$data['success'] = 'insert -> album table';
									// LOAI TIN THUOC ALBUM
									// INSERT --> ALBUM TABLE
									// INSERT DATA --> ALBUM TABLE
									if ($_POST['mode'] == 'privated') {
										$dataInsert['privated'] = 1;
										$dataTag['table_name'] = 'album';
									}
									$dataInsert['tieu_de'] = $_POST['albumName'];
									$dataInsert['url'] = $_POST['urlalbum'];
									$temp1 = explode(".", $_FILES['albumFile']['name']);
									$newfilename1 = round(microtime(true)).'.'.end($temp1);
									$dataInsert['hinh'] = $newfilename1;
									$dataInsert['tom_tat'] = $_POST['tom_tat_album_upload'];
									$dataInsert['description'] = $_POST['description'];
									$dataInsert['keyword'] = $_POST['keyword'];
									$dataInsert['created'] = date("l j\/m\/Y\, h:i:s a");
									$dataInsert['user'] = $this->userid;

									move_uploaded_file($_FILES['albumFile']['tmp_name'], './public/album/hinh_tieu_de/'.$dataInsert['hinh']);
									if ($this->M_album->Create_album($dataInsert)) {
										$listOk = 1;
										$idalbum = $this->M_album->maxIdAlbum();
									}
									// @@ END INSERT DATA --> ALBUM TABLE
									// usertags
									if ($_POST['mode'] == 'privated') {
										
										$userArr = $_POST['userArr'];
										$userArr = explode(',', $userArr);
											$dataTag['postid'] = $idalbum['id'];
											
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
								

							} else $data['errAlbum'] = 'Kích thước file tiêu đề không nên vượt quá 1MB.';
						} else $data['errAlbum'] = 'Cần một hình tiêu đề!';

						if ($listOk == 1) {
						
						$data1['album'] = $idalbum['id'];
						$errList = array();
						$successList = array();
						foreach ($_FILES['data']['tmp_name'] as $key=>$val)
						{	
							if (empty($val) || $_FILES['data']['size'][$key] > 2000000)
							{
								$data['err'] = 'Vui lòng nhập đầy đủ thông tin và kiểm tra kích thước hình tải lên (nhỏ hơn 2MB).';
								exit();
								
							} else {
								//$_FILES['data']['name'][$key] = ($key+1).'-'.time().$_FILES['data']['name'][$key];

								$temp = explode(".", $_FILES['data']['name'][$key]);
								$newfilename = round(microtime(true)).'.'.end($temp);
								$data1['image'] = ($key+1).'-'.$newfilename;
								$data1['caption'] = $_POST['caption'][$key];
								$data1['index'] = $key +1;
								move_uploaded_file($_FILES['data']['tmp_name'][$key],'./public/album/hinh_noi_dung/'.$data1['image']);
								if ($upload = $this->M_album->upload($data1)) {
									$successList[$key] = $key+1;
								} else {
									$errList[$key] = $key+1;
								}

							}
							
						} // END FOREACH*/
						$data['uploadInfo'] = $successList;
						$data['errInfo'] = $errList;
						$data['success'] = "Upload success!";
					} else { // END LISTOK
						$data['err'] = 'Lỗi trong quá trình upload, vui lòng thử lại!';
					} 
						
					} else $data['err'] = 'Keyword không được bỏ trống!';
					} else $data['err'] = 'Description không được bỏ trống!';
					} else $data['err'] = 'Cần một nội dung tóm tắt trước khi xuất bản!';
					} else $data['err'] = 'Vui lòng chọn loại tin!';
					} else $data['err'] = 'Cần một đường dẫn: url!';
					} else $data['err'] = 'Vui lòng nhập tên Album!';
					} // end btn



					$data['path'] = 'quan_tri/V_upload';
					$data['script'] = 'layout/ajax/searchUser';
					$this->load->view('layout/quan_tri/layoutUpload', $data);
				}	else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function ajaxLoadResult()
		{
			echo "<h4>Kết quả khảo sát</h4>";
			if (isset($_POST['survey']) && !empty($_POST['survey']))
			{
				$surveyid = $_POST['survey'];
				$data['surveyData'] = $this->M_tin_tuc_table->getSurvey_id($surveyid);
				$data['surveyAnswers'] = $this->M_tin_tuc_table->get_survey_answer($surveyid);
				$data['sumvote'] = $this->M_tin_tuc_table->sumVote($surveyid);
				$this->load->view('tin_tuc/ShowSurveyResults', $data);
			} header("Refresh:0");
		}
		public function ajaxMultiYN()
		{
			if (isset($_POST['answerid']))
				$answerid = $_POST['answerid'];
			if (isset($_POST['captcha']))
				$captcha = $_POST['captcha'];
			if (isset($_POST['survey']))
				$surveyid = $_POST['survey'];
			$sessCaptcha = $this->session->userdata('word');
			$time = time()-7200;
			if ($this->session->userdata('time') > $time)
			{
				if (strcasecmp($captcha, $sessCaptcha) == 0)
				{
					$this->M_tin_tuc_table->getAnswerFromUser($answerid);
					unset($_SESSION['word']);
					unset($_SESSION['ip_address']);
					unset($_SESSION['time']);
					$cookiename = 'survey_'.$surveyid;
					setcookie($cookiename,$surveyid,time()+86400,'/');

					echo "1";
				} else echo "captErr";
			} else echo "timeErr";
		}
		public function insertSurveyResultAjax()
		{
			// DÙNG SESSION TO STORE CAPTCHA WORD
			$sessCaptcha = $this->session->userdata('word');
			if (isset($_POST['captcha']))
				$captcha = $_POST['captcha'];
			if (isset($_POST['survey']))
				$surveyid = $_POST['survey'];
			$time = time()-7200;
			
			if ($this->session->userdata('time') > $time)
			{
				if (strcasecmp($captcha, $sessCaptcha) == 0)
				{
					$dataResult = json_decode(stripslashes($_POST['data']));
					foreach ($dataResult as $key=>$item)
					{
						$this->M_tin_tuc_table->getAnswerFromUser($item);

					}
					$cookiename = 'survey_'.$surveyid;
					setcookie($cookiename,$surveyid,time() + 86400,'/');
					echo "1";
				} else echo "captErr";
			} else echo "timeErr";
		}

		public function getIndex($id,$type) {
				$select = 'id,tieu_de,tom_tat,noi_dung';
				$dataCollection = $this->M_tin_tuc_table->getArrayNotId('tin_tuc',$select,$id);
		        $collection = array();
		        if ($type = 'photo') {
		        	foreach ($dataCollection as $postId=>$post) {
		        	$collection[$post['id']] = strtolower($post['tieu_de']).' '.strtolower($post['tom_tat']);
		       	 }
		        } else {
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
		public function chi_tiet_tin_photo()
		{
			if ($this->userid)
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('DET','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('DET','right');
			$id = $this->uri->segment(4);
			if (isset($id) && $id != '')
			{

				$kiem_tra_loai_tin = $this->M_tin_tuc_table->kiem_tra_loai_tin($id);

				if ($kiem_tra_loai_tin == false) //khong phai tin nhat ky
				{
					$var_chi_tiet_tin = $this->M_tin_tuc_table->chi_tiet_tin($id);

					if ($var_chi_tiet_tin['privated'] == 1) {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} else {
						$var_ds_bai_viet_moi_nhat = $this->M_tin_tuc_table->ds_bai_viet_moi_nhat($id);
						$CurrentPostTitle = $var_chi_tiet_tin['tieu_de'];

					


						$data['arr_album_detail'] = $this->M_album->album_chi_tiet($id);

						if ($var_chi_tiet_tin != '' && !empty($data['arr_album_detail']))
						{
							$data['title_name'] = $var_chi_tiet_tin['tieu_de'].' - 123 Năm';
							$data['var_chi_tiet_tin'] = $var_chi_tiet_tin;
							$data['var_ds_bai_viet_moi_nhat'] = $var_ds_bai_viet_moi_nhat;
							$data['description'] = $var_chi_tiet_tin['description'];
							$data['keyword'] = $var_chi_tiet_tin['keyword'];
							//RELATED POST
							$query = explode(' ',strtolower($var_chi_tiet_tin['tieu_de']));

							$index = $this->getIndex($id,'photo');
							$matchDocs = array();
							$docCount = count($index['docCount']);
							
							foreach($query as $qterm) {
							        $entry = $index['dictionary'][$qterm];
							        foreach($entry['postings'] as $docID => $posting) {
							                $matchDocs[$docID] += $posting['tf'] * log($docCount+1 / $entry['df']+1, 2);
							        }
							}
							// length normalise
							foreach($matchDocs as $docID => $score) {
							     $matchDocs[$docID] = ($score/$index['docCount'][$docID]);
							}
							arsort($matchDocs); // high to low
							$i= 0;
							$relatedId = array();
							foreach ($matchDocs as $idDoc=>$item) {
								$relatedId[$i] = $idDoc;
								if (++$i == 4) break;
							}
							if (!empty($relatedId)){
								$data['RelatedPost'] = $this->M_tin_tuc_table->RelatedPostLike('tin_tuc', $relatedId);
							} else {
								$data['RelatedPost'] = $this->M_tin_tuc_table->lastestPost('tin_tuc',$idDoc);
							}
							// NẾU CÓ KHẢO SÁT
							if (isset($var_chi_tiet_tin['issetSurvey']) && $var_chi_tiet_tin['issetSurvey'] == 1)
							{
								$survey = $this->M_tin_tuc_table->getSurvey($id);
								if (!empty($survey)) {
									$data['surveyCategory'] = $survey['category_id'];
									$data['dataSurvey'] = $survey;
									$data['dataSurveyAnswer'] = $this->M_tin_tuc_table->get_survey_answer($survey['id']);
								} else $data['error'] = 'Not survey founded';
								// CAPTCHA
								$this->load->helper('captcha');	
								$vals = array(
								        'img_path'      => './public/captcha/',
								        'img_url'       => base_url().'public/captcha/',
								        'font_path'     => './public/fonts/OTF/Crimson-Semibold.otf',
								        'img_width'     => 160,
								        'img_height'    => 50,
								        'expiration'    => 7200,
								        'word_length'   => 4,
								        'font_size'     => 32,
								        'img_id'        => 'Imageid',
								        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

								        // White background and border, black text and red grid
								        'colors'        => array(
								                'background' => array(255, 255, 255),
								                'border' => array(207, 206, 208),
								                'text' => array(0, 0, 0),
								                'grid' => array(255, 255, 255)
								        )
								);
								$cap = create_captcha($vals);
								$arr_cap = array(
									'word' => $cap['word'],
									'ip_address' => $this->input->ip_address(),
									'time' => $cap['time']
									);
								$this->session->set_userdata($arr_cap);
								$data['img_cap'] = $cap['image'];
								$data['path'] = 'tin_tuc/chi_tiet_tin_photo';
								$this->load->view('layout/chi_tiet_tin/photo/layoutPhotoSurvey', $data);
							} else { // khong co khao sat
								$data['path'] = 'tin_tuc/chi_tiet_tin_photo';
								$this->load->view('layout/chi_tiet_tin/photo/layoutPhoto', $data);
							}
						} else 	$data['err'] = 'Rất tiếc bài viết này không tồn tại!';
					} // Not privated

					
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}

		public function privated_chi_tiet_tin_photo()
		{
			if ($this->userid)
				$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('DET','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('DET','right');
			$id = $this->uri->segment(4);
			if (isset($id) && $id != '')
			{
				

					$var_chi_tiet_tin = $this->M_tin_tuc_table->chi_tiet_tin($id);
					$var_ds_bai_viet_moi_nhat = $this->M_tin_tuc_table->private_ds_bai_viet_moi_nhat($id);
					$CurrentPostTitle = $var_chi_tiet_tin['tieu_de'];
					$data['arr_album_detail'] = $this->M_album->album_chi_tiet($id);

					if ($var_chi_tiet_tin['privated'] == 1) {
						$table_name = 'tin_tuc';
						if ($this->M_privated->checkTags($this->userid,$id,$table_name) === true) {
							if ($var_chi_tiet_tin != '' && !empty($data['arr_album_detail']))
							{
								$data['title_name'] = $var_chi_tiet_tin['tieu_de'].' - 123 Năm';
								$data['var_chi_tiet_tin'] = $var_chi_tiet_tin;
								$data['var_ds_bai_viet_moi_nhat'] = $var_ds_bai_viet_moi_nhat;
								$data['description'] = $var_chi_tiet_tin['description'];
								$data['keyword'] = $var_chi_tiet_tin['keyword'];


								/*--Link Facebook---*/

								$data['fb_image'] = $var_chi_tiet_tin['hinh'];
								$data['fb_description'] = $var_chi_tiet_tin['description'];
								$data['fb_url'] = site_url('privated/photo/'.$var_chi_tiet_tin['url'].'/'.$var_chi_tiet_tin['id']);
								$data['fb_title'] = $var_chi_tiet_tin['tieu_de'];

								//RELATED POST
								$query = explode(' ',strtolower($var_chi_tiet_tin['tieu_de']));

								$index = $this->getIndex($id,'photo');
								$matchDocs = array();
								$docCount = count($index['docCount']);
								
								foreach($query as $qterm) {
								        $entry = $index['dictionary'][$qterm];
								        foreach($entry['postings'] as $docID => $posting) {
								                $matchDocs[$docID] += $posting['tf'] * log($docCount+1 / $entry['df']+1, 2);
								        }
								}
								// length normalise
								foreach($matchDocs as $docID => $score) {
								     $matchDocs[$docID] = ($score/$index['docCount'][$docID]);
								}
								arsort($matchDocs); // high to low
								$i= 0;
								$relatedId = array();
								foreach ($matchDocs as $idDoc=>$item) {
									$relatedId[$i] = $id;
									if (++$i == 4) break;
								}
								if (!empty($relatedId)){
									$data['RelatedPost'] = $this->M_tin_tuc_table->PrivateRelatedPostLike('tin_tuc', $relatedId);
								} else {
									$data['RelatedPost'] = $this->M_tin_tuc_table->PrivatelastestPost('tin_tuc',$idDoc);
								}
								// NẾU CÓ KHẢO SÁT
								if (isset($var_chi_tiet_tin['issetSurvey']) && $var_chi_tiet_tin['issetSurvey'] == 1)
								{
									$survey = $this->M_tin_tuc_table->getSurvey($id);
									if (!empty($survey)) {
										$data['surveyCategory'] = $survey['category_id'];
										$data['dataSurvey'] = $survey;
										$data['dataSurveyAnswer'] = $this->M_tin_tuc_table->get_survey_answer($survey['id']);
									} else $data['error'] = 'Not survey founded';
									// CAPTCHA
									$this->load->helper('captcha');	
									$vals = array(
									        'img_path'      => './public/captcha/',
									        'img_url'       => base_url().'public/captcha/',
									        'font_path'     => './public/fonts/OTF/Crimson-Semibold.otf',
									        'img_width'     => 160,
									        'img_height'    => 50,
									        'expiration'    => 7200,
									        'word_length'   => 4,
									        'font_size'     => 32,
									        'img_id'        => 'Imageid',
									        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

									        // White background and border, black text and red grid
									        'colors'        => array(
									                'background' => array(255, 255, 255),
									                'border' => array(207, 206, 208),
									                'text' => array(0, 0, 0),
									                'grid' => array(255, 255, 255)
									        )
									);
									$cap = create_captcha($vals);
									$arr_cap = array(
										'word' => $cap['word'],
										'ip_address' => $this->input->ip_address(),
										'time' => $cap['time']
										);
									$this->session->set_userdata($arr_cap);
									$data['img_cap'] = $cap['image'];
									$data['path'] = 'tin_tuc/chi_tiet_tin_photo';
									$this->load->view('layout/chi_tiet_tin/photo/layoutPhotoSurvey', $data);
								} else { // khong co khao sat
									$data['path'] = 'tin_tuc/chi_tiet_tin_photo';
									$this->load->view('layout/chi_tiet_tin/photo/layoutPhoto', $data);
								}
							} else 	$data['err'] = 'Rất tiếc bài viết này không tồn tại!';
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}

					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}


					
				


				//isset id
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		} // privated_photo_detail
		









		public function chi_tiet_tin()
		{
			if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('DET','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('DET','right');
			$id = $this->uri->segment(3);
			if (isset($id) && $id != '')
			{
				
					$var_chi_tiet_tin = $this->M_tin_tuc_table->chi_tiet_tin($id);
					$var_ds_bai_viet_moi_nhat = $this->M_tin_tuc_table->ds_bai_viet_moi_nhat($id);
					$CurrentPostTitle = $var_chi_tiet_tin['tieu_de'];

					if ($var_chi_tiet_tin['privated'] == 1) {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} else {
							//RELATED POST
						$query = explode(' ',strtolower($var_chi_tiet_tin['tieu_de']));

						$index = $this->getIndex($id,'post');
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
						foreach ($matchDocs as $idDoc=>$item) {
							$relatedId[$i] = $idDoc;
							if (++$i == 4) break;
						}
						if (!empty($relatedId)){
							$data['RelatedPost'] = $this->M_tin_tuc_table->RelatedPostLike('tin_tuc', $relatedId);
						} else {
							$data['RelatedPost'] = $this->M_tin_tuc_table->lastestPost('tin_tuc',$idDoc);
						}

						if ($var_chi_tiet_tin != '')
						{
							$data['title_name'] = $var_chi_tiet_tin['tieu_de'].' - 123 Năm';
							$data['var_chi_tiet_tin'] = $var_chi_tiet_tin;
							$data['var_ds_bai_viet_moi_nhat'] = $var_ds_bai_viet_moi_nhat;

							$data['description'] = $var_chi_tiet_tin['description'];
							$data['keyword'] = $var_chi_tiet_tin['keyword'];


							// NẾU CÓ KHẢO SÁT

							if ($var_chi_tiet_tin['issetSurvey'] == 1)
							{
								$survey = $this->M_tin_tuc_table->getSurvey($id);
								if (!empty($survey)) {

									$data['surveyCategory'] = $survey['category_id'];
									$data['dataSurvey'] = $survey;
									$data['dataSurveyAnswer'] = $this->M_tin_tuc_table->get_survey_answer($survey['id']);

								} else $data['error'] = 'Not survey founded';


								// CAPTCHA
								$this->load->helper('captcha');	
								$vals = array(
								        'img_path'      => './public/captcha/',
								        'img_url'       => base_url().'public/captcha/',
								        'font_path'     => './public/fonts/OTF/Crimson-Semibold.otf',
								        'img_width'     => 160,
								        'img_height'    => 50,
								        'expiration'    => 7200,
								        'word_length'   => 4,
								        'font_size'     => 32,
								        'img_id'        => 'Imageid',
								        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

								        // White background and border, black text and red grid
								        'colors'        => array(
								                'background' => array(255, 255, 255),
								                'border' => array(207, 206, 208),
								                'text' => array(0, 0, 0),
								                'grid' => array(255, 255, 255)
								        )
								);
								$cap = create_captcha($vals);
								$arr_cap = array(
									'word' => $cap['word'],
									'ip_address' => $this->input->ip_address(),
									'time' => $cap['time']
									);
								$this->session->set_userdata($arr_cap);
								$data['img_cap'] = $cap['image'];
								$data['path'] = 'tin_tuc/V_noi_dung_chi_tiet';
								$this->load->view('layout/chi_tiet_tin/layoutChitietSurvey', $data);
							} else { // khong co khao sat
								$data['path'] = 'tin_tuc/V_noi_dung_chi_tiet';
								$this->load->view('layout/chi_tiet_tin/layoutChitiet', $data);
							}
							

						} else
						{
							$data['err'] = 'Rất tiếc bài viết này không tồn tại!';
						}
					} // not privated
					
				
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			
		}
		// chi_tiet_tin


		public function privated_chi_tiet_tin()
		{
			if ($this->userid)
			$data['username'] = $this->M_nguoi_dung->getUserFromSession($this->userid);
			$data['bannerLeft'] = $this->M_tin_tuc_table->GetBanner('DET','left');
			$data['bannerRight'] = $this->M_tin_tuc_table->GetBanner('DET','right');
			$id = $this->uri->segment(3);
			if (isset($id) && $id != '')
			{
				
					$var_chi_tiet_tin = $this->M_tin_tuc_table->chi_tiet_tin($id);
					$var_ds_bai_viet_moi_nhat = $this->M_tin_tuc_table->private_ds_bai_viet_moi_nhat($id);
					$CurrentPostTitle = $var_chi_tiet_tin['tieu_de'];


					if ($var_chi_tiet_tin['privated'] == 1) {
						$table_name = 'tin_tuc';
					 if ($this->M_privated->checkTags($this->userid,$id,$table_name) === true) {
							//RELATED POST
					
						$query = explode(' ',strtolower($var_chi_tiet_tin['tieu_de']));

						$index = $this->getIndex($id,'post');
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
						foreach ($matchDocs as $idDoc=>$item) {
							$relatedId[$i] = $idDoc;
							if (++$i == 4) break;
						}
						if (!empty($relatedId)){
							$data['RelatedPost'] = $this->M_tin_tuc_table->PrivateRelatedPostLike('tin_tuc', $relatedId);
						} else {
							$data['RelatedPost'] = $this->M_tin_tuc_table->PrivatelastestPost('tin_tuc',$idDoc);
						}

						if ($var_chi_tiet_tin != '')
						{
							$data['title_name'] = $var_chi_tiet_tin['tieu_de'].' - 123 Năm';
							$data['var_chi_tiet_tin'] = $var_chi_tiet_tin;
							$data['var_ds_bai_viet_moi_nhat'] = $var_ds_bai_viet_moi_nhat;

							$data['description'] = $var_chi_tiet_tin['description'];
							$data['keyword'] = $var_chi_tiet_tin['keyword'];


							/*--Link Facebook---*/

							$data['fb_image'] = $var_chi_tiet_tin['hinh'];
							$data['fb_description'] = $var_chi_tiet_tin['description'];
							$data['fb_url'] = site_url('privated/'.$var_chi_tiet_tin['url'].'/'.$var_chi_tiet_tin['id']);
							$data['fb_title'] = $var_chi_tiet_tin['tieu_de'];

							// NẾU CÓ KHẢO SÁT

							if (isset($var_chi_tiet_tin['issetSurvey']) && $var_chi_tiet_tin['issetSurvey'] == 1)
							{

								$survey = $this->M_tin_tuc_table->getSurvey($id);

								if (!empty($survey)) {

									$data['surveyCategory'] = $survey['category_id'];
									$data['dataSurvey'] = $survey;
									$data['dataSurveyAnswer'] = $this->M_tin_tuc_table->get_survey_answer($survey['id']);

								} else $data['error'] = 'Not survey founded';


								// CAPTCHA
								$this->load->helper('captcha');	
								$vals = array(
								        'img_path'      => './public/captcha/',
								        'img_url'       => base_url().'public/captcha/',
								        'font_path'     => './public/fonts/OTF/Crimson-Semibold.otf',
								        'img_width'     => 160,
								        'img_height'    => 50,
								        'expiration'    => 7200,
								        'word_length'   => 4,
								        'font_size'     => 32,
								        'img_id'        => 'Imageid',
								        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

								        // White background and border, black text and red grid
								        'colors'        => array(
								                'background' => array(255, 255, 255),
								                'border' => array(207, 206, 208),
								                'text' => array(0, 0, 0),
								                'grid' => array(255, 255, 255)
								        )
								);
								$cap = create_captcha($vals);
								$arr_cap = array(
									'word' => $cap['word'],
									'ip_address' => $this->input->ip_address(),
									'time' => $cap['time']
									);
								$this->session->set_userdata($arr_cap);
								$data['img_cap'] = $cap['image'];
								$data['path'] = 'tin_tuc/V_noi_dung_chi_tiet';
								$this->load->view('layout/chi_tiet_tin/layoutChitietSurvey', $data);
							} else { // khong co khao sat
								$data['path'] = 'tin_tuc/V_noi_dung_chi_tiet';
								$this->load->view('layout/chi_tiet_tin/layoutChitiet', $data);
							}
							

							} else $data['err'] = 'Rất tiếc bài viết này không tồn tại!';
						
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
							//echo 'not userid';
						}
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}

		}
		//privated_chi_tiet_tin







		public function xoa_bai_viet()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					///private code
						$id = $_POST['ID'];
						if (isset($id) && $id != '')
						{
							$result = $this->M_tin_tuc_table->xoa_bai_viet($id);

							if($result)
								echo 'Xóa thành công.';
							else
								echo 'Đã xảy ra lỗi. Xóa không thành công.';
						}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function chinh_sua_bai_viet()
		{

			$id = $this->uri->segment(5);
			$data['loai_tin'] = $this->M_tin_tuc_table->ds_loai_tin();
			$data['survey_category'] = $this->M_tin_tuc_table->survey_category();
		
			$data['data'] = $this->M_tin_tuc_table->tin_theo_id($id);
			if ($data['data']['privated'] == 1) {
				$data['usertags'] = $this->M_tin_tuc_table->getUsertags('usertags',$id);
			}
			$data['title'] = $data['data']['tieu_de'].' - chỉnh sửa';
			$data['publishing'] = $data['data']['publishing'];
			if ($data['data']['issetSurvey'] == 1)
		 	{
		 		$data['dataSurvey'] = $this->M_tin_tuc_table->getSurvey($id);
		 		$data['dataSurveyAnswers'] = $this->M_tin_tuc_table->get_survey_answer($data['dataSurvey']['id']);
		 		$articleid = $id;
				$surveyid = $data['dataSurvey']['id'];
		 	}


			//code update phần TIN TỨC
			$kiem_tra_loai_tin = $this->M_tin_tuc_table->kiem_tra_loai_tin($id);

			if ($kiem_tra_loai_tin === true) // Danh cho BOSS + Nhat Ky
			{
				if ($this->userid)
				{
					if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
					{
						///private code
						$data['loai_tin'] = $this->M_tin_tuc_table->ds_loai_tin();

			
						$data['data'] = $this->M_tin_tuc_table->tin_theo_id($id);
						
						if (isset($_POST['edit']))
						{	
							$data['tieu_de'] = $_POST['tieu_de'];
							$data['icon'] = $_POST['icon'];
							$data['tom_tat'] = $_POST['tom_tat'];
							$overArr = explode(" ",$_POST['tom_tat']);
								if (count(explode(" ",$_POST['tom_tat'])) > 24) {
									for ($i = 24; $i < count(explode(" ",$_POST['tom_tat'])); $i++) {
										unset($overArr[$i]);
									}
								}
							if ($data['data']['top'] == 1) {
								if ($_POST['danh_muc'] != 'news_top1') {
									$dataTopUpdate['top'] = '0';
									$dataTopUpdate['loai_tin'] = 'news';
									$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
									$this->M_tin_tuc_table->updateToTop1();
								}
							}
							if ($_POST['danh_muc'] == 'news_top1')
							{
								$data['top'] = 1;
								$dataTop1['top'] = 0;
								$dataTop1['loai_tin'] = 'news';
								$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTop1);
							} 
							$data['overShort'] = implode(" ",$overArr)." ...";
							$data['noi_dung'] = $_POST['editor1'];
							$data['hinh'] = $data['data']['hinh'];
							$data['loai_tin'] = $_POST['danh_muc'];
							$data['url'] = $_POST['url'];
							$data['user'] = $this->session->userdata('id');
							$data['created'] = $data['data']['created'];
							$data['keyword'] = $_POST['keyword'];
							$data['description'] = $_POST['description'];
							
							$hinh = $_FILES['hinh'];
							
							if ($hinh['name'] != '')  //-------------------> Thay doi hinh moi
							{	
								if ($hinh['size'] < 2097152)
								{
									$data['hinh'] = time().'-'.$hinh['name'];
									move_uploaded_file($hinh['tmp_name'], './public/hinh_tieu_de/'.$data['hinh']);
									$this->load->model('quan_tri/M_tin_tuc');

									$this->M_tin_tuc->setData($data);
									$result = $this->M_tin_tuc_table->chinh_sua_bai_viet($id, $this->M_tin_tuc->getData());
									if ($result)
										$data['feedback'] = 'Đã hoàn thành chỉnh sửa bài viết.';
								}
								else
									$data['err'] = 'Kích thước ảnh quá lớn!';
							}
							else                 //-------------------> Hinh khong thay doi
							{
									$this->load->model('quan_tri/M_tin_tuc');

									$this->M_tin_tuc->setData($data);
									$result = $this->M_tin_tuc_table->chinh_sua_bai_viet($id, $this->M_tin_tuc->getData());
									if ($result)
										$data['feedback'] = 'Đã hoàn thành chỉnh sửa bài viết.';
							}
						}

						//End /code update phần TIN TỨC
						
						$data['path'] = 'quan_tri/V_chinh_sua_bai_viet';
						$data['script'] = 'layout/ajax/searchUserUpdate';
						$this->load->view('layout/quan_tri/layoutEditPost', $data);
					}	else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else { 

			// tin tuc thuan
				if (isset($_POST['edit']))
				{

					// LỰA CHỌN UPDATE KHẢO SÁT
					if ($_POST['option_survey_update'] == 1)
					{
						if($_POST['survey_select'] != '0')
						{
						if ($data['data']['issetSurvey'] == 0) {
						 //CHUA CO KHAO SAT VÀ THEM
							$this->addSurvey($id);
							$data['issetSurvey'] = 1;

						} else { // ĐÃ TỒN TẠI KHẢO SÁT VÀ UPDATE
							if ($_POST['answer'][0] != '')
							{
								if ($_POST['question'] != '') // PHẦN CHUNG CHO TẤT CẢ CÁC DẠNG
								{
									$data['issetSurvey'] =1;
									//xoa phan SURVEY_ANSWER cũ
									$delete = $this->M_tin_tuc_table->deleteSurveyAnswers($articleid,$surveyid);
									//update phan SURVEY_QUESTION
									$dataSurveyEdit['question'] = $_POST['question'];
									$dataSurveyEdit['category_id'] = $_POST['survey_select'];
									$dataSurveyEdit['updated'] = date("j\/m\/Y\, h:i:s a");
									$dataSurveyEdit['user'] = $this->session->userdata('id');
									$update = $this->M_tin_tuc_table->updateSurvey($surveyid,$dataSurveyEdit);

									//insert phan SURVEY_ANSWERS mới
									$dataInserSurveyAnswers['articleid'] = $articleid;
									$dataInserSurveyAnswers['surveyid'] = $surveyid;
									$dataInserSurveyAnswers['category_id'] = $_POST['survey_select'];

									foreach ($_POST['answer'] as $key=>$val)
									{
										if ($val != '')
										{
											$dataInserSurveyAnswers['answers'] = $val;
											$dataInserSurveyAnswers['result'] = $_POST['result'][$key];
											$insert = $this->M_tin_tuc_table->insertSurveyAnswers($dataInserSurveyAnswers);
										}
									}
									if ($insert) {

										$data['successSurvey'] = "Đã update khảo sát";
									}
								} else $data['errSurvey'] = 'Vui lòng nhập câu hỏi ??';
							} else $data['errSurvey'] = 'Vui lòng nhập ít nhất 1 câu trả lời!';
							}
						} else { //SELECT = 0 (Khong)
							if ($data['data']['issetSurvey'] == 1)
							{
								 $data['issetSurvey'] = 0;
								 $this->M_tin_tuc_table->deleteSurvey($id);
								 $this->M_tin_tuc_table->deleteSurveyAnswers($id,$surveyid);
							}
						}
					} // END UPDATE KHẢO SÁT
					
					//usertags
					if ($data['data']['privated'] == 1) {
						if ($_POST['mode'] == 'public') {
							$data['privated'] = 0;
							$this->M_tin_tuc_table->deleteUsertags('usertags',$id);
						}
					}
					//~usertags

					//isset mode privated
					if ($_POST['mode'] == 'privated') {
						//delete usertags old
						$data['privated'] = 1;
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

					$data['tieu_de'] = $_POST['tieu_de'];
					$data['icon'] = $_POST['icon'];
					$data['tom_tat'] = $_POST['tom_tat'];
					$overArr = explode(" ",$_POST['tom_tat']);
					if (count(explode(" ",$_POST['tom_tat'])) > 24) {
						for ($i = 24; $i < count(explode(" ",$_POST['tom_tat'])); $i++) {
							unset($overArr[$i]);
						}
					}
					$data['overShort'] = implode(" ",$overArr)." ...";
					$data['noi_dung'] = $_POST['editor1'];
					$data['hinh'] = $data['data']['hinh'];
					if ($_POST['danh_muc'] == 'news_top1')
					{
						$data['top'] = 1;
						$dataTopUpdate['top'] = '0';
						$dataTopUpdate['loai_tin'] = 'news';
						$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
					} 
					if ($data['data']['top'] == 1) {
						if ($_POST['danh_muc'] != 'news_top1') {
							$dataTopUpdate['top'] = '0';
							$dataTopUpdate['loai_tin'] = 'news';
							$this->M_tin_tuc_table->updateTop1('tin_tuc',$dataTopUpdate);
							$this->M_tin_tuc_table->updateToTop1();
						}
					}
					$data['loai_tin'] = $_POST['danh_muc'];
					$data['url'] = $_POST['url'];
					$data['user'] = $this->session->userdata('id');
					$data['created'] = $data['data']['created'];
					$data['keyword'] = $_POST['keyword'];
					$data['description'] = $_POST['description'];
					if (isset($data['issetSurvey']))
						$data['issetSurvey'] = $data['issetSurvey'];
					else $data['issetSurvey'] = $data['data']['issetSurvey'];
					$hinh = $_FILES['hinh'];
					
					if ($hinh['name'] != '')  //-------------------> Thay doi hinh moi
					{	
						if ($hinh['size'] < 2097152)
						{
							$data['hinh'] = time().'-'.$hinh['name'];
							move_uploaded_file($hinh['tmp_name'], './public/hinh_tieu_de/'.$data['hinh']);
							$this->load->model('quan_tri/M_tin_tuc');

							$this->M_tin_tuc->setData($data);
							$result = $this->M_tin_tuc_table->chinh_sua_bai_viet($id, $this->M_tin_tuc->getData());
							if ($result)
								$data['feedback'] = 'Đã hoàn thành chỉnh sửa bài viết.';
						}
						else
							$data['err'] = 'Kích thước ảnh quá lớn!';
					}
					else                 //-------------------> Hinh khong thay doi
					{
							$this->load->model('quan_tri/M_tin_tuc');

							$this->M_tin_tuc->setData($data);
							$result = $this->M_tin_tuc_table->chinh_sua_bai_viet($id, $this->M_tin_tuc->getData());
							if ($result)
								$data['feedback'] = 'Đã hoàn thành chỉnh sửa bài viết.';
					}	
				}// end button EDIT
				$data['path'] = 'quan_tri/V_chinh_sua_bai_viet';
				$data['script'] = 'layout/ajax/searchUserUpdate';
				$this->load->view('layout/quan_tri/layoutEditPost', $data);
			}

			
		}
		public function show_hide_article_ajax() 
		{
			$id = $_POST['id'];
			$typename = $_POST['typename'];
			$tablename = $_POST['tbname'];
			if ($id && $typename && $tablename) {
				if ($tablename == 'tin_tuc') {
						if ($this->M_tin_tuc_table->checkIssetCategoryId($typename,$id) == 1) {
						$data['publishing'] = 0;
						if ($this->M_tin_tuc_table->update($tablename,$id,$data)) {
							echo '1';
						} else echo 'updateFail';
					} else echo 'notpost';
				} else {
					if ($this->M_tin_tuc_table->checkArticleShowHideID($tablename,$id) == 1) {
						$data['publishing'] = 0;
						if ($this->M_tin_tuc_table->update($tablename,$id,$data)) {
							echo '1';
						}
					} else echo 'notpost';
				}
			} else echo 'notid';
		}
		public function ds_tin_loai_tin()
		{
			$ma_loai = $this->uri->segment(3);

			$data['title'] = 'Categories';
			$ds_loai_tin_nhat_ky = $this->M_tin_tuc_table->ds_loai_tin_nhat_ky();
			if (isset($ds_loai_tin_nhat_ky) && !empty($ds_loai_tin_nhat_ky))
			{
				$arr_loai_tin_nk = array();
				foreach ($ds_loai_tin_nhat_ky as $item)
				{
					$arr_loai_tin_nk[] = $item['ma_loai'];
				}	
			}
			if (in_array($ma_loai,$arr_loai_tin_nk)) // THUOC LOAI TIN NHAT KY
			{
				$data['loai_tin'] = $this->M_tin_tuc_table->ds_loai_tin();
				if ($this->userid)
				{
					if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
					{
						if ($this->M_nguoi_dung->checkBoss($this->userid) != false) {
						//ADM && BOSS
						///private code
						$data['loai_tin'] = $this->M_tin_tuc_table->ten_loai_tin($ma_loai);
						$this->load->library('pagination');
				        $config['base_url'] = base_url().'quan-tri/danh-muc-tin-tuc/'.$ma_loai;
				        $config['total_rows'] = $data['total_rows'] = $this->M_tin_tuc_table->tong_so_tin_loai_tin($ma_loai);
				        $config['per_page'] = 20;
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
				        $data['ds_tin_loai_tin']=$this->M_tin_tuc_table->ds_tin_loai_tin_phan_trang($config['per_page'],$start,$ma_loai);
				 		$data['path'] = 'quan_tri/V_ds_tin_loai_tin';
				 		$data['script'] = 'layout/ajax/show_hide_article';
						$this->load->view('layout/quan_tri/layoutAdmin', $data);
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						}
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				}	else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else // KHONG THUOC LOAI TIN NHAT KY
			{
				if ($this->userid)
				{
					if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
					{
						//ADM && BOSS
						///private code
						$data['loai_tin'] = $this->M_tin_tuc_table->ten_loai_tin($ma_loai);
						$this->load->library('pagination');
				        $config['base_url'] = base_url().'quan-tri/danh-muc-tin-tuc/'.$ma_loai;
				        $config['total_rows'] = $data['total_rows'] = $this->M_tin_tuc_table->tong_so_tin_loai_tin($ma_loai);
				        $config['per_page'] = 20;
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
				        $data['ds_tin_loai_tin']=$this->M_tin_tuc_table->ds_tin_loai_tin_phan_trang($config['per_page'],$start,$ma_loai);
				 		$data['path'] = 'quan_tri/V_ds_tin_loai_tin';
				 		$data['script'] = 'layout/ajax/show_hide_article';
						$this->load->view('layout/quan_tri/layoutAdmin', $data);

					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				}	else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			}
			
		}
		public function publishPost()
		{
			$id = $_POST['idPost'];
			$tablename = $_POST['tablename'];
			$return = array();
			if ($id != '' && $tablename != '') {
				$checkPostId = $this->M_tin_tuc_table->checkIssetPostID($id, $tablename);

				if ($checkPostId != false) {
					$dataPublish['publishing'] =1;
					if ($this->M_tin_tuc_table->update($tablename,$id,$dataPublish)) {
						$return['successUpdate'] = true;

						if ($checkPostId['privated'] == 1) {

							
							$url = array(
								'detail'=>'http://123nam.com/privated/'.$checkPostId['url'].'/'.$checkPostId['id'].'.html',
								'photo'=>'http://123nam.com/privated/photo/'.$checkPostId['url'].'/'.$checkPostId['id'].'.html',
								'emegazine'=>'http://123nam.com/privated/emagazine/'.$checkPostId['url'].'/'.$checkPostId['id'].'.html',
								'album'=>'http://123nam.com/privated/album/'.$checkPostId['url'].'/'.$checkPostId['id'].'.html'
							);

							$emailResult = $this->M_tin_tuc_table->getEmailFromUSertags($id);
							$emailErrors = array();

							if ($tablename == 'tin_tuc') 
								$link = $url[$checkPostId['typenews']];
 							elseif($tablename == 'album')
 								$link = $url['album'];

							$title = 'Private: '.$checkPostId['tieu_de'];

							$mFrom = 'lover@123nam.com';
							$mPass = 'phamluc999';
							foreach ($emailResult as $mail) {
							$message = '<div><img title="123nam.com" alt="123nam.com" src='.base_url('public/icon/ava.png').'></div>';
							$message .= '<h3>Xin chào '.$mail['firstName'].'</h3>';
							$message .= '<h2>123NAM vừa đăng một bài viết mới</h2>';
							$message .= '<h3><a style="text-decoration: none" href="'.$link.'">'.$checkPostId['tieu_de'].'</a></h3>';
							$message .= '<p>'.$checkPostId['created'].'</p>';
							$message .= '<div style="min-height:50px; border-left:solid 5px #04AF1C;padding-top: 20px; padding-bottom:20px; padding-left: 20px; margin-left: 40px"><a href="'.$link.'">'.$link.'</a></div>';
							if ($this->sendEmail($message,$mFrom,$mPass,$mail['email'],$title) == 1) {
									$return['successSendMail'] = true;
								} else {
									$emailErrors[] = $mail['email'];
									$return['successSendMail'] = false;
								}
							}
						} //private
					} else $return['notupdate'] = true;
				} else $return['notpost'] = true;
			} else $return['notid'] = true;

			//var_dump($return);
			echo json_encode($return);
		}
		public function xoa_bai_cho_phe_duyet_ajax()
		{
			if (isset($_POST['dataid']) && isset($_POST['datatable'])) {
				$id = $_POST['dataid'];
				$tablename = $_POST['datatable'];
			}
			if ($id && $tablename) {
				if ($this->M_tin_tuc_table->checkIssetPostID($id,$tablename) != false) {
					if ($this->M_tin_tuc_table->deletePostPublishing($id, $tablename)) {
						echo '1';
					} else echo '0';
				} else echo '0';
			} else return false;//end if ID
		}
		
		public function  chi_tiet_tin_cho_phe_duyet_photo()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$id = $this->uri->segment(5);
					$tablename = $_GET['typename'];
					if (isset($id) && !empty($id) && isset($tablename) && !empty($tablename))
					{
						if ($this->M_tin_tuc_table->checkIssetPostTableAndID($tablename,$id) != false)
						{
							$data['titlePost'] = $this->M_tin_tuc_table->PhotoPostDetail('photo',$tablename,$id);
							if ($this->M_album->album_chi_tiet($id) != false)
							{
								$data['title'] = 'Chờ phê duyệt - '.$data['titlePost']['tieu_de'];
								$data['user'] = $this->M_nguoi_dung->getUserFromSession($data['titlePost']['user']);
								$data['data_image'] = $this->M_album->album_chi_tiet($id);
								$data['path'] = 'quan_tri/V_chi_tiet_tin_cho_phe_duyet_photo';
								$this->load->view('layout/quan_tri/layoutAdmin', $data);
							} else {
								$data['title'] = 'Errors';
								$this->load->view('errors/index',$data);
							} // end check false
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						} // end check false
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} // if ID
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} // if Check Admin
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} // if userID
		}
		public function chi_tiet_tin_cho_phe_duyet()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$id = $this->uri->segment(4);
					if (isset($id) && $id != '')
					{
						$tin_cho_phe_duyet = $this->M_tin_tuc_table->chi_tiet_tin_cho_phe_duyet($id);
						if (!empty($tin_cho_phe_duyet) && $tin_cho_phe_duyet != false)
						{
							$data['title'] = $tin_cho_phe_duyet['tieu_de'].' - Chờ phê duyệt';
							$data['user'] = $this->M_nguoi_dung->checkAdmin($this->userid);
							$data['tin_cho_phe_duyet'] = $tin_cho_phe_duyet;
							$data['path'] = 'quan_tri/V_chi_tiet_tin_cho_phe_duyet';
							$this->load->view('layout/quan_tri/layoutAdmin', $data);
						} else {
							$data['title'] = 'Errors';
							$this->load->view('errors/index',$data);
						} // end Check Isset This Article
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					} // check ID
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				} // end CheckAdmin
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} // end if Userid
		}
		public function album_cho_phe_duyet()
		{
			if ($this->userid) {
			if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
			if ($this->M_nguoi_dung->checkBoss($this->userid) != false) {
				$data['title'] = 'Album chờ phê duyệt - 123nam';
				$this->load->library('pagination');
		        $config['base_url'] = base_url().'quan-tri/album-cho-phe-duyet';
		        $config['total_rows'] = $this->M_tin_tuc_table->tong_so_cho_phe_duyet('album');
		        $config['per_page'] = 20;
		        $config['uri_segment'] = 3;
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
		        $config['cur_tag_open'] = '<li class="active"><a href="'.site_url('quan-tri/album-cho-phe-duyet').'">';
		        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		        $config['num_tag_open'] = '<li>';
		        $config['num_tag_close'] = '</li>';
		        $this->pagination->initialize($config);
		        $trang=$this->uri->segment(3)?$this->uri->segment(3):1;
		        $start=($trang-1)*$config['per_page'];
		        $data['link_page']=$this->pagination->create_links();
		        $data['data_arr']=$this->M_tin_tuc_table->album_cho_phe_duyet_phan_trang($config['per_page'],$start, 'album');


				$data['path'] = 'quan_tri/V_al_cho_phe_duyet';
				$this->load->view('layout/quan_tri/layoutAdmin', $data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} // end Boss
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} // end Admin
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} // end ID
		}
		public function cho_phe_duyet()
		{
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false) {
					if ($this->M_nguoi_dung->checkBoss($this->userid) != false) {
						$data['title'] = 'Danh sách bài viết chờ phê duyệt';
						//$data['loai_tin'] = $this->M_tin_tuc_table->ten_loai_tin($ma_loai);
						$this->load->library('pagination');
				        $config['base_url'] = base_url().'quan-tri/cho-phe-duyet';
				        $config['total_rows'] = $this->M_tin_tuc_table->tong_so_cho_phe_duyet('tin_tuc');
				        $config['per_page'] = 20;
				        $config['uri_segment'] = 3;
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
				        $config['cur_tag_open'] = '<li class="active"><a href="'.site_url('quan-tri/cho-phe-duyet').'">';
				        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
				        $config['num_tag_open'] = '<li>';
				        $config['num_tag_close'] = '</li>';
				        $this->pagination->initialize($config);
				        $trang=$this->uri->segment(3)?$this->uri->segment(3):1;
				        $start=($trang-1)*$config['per_page'];
				        $data['link_page']=$this->pagination->create_links();
				        $data['ds_cho_phe_duyet']=$this->M_tin_tuc_table->ds_cho_phe_duyet_phan_trang($config['per_page'],$start,'tin_tuc');
				        $data['path'] = 'quan_tri/V_cho_phe_duyet';
						$this->load->view('layout/quan_tri/layoutAdmin', $data);
					} else {
						$data['title'] = 'Errors';
						$this->load->view('errors/index',$data);
					}
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			} //end if Userid
			
		}
		public function xuat_ban()
		{
				
				//$this->load->model('quan_tri/M_tin_tuc_table');
			$data['title'] = 'Publish Center - 123nam';
			$data['loai_tin'] = $this->M_tin_tuc_table->ds_loai_tin();
			if ($this->userid)
			{
				if ($this->M_nguoi_dung->checkAdmin($this->userid) != false)
				{
					$data['survey_category'] = $this->M_tin_tuc_table->survey_category();
					if ($this->session->userdata('boss') ==1)
						$data['loai_tin_nhat_ky'] = $this->M_tin_tuc_table->ds_loai_tin_nhat_ky();
					if (isset($_POST['xuatban']))
					{
						echo $_POST['mode'];
						if ($_POST['mode'] == 'privated')
							$data['privated'] = 1;

						//INSERT INTO DATABASE BAI VIET
						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$data['publishing'] = 0;
						$data['tieu_de'] = $_POST['tieu_de'];
						$data['icon'] = $_POST['icon'];
						$data['typenews'] = 'detail';
						$data['tom_tat'] = $_POST['tom_tat'];

						$overArr = explode(" ",$_POST['tom_tat']);
								if (count(explode(" ",$_POST['tom_tat'])) > 24) {
									for ($i = 24; $i < count(explode(" ",$_POST['tom_tat'])); $i++) {
										unset($overArr[$i]);
									}
								}
						$data['overShort'] = implode(" ",$overArr)." ...";
						$data['loai_tin'] = $_POST['danh_muc'];
						$data['url'] = $_POST['url'];
						$data['noi_dung'] = $_POST['editor1'];
						$data['keyword'] = $_POST['keyword'];
						$data['description'] = $_POST['description'];
						$file = $_FILES['hinh'];
						$data['hinh'] = time().'-'.$file['name'];
						if ($file['size'] < 2097152)
						{
							move_uploaded_file($file['tmp_name'], './public/hinh_tieu_de/'.$data['hinh']);
							$this->load->model('quan_tri/M_tin_tuc');
							$data['file_size'] = $file['size'];
							// NEU CO KHAO SAT
							if (isset($_POST['survey_select']) && $_POST['survey_select'] != '0')
							{
								$data['issetSurvey'] =1; // Co khao sat
							}
							$this->M_tin_tuc->setData($data);
							$resultArticled = $this->M_tin_tuc_table->them_tin($this->M_tin_tuc->getData());
							$maxIDArticled = $this->M_tin_tuc_table-> maxID('tin_tuc');


							// usertags
							if ($_POST['mode'] == 'privated') {
								$userArr = $_POST['userArr'];
								$userArr = explode(',', $userArr);
								if (!empty($userArr)) {
									$dataTag['postid'] = $maxIDArticled['id'];
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


						} else $data['err'] = 'Kích thước ảnh quá lớn!';
						//END INSERT BAI VIET	
						if ($resultArticled) // neu xuat ban bai viet thanh cong
						{
							if (isset($_POST['survey_select']) && $_POST['survey_select'] != '0')
							{
								
								$maxArticledid = $maxIDArticled['id'];
								$this->addSurvey($maxArticledid);
							//DANG TRAC NGHIEM && NHIEU ITEM
								
								if (in_array(0,$kiemtraAnswers))
								{
									$data['err'] = 'Chưa chèn được câu trả lời khảo sát!';
								} else $data['feedback'] = "Hoàn thành khảo sát";
							}

							$data['feedback'] = "Đã xuất bản thành công một bài viết mới.";
						} //end $resultArticled
						
					} //button "Xuat ban" click
				$data['path'] = 'quan_tri/V_viet_bai';
				$data['script'] = 'layout/ajax/searchUser';
				$this->load->view('layout/quan_tri/layoutAdmin', $data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
				
		}
		function addSurvey($articleid)
		{
			if ($_POST['question'] != '')
			{
				if ($_POST['answer'][0] !='')
				{
					$dataServey['articleid'] = $articleid;
					$dataServey['question'] = $_POST['question'];
					$dataServey['category_id'] = $_POST['survey_select'];
					$dataServey['created'] = date("j\/m\/Y\, h:i:s a");
					$dataServey['updated'] = date("j\/m\/Y\, h:i:s a");
					$dataServey['user'] = $this->userid;
					$surveyInsert = $this->M_tin_tuc_table->SurveyInsert('survey',$dataServey);
					if (isset($surveyInsert))
					{
						//SURVEYID = MAX(IX) IN SURVEY TABLE
						$maxid = $this->M_tin_tuc_table->maxID('survey');
						$dataSurveyAnswer['surveyid'] = $maxid['id'];
						$dataSurveyAnswer['articleid'] = $dataServey['articleid'];
						$dataSurveyAnswer['category_id'] = $dataServey['category_id'];
						$kiemtraAnswers = array();
						foreach ($_POST['answer'] as $key=>$val)
						{
							if ($val != '')
							{
								$dataSurveyAnswer['answers'] = $val;
								$resultSurvey = $this->M_tin_tuc_table->SurveyInsert('survey_answers',$dataSurveyAnswer);
								if ($resultSurvey)
									$kiemtraAnswers[$key] = 1;
								else $kiemtraAnswers[$key] = 0;

							} else $data['errors'] = 'Vui lòng nhập ít nhất một câu trả lời!';
						}
						//`id`, `articleid`, `surveyid`, `answerid`, `results`

						$dataResult['articleid'] = $articleid;
						$dataResult['surveyid'] = $dataSurveyAnswer['surveyid'];
						$answerid = $this->M_tin_tuc_table->get_survey_answer($dataSurveyAnswer['surveyid']);
						foreach ($answerid as $id)
						{
							$dataResult['answerid'] = $id['id'];
							$this->M_tin_tuc_table->insertAnswerResult($dataResult);
						}
					} else $data['errors'] = 'Chưa chèn được khảo sát!';
					//code insert into database in here!
					//survey table: `id`, `articleid`, `question`, `category_id`, `created`, `updated`, `user

					//survey answer table: `id`, `articleid`, `surveyid`, `category_id`, `answers`

				} else $data['errors'] = 'Vui lòng nhập ít nhất một câu trả lời!';
				
			} else $data['errors'] = 'Vui lòng nhập câu hỏi!';

		} //end funtion addSurvey
		public function sendEmail($message,$mFrom,$mPass,$nTo,$title)
		{
			$nFrom = "123NAM.COM";    //mail duoc gui tu dau, thuong de ten cong ty ban
		    //$mFrom = 'account@123nam.com';  //dia chi email cua ban 
		    //$mPass = 'phamluc999';       //mat khau email cua ban
		    //$nTo = $email; //Ten nguoi nhan
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->CharSet  = "utf-8";
			$mail->SMTPDebug  = 0;
			$mail->SMTPAuth   = true;    // enable SMTP authentication
		    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
		    $mail->Host       = "mail.123nam.com";    // sever gui mail.
		    $mail->Port       = 465;         // cong gui mail de nguyen
		    // xong phan cau hinh bat dau phan gui mail
		    $mail->Username   = $mFrom;  // khai bao dia chi email
		    $mail->Password   = $mPass;              // khai bao mat khau
		    $mail->SetFrom($mFrom, $nFrom);
		    $mail->AddReplyTo('account@123nam.com', '123nam.com'); //khi nguoi dung phan hoi se duoc gui den email nay
		    $mail->Subject    = $title;// tieu de email 
		    $mail->MsgHTML($message);// noi dung chinh cua mail se nam o day.
		    $mail->AddAddress($nTo);
			if(!$mail->Send()) {
		      return 0;
		    } else {
		       return 1;
		    }
		} //END EMAIL

	} // END CLASS
?>