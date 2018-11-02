<div class="col-md-12 col-sm-12 col-xs-12 wrapp_form_survey" style="margin: 0; padding: 0">
	<input type="text" name="question" id="question" value="<?php if (isset($dataSurvey['question'])) echo $dataSurvey['question'] ?>" class="form-control" placeholder="Câu hỏi ?">
	<div class="col-md-12" style="margin: 30px 0">

	<?php  
		if (isset($dataSurveyAnswers) && !empty($dataSurveyAnswers))
		{
			foreach ($dataSurveyAnswers as $answer)
			{
				?>
				<div class="row">
					
						<div class="col-md-1 col-sm-2 col-xs-2">
							<input type="radio" disabled="disabled"> 
						</div>
						<div class="col-md-4 col-sm-6 col-xs-8">
							<input type="text" name="answer[]" id="answerYN" value="<?php echo $answer['answers'] ?>" placeholder="Câu trả lời!">
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<input type="text" name="result[]" class="form-control" value="<?php echo $answer['result'] ?>">
						</div>
					
				</div>
				
				<?php
			}
		}
	?>
	</div>
</div>