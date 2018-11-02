<script type="text/javascript">
	$(document).ready(function() {
		$('.survey_select').change(function() {
			var surveyCategory = $(this).val();
			var path = "<?php echo base_url('quan_tri/C_survey') ?>";
			if (surveyCategory == 0)
			{
				$('.surveyForm').html('');
			} else {
				$('.surveyForm').load(path+'/'+surveyCategory);
				//setTimeout(function(){sle},5000)
				// OR delay
			}
		})
	})
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click','.add_questions', function() {
			add_answers('.wrapp_add_questions');
		});
		$(document).on('click','.close',function() {
			var close_index = $(this).attr('id');
			$('#wrapp_answer_and_close'+close_index).remove();
		});
	})

	function add_answers(add_to_class)
	{
		var index = $('.divcount').length;
			//alert(index);
			index = index +1;
		var template = '<div class="wrapp_answer_and_close" id="wrapp_answer_and_close'+index+'">'+
							'<div class="col-md-9 col-sm-9 col-xs-9 divcount" id="divcount'+index+'">'+
								'<input type="text" name="answer[]" id="answer_tracnghiem'+index+'" value="" class="form-control" placeholder="Trả lời"> '+
							'</div>'+
							'<div class="col-md-2 col-sm-2 col-xs-1">'+
								'<input type="text" name="result[]" class="form-control" value="">'+
							'</div>'+
							'<div class="col-md-1 col-sm-1 col-xs-1">'+
								'<span class="close" id="'+index+'">X</span>'+
							'</div>'+
						'</div>';
			$(add_to_class).before(template);
	}
	function remove_questions(div_remove,index)
	{
		
			$(div_remove+index).remove();
	}
</script>