<div id="wrap-letter">

	<form method="post" id="paper">
		
		<div id="wrap-form">
			
		<div id="notify">
			<div class="progress" style="display: none;">
			  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
			    45% Complete
			  </div>
			</div> <!--/progress-->


			<div class="alert alert-success alert-dismissible" role="alert" style="display: none;">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Cảm ơn em!</strong> Anh đã nhận được thư và sẽ trả lời em sớm nhất. <span class="fa fa-smile-o"></span> <span class="fa fa-smile-o"></span> <span class="fa fa-smile-o"></span>
			</div>



		</div> <!--/notify-->

		<textarea placeholder="Em muốn nói gì với anh?" id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 260px"></textarea>	
		<br/>
		<div id="option">
			<select id="showhide" name="showhide">
				<option value="1">Show</option>
				<option value="0">Hide</option>
			</select>
			
			<select id="emoji" name="emoji" data-show-icon="true">
				<option value="0">Cảm xúc</option>
				<?php 
					if (isset($emojis) && !empty($emojis)) {
						foreach ($emojis as $emoji) {
							?>
								<option value="<?php echo $emoji['id'] ?>"><?php echo $emoji['emojiname'] ?></option>
							<?php 
						}
					}

				?>
			</select>

			<button id="button" title="Gửi" alt="Gửi"><span class="fa fa-paper-plane"></span></button>
		</div> <!--/option-->

		</div><!--/wrapp-form-->
		
	</form>

</div>