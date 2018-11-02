<div class="col-md-12 col-sm-12 col-xs-12 wrapp_form_survey" style="margin: 0; padding: 0">
		<input type="text" name="question" id="question_tracnghiem" value="<?php if (isset($dataSurvey['question'])) echo $dataSurvey['question'] ?>" class="form-control" placeholder="Câu hỏi ?">
			<div class="col-md-12" style="margin: 5px 0">
				<span class="label label-success">Câu trả lời: </span>
			</div>

			<?php 
				if (isset($dataSurveyAnswers) && !empty($dataSurveyAnswers))
				{
					foreach ($dataSurveyAnswers as $key=>$val)
					{
						?>
						<div class="wrapp_answer_and_close" id="wrapp_answer_and_close<?php echo $key*1+1 ?>">
							<div class="col-md-9 col-sm-9 col-xs-9 divcount" id="divcount<?php echo $key+1 ?>">
								<input type="text" name="answer[]" id="answer_tracnghiem<?php echo $key*1+1 ?>" value="<?php echo $val['answers'] ?>" class="form-control" placeholder="Trả lời"> 
							</div>
							<div class="col-md-2 col-sm-2 col-xs-1">
								<input type="text" name="result[]" class="form-control" value="<?php echo $val['result'] ?>">
							</div>
							<div class="col-md-1 col-sm-1 col-xs-1">
								<span class="close" id="<?php echo $key*1+1; ?>">X</span>
							</div>
						</div>
						<?php
					}
				}

			?>
				
			<div class="col-md-11 col-sm-11 col-xs-11 wrapp_add_questions">
				<div class="form-control add_questions" style="color: #B7B5B5; cursor: pointer;">Thêm câu trả lời <span class="glyphicon glyphicon-plus"></span></div>
			</div>
</div>