<div id="letter-wrapp">
		<h3>THƯ CỦA TÔI</h3>
		<input type="checkbox" name="checkAllBtn" id="checkAllBtn"> Check all<br/>
		<?php if (isset($myLetters) && !empty($myLetters)) { ?>


		<?php 

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

			$pageID = null;


		?>
	
		<?php  foreach ($myLetters as $letter) {

			//------------------------------------------------------//
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
			//------------------------------------------------------//

			//-----------------------------------//
			$Arr = explode(' ', $letter['_date']);

			$titleDate = $Arr[0];
			$dateArr = explode('-',$titleDate);
			//-----------------------------------//


		 ?>
		 	
			
			<div id="letter-box" class="letter-box<?php echo $letter['id'] ?>">
			<input type="hidden" name="date" id="date<?php echo $letter['id'] ?>" value="<?php echo $dateArr[2].'-'.$dateArr[1].'-'.$dateArr[0].','.$Arr[1]; ?>">
		 	<input type="hidden" name="message" id="message<?php echo $letter['id'] ?>" value="<?php echo $letter['message']; ?>">

		 	<input type="hidden" name="emojiName" id="emojiName<?php echo $letter['id'] ?>" value="<?php echo $emojiIconAndName[$letter['_emoji']]['name'] ?>">

		 	<input type="hidden" name="emojiIcon" id="emojiIcon<?php echo $letter['id'] ?>" value="<?php echo $emojiIconAndName[$letter['_emoji']]['icon'] ?>">

				<div id="fa-envelope">
					<span id="timeago"><?php echo $timeago
					; ?></span>
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
	


		<?php } else {
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Hiện tại bạn chưa gửi thư nào đến 123nam, bạn có thể gửi ngay bây giờ
			</div>
			<!--letter-->
			<?php $this->load->view('layout/privated/letter') ?>
			<!--/letter-->
		<?php } ?>
		
		
		

</div><!--/letter-wrapp-->
<?php if ($letterAvailableIsset === true) { ?>
	<div id="show-more-wrapp-default" class="btn1">
		<img id="loadingGif" style="display: none;" src="<?php echo base_url('public/icon/reload.gif') ?>">
		<button id="show-more-letter" href="1">Show more</button>

	</div>
<?php } ?>
<!-- Button trigger modal -->


<!--info delete fixed-->
<div id="fix-infodelete-wrapp" style="display: none;"><span class="label label-danger">Đang xóa ...</span></div>



<!--delete fixed-->
<div id="fix-delete-wrapp"><span>Xóa</span></div>


<!--count fixed-->

<div id="fix-wrapp"><span>0</span></div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <b><h3 class="modal-title" id="myModalLabel">Modal title</h3></b>
		
		<div id="icon"></div>
      
      </div>

      <div class="modal-body" id="textMessage">
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-danger" id="btnEmoji"><span class="fa fa-frown-o"></span></button>
      </div>
    </div>
  </div>
</div>