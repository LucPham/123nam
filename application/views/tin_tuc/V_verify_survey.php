<div class="verify_wrapp">

	<div class="form_option form_wrapp">
		<button class="survey_close" title="Đóng" alt="Đóng">X</button>

		<div class="divLoad">
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-12" style="margin-top: 30px;">
				Nhập các ký tự ở hình phía dưới
			</div>
		</div>
		
		<div class="row inputCaptcha" style="margin-top: 30px;">
			<div class="col-md-8 col-sm-8 col-xs-11">
				<input type="text" name="captcha_word" id="captcha_word" class="form-control">
				<span class="form_err" style="display: none; color: #FF0000; font-size: 14px;"><span class="glyphicon glyphicon-warning-sign"></span> Vui lòng nhập mã</span>

				<span class="capt_err" style="display: none; color: #FF0000; font-size: 14px;"><span class="glyphicon glyphicon-warning-sign"></span> Mã captcha chưa chính xác</span>

				<span class="time_err" style="display: none; color: #FF0000; font-size: 14px;"><span class="glyphicon glyphicon-warning-sign"></span> Captcha đã hết hạn</span>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 captcha">
				<?php  
					if (isset($img_cap) && !empty($img_cap))
					{
						echo $img_cap;
					}
				?>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="button" class="btnCaptcha" name="" value="Gửi">
			</div>
		</div>
	</div>
	</div> <!-- end .divLoad-->
</div>


<div class="error_wrapp">	
	<div class="error_inform">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<button class="error_close" title="Đóng" alt="Đóng">X</button>	
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-11 col-sm-11 col-xs-11">
				Vui lòng chọn câu trả lời
			</div>
		</div>
	</div>
</div>


