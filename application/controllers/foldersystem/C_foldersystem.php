<?php  
	class C_foldersystem extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quan_tri/M_tin_tuc_table');
			$this->load->model('quan_tri/M_album');
			$this->load->model('nguoi_dung/M_nguoi_dung');
			$this->load->model('emegazine/M_emegazine');
			$this->load->model('privated/M_privated');
			
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

		public function index()
		{
			$dir = './public/hinh_tieu_de';
			$dir1 = scandir($dir);

			$dir2 = glob('./public/*', GLOB_ONLYDIR);
			//var_dump($dir2);
			foreach ($dir2 as $key=>$folder) {
				//$key +=1;
				echo $folder."<br/>";
			}
			
		} 
		// index

		public function public_list()
		{

			$url = "http://123nam.com/?public/Emagazine";
			$path = './public/*';
			$data['readDir'] = glob($path, GLOB_ONLYDIR);


			$data['style'] = 'foldersystem/responsive.css';
			$data['title'] = 'Public directory';
			$data['script'] = 'layout/ajax/foldersystem';
			$data['path'] = 'foldersystem/publicList';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);
		} 
		// public_list

		public function readFolder() 
		{
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$path = parse_url($url, PHP_URL_QUERY);
			
			//echo parse_url($url, PHP_URL_QUERY);
			//echo $url;

			$data['readDir'] = glob('./'.$path.'/*', GLOB_ONLYDIR);
			$data['readFile'] = scandir('./'.$path);


			$data['title'] = $path;
			$data['breadcrumbs'] = $path;
			$data['style'] = 'foldersystem/responsive.css';
			$data['script'] = 'layout/ajax/foldersystem';
			$data['path'] = 'foldersystem/readFolder';
			$this->load->view('layout/quan_tri/layoutAdmin', $data);


		}
		// readFolder;

		//Rename File

		public function renameFileAjax() 
		{
			if (isset($_POST['path']) && isset($_POST['idkey']) && isset($_POST['newname']) && isset($_POST['oldname'])) {
				
				$path = $_POST['path'];
				$idkey = $_POST['idkey'];
				$newname = $_POST['newname'];
				$oldname = $_POST['oldname'];
				
				$oldnameExp = explode('.', $oldname);
				$fileType = end($oldnameExp);

				$newnameFile = $newname.'.'.$fileType;

				if ($newnameFile != $oldname) {
					if (rename('./'.$path.'/'.$oldname, './'.$path.'/'.$newnameFile)) 
						echo 1;
					else return false;
				}
				

			}
		}

		// rename Folder
		public function renameFolderAjax()
		{
			if (isset($_POST['url']) && $_POST['name'] && isset($_POST['idkey'])) {
				$path = $_POST['url'];
				$newname = $_POST['name'];
				$key = $_POST['idkey'];

				$pathArr = explode('/', $path);

				$index = count($pathArr) -1;
				$pathArr[$index] = $newname;

				foreach ($pathArr as $key=>$charname) {
					if ($key == $index) {
						$newpath .= $charname;
					} else $newpath .= $charname.'/'; 
				}

				//var_dump($pathArr);
				//echo $newpath.'-'.$path;
				if ($newpath != $path) {
					if (rename($path, $newpath))
						echo 1;
				} else return false;

			}
		}

		public function deletefolderAjax()
		{
			if (isset($_POST['path']) && isset($_POST['Dirid'])) {
				$dirPath = $_POST['path'];
				$folderid = $_POST['Dirid'];

				if ($this->deleteDir($dirPath) == 1) {
					echo 1;
				} else echo 0;		
				//echo $dirPath.' - '.$folderid;
			}

			
			
			
		}
		public static function deleteDir($dirPath) {
			$files = glob($dirPath.'/*');	
			foreach ($files as $file) {
				if (is_dir($file)) {
					self::deleteDir($file);
				} else {
					unlink($file);
				}
			}
			if (rmdir($dirPath)) {
				return 1;
			}
		}
		public function folerScan($url)
		{
			$dicDir = array();
			foreach (glob($url.'/*', GLOB_ONLYDIR) as $key=>$foldername) {
				$dicDir[$key] = $foldername;
			}
			return $dicDir;		
		}

		public function deleteFile_Ajax()
		{
			if (isset($_POST['path'])) {
				$path = $_POST['path'];
				if (!empty($path)) {
					if (unlink('./'.$path)) {
						echo 1;
					} else echo 0;
				}
			}
		}

		//deleteFile_Ajax
	}

?>