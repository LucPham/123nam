<div class="col-md-12 col-sm-12 col-xs-12" id="survey_wrapp_div" style="margin: 0; padding: 0">
	<div class="col-md-12" id="survey_title_div">
		Mời bạn tham gia khảo sát
	</div>
	<div class="col-md-12" id="survey_question_div">
		<?php echo $dataSurvey['question']; ?>
	</div>
	<form method="post" enctype="multipart/form-data">
	<?php 
		$len = 0; 
		foreach ($dataSurveyAnswer as $key=>$answer)
		{
			?>
			<div class="col-md-12">
			<input type="checkbox" name="answer" class="answer<?php echo $key ?>" value="<?php echo $answer['id']; ?>"> <span><?php echo $answer['answers'] ?></span>
			</div>
			<?php
			$len = $key;
		}
	?>
	<div class="col-md-12">
			<div class="col-md-6" id="resultBtnWrapp">
				<a href="#" class="showResultBtn" surveyid="<?php echo $dataSurvey['id'] ?>" categorySurvey="<?php echo $dataSurvey['category_id'] ?>">Xem kết quả</a>
			</div>
		<?php  
			$cookiename = 'survey_'.$dataSurvey['id'];
			if (isset($_COOKIE[$cookiename]) && $_COOKIE[$cookiename] == $dataSurvey['id'])
			{
				// DA THUC HIEN KHAO SAT & ENABLE
				?>
					<div class="col-md-6">
						<input type="button" class="showResultBtn" id="surveyBtnSend" value="Gửi" surveyid="<?php echo $dataSurvey['id'] ?>">
					</div>
				<?php 
			} else {
				// CHUA KHAO SAT
				?>
					<div class="col-md-6">
						<input type="button" class="surveyBtnSend" value="Gửi" surveyid="<?php echo $dataSurvey['id'] ?>" articleid="<?php echo $var_chi_tiet_tin['id'] ?>" categorySurvey="<?php echo $dataSurvey['category_id'] ?>" countAnswer="<?php echo $len; ?>">
					</div>
				<?php 
			}
		?>
	</div><!--end div.row-->
	</form>
</div>