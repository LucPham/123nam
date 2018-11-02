<script type="text/javascript">
	$(document).ready(function () {
		$('.surveyBtnSend').on('click', function() {
			var surveyid = $(this).attr('surveyid');
			var articleid = $(this).attr('articleid');
			var categorySurvey = $(this).attr('categorySurvey');
			
		// DANG CHON NHIEU DAP AN
			if (categorySurvey == 'list_select') 
			{
				var countAnswer = $(this).attr('countAnswer');
				var answer = [];
				for (var i=0; i<= countAnswer*1; i++)
				{
					if ($('.answer'+i+':checked').val())
					{
						answer.push($('.answer'+i+':checked').val());
					}
				}
				if (typeof answer != 'undefined' && answer.length > 0) // DA CHON CAU TRA LOI
				{
					jsonString = JSON.stringify(answer);
					$('.verify_wrapp').show();
					$('.btnCaptcha').on('click', function() {
						var captcha = $('#captcha_word').val();
						if (captcha) 
						{
							$.ajax({
								type : "post",
								url : "<?php echo base_url('quan_tri/C_tin_tuc/insertSurveyResultAjax') ?>",
								data : {captcha: captcha, data: jsonString, survey: surveyid},
								cache : false,
								success: function(respone) {
									if (respone == 'captErr')
									{
										$('.capt_err').show();
										$('.form_err').hide();
									}
									if (respone == 'timeErr')
									{
										$('.time_err').show();
									} 
									if (respone == 1)
									{
										$('.form_option').removeClass('form_wrapp').addClass('form_wrapp_scroll');
										$('.divLoad').load("<?php echo base_url('quan_tri/C_tin_tuc/ajaxLoadResult') ?>",{survey: surveyid});
										
									}
								}
							});
						} else $('.form_err').show();
					})
				} else $('.error_wrapp').show();
		// DANG TRAC NGHIEM HOAC YES NO
			} else { 
				var answer = $('.answer:checked').val();
				if (answer)
				{
					$('.verify_wrapp').show();
					$('.btnCaptcha').on('click', function() {
						var captcha = $('#captcha_word').val();
						if (captcha) 
						{
							$.ajax({
								type : "post",
								url : "<?php echo base_url('quan_tri/C_tin_tuc/ajaxMultiYN') ?>",
								data : {captcha: captcha, answerid: answer, survey: surveyid},
								cache : false,
								success: function(respone) {
									if (respone == 'captErr')
									{
										$('.capt_err').show();
										$('.form_err').hide();
									}
									if (respone == 'timeErr')
									{
										$('.time_err').show();
									} 
									if (respone == 1)
									{
										$('.form_option').removeClass('form_wrapp').addClass('form_wrapp_scroll');
										$('.divLoad').load("<?php echo base_url('quan_tri/C_tin_tuc/ajaxLoadResult') ?>",{survey: surveyid});

									}
								}
							});
						} else $('.form_err').show();
					});// END CLICK .btnCaptcha
				} else $('.error_wrapp').show();
			}	
		}); // END CLCIK .surveyBtnSend


		// SHOW RESULT BUTTON CLICK

		$('.showResultBtn').on('click', function(e) {
			e.preventDefault();
			var surveyid = $(this).attr('surveyid');
			if (surveyid)
			{
				$('.result_wrapp').show();
				$('.divLoadResult').load("<?php echo base_url('quan_tri/C_tin_tuc/ajaxLoadResult') ?>",{survey: surveyid});
			} else alert('Not found');
		})
		// CLOSE SURVEY BUTTON CLICK
		$('.result_close').on('click', function() {
			$('.result_wrapp').hide();
		});
		$('.survey_close').on('click', function() {
			$('.verify_wrapp').hide();
		});
		$('.error_close').on('click', function() {
			$('.error_wrapp').hide();
		})
	})
</script>