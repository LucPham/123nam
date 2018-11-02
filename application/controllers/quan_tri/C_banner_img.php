<?php
	class C_banner_img extends CI_Controller
	{
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('quan_tri/M_banner');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			
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
			if ($this->userid) {

			$data['title'] = 'Banner Update System - 123nam';	
			$layout = $this->uri->segment(4);
			if (!$layout) {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
			if (isset($_POST['btn_banner_update']) && !empty($_POST['btn_banner_update']))
			{
				$action = $_POST['action'];
				if ($action == 1)
				{
					// ----------- UPDATE BANNER
					foreach ($_FILES['banner_upload']['tmp_name'] as $key=>$val)
				{
					if (isset($_FILES['banner_upload']['tmp_name']) && $_POST['sel_location'] != '')
					{
						if ($_FILES['banner_upload']['name'][$key] != '') // co hinh moi
						{
							$filetype = array('image/png','image/jpg','image/jpeg','image/gif');
							if(in_array($_FILES['banner_upload']['type'][$key],$filetype))
							{
								if ($_FILES['banner_upload']['size'][$key] < 2000000)
								{
									if ($_POST['sel_layout'][$key] != $layout) //layout moi
									{
										$id = $_POST['id'][$key];
										$data1['imgName'] = time().'-'.$_FILES['banner_upload']['name'][$key];
										$data1['link'] = $_POST['link'][$key];
										$data1['size'] = $_POST['size'][$key];
										$data1['width'] = $_POST['width'][$key];
										$data1['height'] = $_POST['height'][$key];
										$data1['layout'] = $_POST['sel_layout'][$key];
										$data1['location'] = $_POST['sel_location'][$key];
										$data1['hide_show'] = $_POST['sel_hideShow'][$key];
										$data1['usingNow'] = 1;
										
										move_uploaded_file($_FILES['banner_upload']['tmp_name'][$key],'./public/hinh/banner/'.$data1['imgName']);
										$data3['usingNow'] = 0;
										$this->M_banner->update_layout_duoc_chuyen_den($data1['layout'],$data1['location'],$data3);
										$update = $this->M_banner->update_banner_id($id,$data1);
										if ($update)
											$data['success'] = "<span class='glyphicon glyphicon-ok'></span> Đã lưu thay đổi.";
										
									} else { //layout khong thay doi
										if ($_POST['sel_location'][0] != $_POST['sel_location'][1])
										{
											$id = $_POST['id'][$key];
											$data2['imgName'] = time().'-'.$_FILES['banner_upload']['name'][$key];
											$data2['link'] = $_POST['link'][$key];
											$data2['size'] = $_POST['size'][$key];
											$data2['width'] = $_POST['width'][$key];
											$data2['height'] = $_POST['height'][$key];
											$data2['location'] = $_POST['sel_location'][$key];
											$data2['hide_show'] = $_POST['sel_hideShow'][$key];
											$data2['usingNow'] = 1;
											move_uploaded_file($_FILES['banner_upload']['tmp_name'][$key],'./public/hinh/banner/'.$data2['imgName']);
											$update = $this->M_banner->update_banner_id($id,$data2);
											if ($update)
												$data['success'] = "<span class='glyphicon glyphicon-ok'></span> Đã lưu thay đổi.";
										} 
										else {
											$data['err'] = "<span class='glyphicon glyphicon-warning-sign'></span> Không thể tồn tại 2 vị trí banner trùng nhau.";
										}
									}
								} else { //size errors
									$data['err'] = '<span class="glyphicon glyphicon-warning-sign"></span> Kích thước file không quá 2MB.';
								}
							} else { //type errors
								$data['err'] = '<span class="glyphicon glyphicon-warning-sign"></span> Vui lòng chọn 1 file hình.';
							}
					} else { //khong co hinh moi
						if ($_POST['sel_layout'][$key] != $layout) //layout moi
						{
							$id = $_POST['id'][$key];
							$data5['link'] = $_POST['link'][$key];
							$data5['layout'] = $_POST['sel_layout'][$key];
							$data5['location'] = $_POST['sel_location'][$key];
							$data5['hide_show'] = $_POST['sel_hideShow'][$key];
							$data5['usingNow'] = 1;
							$data3['usingNow'] = 0;
							$this->M_banner->update_layout_duoc_chuyen_den($data5['layout'],$data5['location'],$data3);
							$update = $this->M_banner->update_banner_id($id,$data5);
							if ($update)
								$data['success'] = "<span class='glyphicon glyphicon-ok'></span> Đã lưu thay đổi.";
						} // end IF
							else { //layout khong thay doi
							if ($_POST['sel_location'][0] != $_POST['sel_location'][1])
							{
								$id = $_POST['id'][$key];
								$data4['link'] = $_POST['link'][$key];
								$data4['location'] = $_POST['sel_location'][$key];
								$data4['hide_show'] = $_POST['sel_hideShow'][$key];
								$data4['usingNow'] = 1;
								$update = $this->M_banner->update_banner_id($id,$data4);
								if ($update)
									$data['success'] = "<span class='glyphicon glyphicon-ok'></span> Đã lưu thay đổi.";
							} 
							else {
								$data['err'] = "<span class='glyphicon glyphicon-warning-sign'></span> Không thể tồn tại 2 vị trí banner trùng nhau.";
							}
						}	
					} // end else hinh khong thay doi;
					}
				} //end Foreach
				} else {
					// ----------- INSERT BANNER
					foreach ($_FILES['banner_upload']['tmp_name'] as $key=>$val)
					{
						if ($_FILES['banner_upload']['name'][$key] != '')
						{
							$filetype = array('image/png', 'image/jpeg','image/jpg','image/gif');
							//echo $_FILES['banner_upload']['type'][$key].'<br/>';
							if (in_array($_FILES['banner_upload']['type'][$key],$filetype))
							{
								if ($_FILES['banner_upload']['size'][$key] < 2000000)
								{
									//echo $_POST['sel_location'][$key].'<br/>';
									if ($_POST['sel_location'.$key] != '0')
									{
										if ($_POST['sel_location0'] != $_POST['sel_location1'])
										{
											if ($_POST['sel_hideShow'][$key] != '2')
											{
												$dataInsert['imgName'] = time().'-'.$_FILES['banner_upload']['name'][$key];
												$dataInsert['link'] = $_POST['link'][$key];
												$dataInsert['size'] = $_POST['size'][$key];
												$dataInsert['width'] = $_POST['width'][$key];
												$dataInsert['height'] = $_POST['height'][$key];
												$dataInsert['layout'] = $_POST['sel_layout'][$key];
												$dataInsert['location'] = $_POST['sel_location'.$key];
												$dataInsert['hide_show'] = $_POST['sel_hideShow'][$key];
												$dataInsert['usingNow'] = $_POST['sel_hideShow'][$key];
												move_uploaded_file($_FILES['banner_upload']['tmp_name'][$key],'./public/hinh/banner/'.$dataInsert['imgName']);

												$insert = $this->M_banner->insert($dataInsert);
												if ($insert)
													$data['success'] = 'Đã thêm vào banner thành công!';
											} else $data['err'] = 'Cần chọn ẩn/hiện cho banner này!';
										} else $data['err'] = 'Cần chọn 2 vị trí khác nhau!';
									} else { $data['err'] = 'Chọn vị trí!';}
								} else $data['err'] = "Kích thước file không vượt quá 2Mb!";
							} else $data['err'] = "Vui lòng chọn đúng file hình!";
						} else $data['err'] = "Chọn hình để tải lên!";
					} // end foreach
				}
				}
				$data['layout'] = $this->M_banner->GetLayout();
				$data['arr_banner'] = $this->M_banner->Ds_banner_trong_layout($layout);
				$data['path'] = 'quan_tri/V_banner_update';
				$this->load->view('layout/quan_tri/layoutAdmin', $data);
			} else {
				$data['title'] = 'Errors';
				$this->load->view('errors/index',$data);
			}
		}
		public function banner_manager_index()
		{
			
				if ($this->userid)
				{
					$data['title'] = 'Stand Banner Manage System - 123nam';
					$data['layout'] = $this->M_banner->GetLayout();
					$data['path'] = 'quan_tri/V_banner_manager_index';
					$this->load->view('layout/quan_tri/layoutAdmin',$data);
				} else {
					$data['title'] = 'Errors';
					$this->load->view('errors/index',$data);
				}
			
		}
	}

?>