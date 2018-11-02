<?php 
	session_start();
	class C_letter extends CI_Controller
	{
		private $userid;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('nguoi_dung/M_nguoi_dung');
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
			if (isset($this->userid)) {
				$userlover = $this->M_privated->checkLoverUser($this->userid);
				if (isset($userlover) && $userlover != false) {
					
					$data['title'] = 'My letter - Private';
					$emojiprivateTable = $this->M_privated->getResultArray('emojiprivate');

					$myLetters = $this->M_privated->getLetterUser('sendme',$this->userid);
					if (empty($myLetters)) {
						$data['emojis'] = $this->M_privated->getTableOrderby('emojiprivate','positionkey','asc');
					}

					$data['letterAvailableIsset'] = $this->M_privated->letterAvailableIsset($this->userid,16,16,'sendme');

					$data['emojiprivateTable'] = $emojiprivateTable;
					$data['myLetters'] = $myLetters;

					$script = array();
					$script[] = 'layout/ajax/sendMe';
					$script[] = 'layout/ajax/letterView';
					$script[] = 'layout/ajax/letterForward';
					$data['script'] = $script;
					$data['path'] = 'layout/privated/myLetters';
					$this->load->view('layout/privated/layout', $data);

				} else {
					$data['title'] = 'not lover';
					$this->load->view('errors/index', $data);
				}
			} else {
				$data['title'] = 'not userid';
				$this->load->view('errors/index', $data);
			}
			
		} // index


		public function letterForwardAjax()
		{

			
			
		}
		//letterForwardAjax

		public function showMoreAjax()
		{
			if (isset($_POST['pageID'])) {

				if (is_nan($_POST['pageID']) == false) {
					$page = $_POST['pageID'];
					$limit = 16;
					$start = $limit*$page;
					$letterMore = $this->M_privated->getLetterAvailable($this->userid,$limit,$start,'sendme');
					//var_dump($letterMore);
					$this->HtmlShowMore($letterMore, $page);

				}


			}
		}
		public function deleteLetterAjax()
		{
			if (isset($_POST['id']) && !empty($_POST['id'])) {
				$idarray = $_POST['id'];
				$idstring = implode(',',$idarray);

				if($this->M_privated->deleteMultiLetter($this->userid,$idstring,'sendme') === true) 
					echo 1;
				else echo 0;
			}
		}

		public function HtmlShowMore($letterArray,$page)
		{
			?>
				<?php if (isset($letterArray) && !empty($letterArray)) { ?>

					
					<?php 
						$emojiprivateTable = $this->M_privated->getResultArray('emojiprivate');
						$emojiColorArr = array();
						foreach ($emojiprivateTable as $color) {
							$emojiColorArr[$color['id']] = $color['color'];
						}
						$emojiColorArr['0'] = '';

						//------------------------//


						$emojiIconAndName = array();
						foreach ($emojiprivateTable as $icon) {
							$emojiIconAndName[$icon['id']] = array(
								'name' => $icon['emojiname'],
								'icon' => $icon['icon']
							);
						}
						//------------------------//

						
					?>
				
					<?php  foreach ($letterArray as $letter) {
						
						$timeago = (time() - $letter['_time'])/60/60/24; // day
						$timeago = round($timeago,0);
						if ($timeago < 1) 
							$timeago = ' chưa tới 1 ngày';
						elseif ($timeago >= 30) 
							$timeago = ($timeago%30).' tháng trước';
						elseif ($timeago >= 365) 
							$timeago = ($timeago%365).' năm trước';
						else $timeago .= ' ngày trước';
						$overcontent = null;
						if (strlen($letter['message']) < 40) 
							$overcontent = $letter['message'];
						else {
							$overcontentArr = explode(" ", $letter['message']);
							for ($i = 0; $i <6; $i++) {
								$overcontent .= $overcontentArr[$i].' ';
							}
						}

						$Arr = explode(' ', $letter['_date']);

						$titleDate = $Arr[0];
						$dateArr = explode('-',$titleDate);
					 ?>
					 	
						
						<div id="letter-box" class="letter-box<?php echo $letter['id'] ?>">
						<input type="hidden" name="date" id="date<?php echo $letter['id'] ?>" value="<?php echo $dateArr[2].'-'.$dateArr[1].'-'.$dateArr[0].','.$Arr[1]; ?>">
					 	<input type="hidden" name="message" id="message<?php echo $letter['id'] ?>" value="<?php echo $letter['message']; ?>">

					 	<input type="hidden" name="emojiName" id="emojiName<?php echo $letter['id'] ?>" value="<?php echo $emojiIconAndName[$letter['_emoji']]['name'] ?>">

		 				<input type="hidden" name="emojiIcon" id="emojiIcon<?php echo $letter['id'] ?>" value="<?php echo $emojiIconAndName[$letter['_emoji']]['icon'] ?>">


							<div id="fa-envelope">
								<span id="timeago"><?php echo $timeago; ?></span>
								<span><input type="checkbox" name="delete[]" class="delete" value="<?php echo $letter['id'] ?>"></span>
							</div>
						<a href="#" data-toggle="modal" data-target="#myModal" class="modalBtn" id="<?php echo $letter['id']; ?>">
							<div id="title" class="<?php echo $emojiColorArr[$letter['_emoji']] ?>">
								<span <?php if ($letter['_emoji'] != '0') echo 'style="color: #fff"' ?> ><?php echo $dateArr[2].'-'.$dateArr[1].'-'.$dateArr[0].','; ?> <span style="display: inline; font-size: 12px; font-style: italic;"><?php echo $Arr[1]; ?></span>
								<span <?php if ($letter['_emoji'] != '0') echo 'style="color: #fff"' ?> id="overcontent" ><?php echo $overcontent. '...';?></span>
								
							</div>	
						</a>	
						</div><!--/letter-box-->	
					<?php } ?>
				

						
					<?php } else echo 0; ?>
					<?php 
						$limit = 16;
						$start = $limit*($page+1);
						$check = $this->M_privated->getLetterAvailable($this->userid,$limit,$start,'sendme');


						if ($check != false) {
					?>
					
						<div id="show-more-wrapp" class="btn<?php echo $page+1; ?>">
						<img id="loadingGif" style="display: none;" src="<?php echo base_url('public/icon/reload.gif') ?>">
						<button id="show-more-letter" href="<?php echo $page+1; ?>">Show more</button></div>
					
			
			<?php
			}
		}

	}


?>