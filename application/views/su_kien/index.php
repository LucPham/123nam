<div class="row" style="margin: 0; padding: 0" id="ie-login-err-wrap">
<?php 
	if (isset($titleErr))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $titleErr ?>
			</div>
		</div>
		<?php
	}
?>
<?php 
	if (isset($dayErr))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $dayErr ?>
			</div>
		</div>
		<?php
	}
?>
<?php 
	if (isset($monthErr))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $monthErr ?>
			</div>
		</div>
		<?php
	}
?>
<?php 
	if (isset($success))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $success ?>
			</div>
		</div>
		<?php
	}
?>
<?php 
	if (isset($logicMonthErr))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $logicMonthErr ?>
			</div>
		</div>
		<?php
	}
?>
<?php 
	if (isset($logicYearErr))
	{
		?>
		<div class="col-md-4">
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo $logicYearErr ?>
			</div>
		</div>
		<?php
	}
?>
</div>
<?php
	$boolLogin = true;
	if (!isset($_COOKIE['verifyAuthID']) && !$this->session->userdata('id'))
	{
		$boolLogin = false;
	} elseif (isset($_COOKIE['verifyAuthID']) && isset($checkToken)) {
		if (hash_equals($checkToken['token'], $_COOKIE['verifyAuthID']) == false)
			$boolLogin = false;
	}
	if ($boolLogin == false)
	{
		?>
			<div class="alert alert-danger alert-dismissible" role="alert" id="ie-alert-login">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong><span class="glyphicon glyphicon-question-sign"></span></strong> Dường như bạn chưa đăng nhập, hãy đăng nhập để tạo sự kiện, lên lịch, nhắc thông báo và nhiều tiện ích khác. Nó rất nhanh chóng thôi!
			</div>
			<div class="row" style="margin: 20px 0; padding: 0" id="ie-login-form">
			<div class="col-md-2 col-sm-2 hidden-xs" id="col1">
				
			</div>
				<div class="col-md-8 col-sm-8 col-xs-11" id="col2">
					<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
						<ul class="nav nav-tabs" id="myTabs" role="tablist"> 
							<li role="presentation" class="active"><a href="#resgister" id="resgister-tab" role="tab" data-toggle="tab" aria-controls="resgister" aria-expanded="true">Đăng nhập</a></li> 
							<li role="presentation"><a href="#login" role="tab" id="login-tab" data-toggle="tab" aria-controls="login">Đăng ký</a></li>

						</ul> 
					<div class="tab-content" id="myTabContent"> 
					<!-- REGISTER -->
					<div class="tab-pane fade in active" role="tabpanel" id="resgister" aria-labelledby="home-tab" style="margin: 15px 0; padding: 20px"> 
						 <form method="post" enctype="multipart/form-data">
				        	<input type="email" name="emalLogin" id="emalLogin" placeholder="Email" class="form-control"> 
				        	<p class="EmailLoginErr" style="color: red; display: none">Vui lòng nhập email!</p>
				        	<br>
				        	<input type="password" name="passwordLogin" id="passwordLogin" placeholder="Mật khẩu" class="form-control">	
				        	<p class="PasswordLoginErr" style="color: red; display: none">Vui lòng nhập mật khẩu!</p>

				        	<br/>
				        	 <div class="loginFeedback" style="color: red"></div>
					        <img id="reload" src="<?php echo base_url('public/icon/reload.gif') ?>" style="display: none;">
					        <br/>
				        	<input type="checkbox" name="rememberMe" id="rememberMe" value="1"> Duy trì đăng nhập
				        	<br>
				        	<a href="<?php echo site_url('quen-mat-khau') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Quên mật khẩu?</a>
				        	<a href="<?php echo site_url('register') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Đăng ký</a> <input type="button" name="btnLogin" id="btnLogin" value="Đăng nhập" class="btn btn-success" style="float: right">
				        </form>
				       
					       
					</div> 
					<!-- LOGIN -->
					<div class="tab-pane fade" role="tabpanel" id="login" aria-labelledby="profile-tab"> 		
						<h3><a href="<?php echo site_url('register') ?>">Đăng ký</a></h3>
					</div> <!--end tab dangky-->


					</div> 
				</div>
				</div> <!-- END COL-MD-9 -->


			<div class="col-md-2 col-sm-2 hidden-xs" id="col3">
				
			</div>
			</div><!-- END ROW -->
		<?php 
	} else {
		?>
		<div class="row" style="margin: 0; padding: 0">
			<!-- title -->
			<div class="col-md-12">
				<h3><span class="label label-primary">Tạo sự kiện</span></h3>
			</div>
		</div>
		<div class="row" style="margin: 0; padding: 0">
			<div class="col-md-1 col-sm-1 hidden-xs"></div>
			<!-- body insert events-->
			<div class="col-md-7 col-sm-9">
				<form method="post" enctype="multipart/form-data">
					<!-- TEN SU KIEN -->
					<div class="col-md-12" style="margin: 0; padding: 0">
						<div class="col-md-12">
							<input type="text" name="evt_title" id="evt_title" placeholder="Sự kiện"><span class="glyphicon glyphicon-asterisk" style="font-size: 9px;"></span>
						</div>
						<div class="col-md-12">
							<input type="hidden" name="titleCode" id="titleCode" class="form-control">
						</div>
						<div class="col-md-12">
							<span class="evt_title_err" style="color: red; font-size: 9px; display: none;">Vui lòng nhập tên sự kiện</span>
						</div>
					</div>
					<!-- DOI TUONG -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<input type="text" name="evt_object" id="evt_object" placeholder="Đối tượng">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<input type="hidden" name="objectCode" id="objectCode" placeholder="ObjectCode" class="form-control">
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 date_wrapp" style="padding: 0">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<select name="evt_day" id="evt_day">
								<!-- chon ngay -->
								<option value="0">Chọn ngày</option>
								<?php 
									for ($d = 1; $d<=31; $d++)
									{
										if ($d <10) echo '<option value="'.$d.'">0'.$d.'</option>';
										else echo '<option value="'.$d.'">'.$d.'</option>';
									}
								?>
								</select> <span class="glyphicon glyphicon-asterisk" style="font-size: 9px;"></span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<span class="evt_day_err" style="color: red; font-size: 9px; display: none;">Vui lòng chọn ngày, đây là điều tối thiểu</span>
							</div> <!-- end div errors-->
						</div> <!-- end day select -->
						<!-- Chon thang -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<select name="evt_month" id="evt_month">
									<option value="0">Chọn tháng</option>
									<?php 
										for ($m = 1; $m<=12; $m++)
										{
											if ($m<10) echo '<option value"'.$m.'">0'.$m.'</option>';
											else echo '<option value"'.$m.'">'.$m.'</option>';
										}
									?>
								</select> <span class="glyphicon glyphicon-asterisk" style="font-size: 9px;"></span>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<span class="evt_mont_err" style="color: red; font-size: 9px; display: none;">Vui lòng chọn tháng, đây là điều tối thiểu</span>
							</div> <!-- end div errors -->
						</div>
						<!-- Chon nam -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="evt_year" id="evt_year" placeholder="Năm">
							</div>
						</div>
					</div><!-- end col-md-12-->	
					<div class="col-md-12 col-sm-12 col-xs-12 wrapp_cke">
					<script src="<?php echo base_url('public/ckeditor_basic/ckeditor.js') ?>"></script>
						<textarea name="info_note" class="ckeditor" id="info_note" placeholder="Ghi chú"></textarea>
					</div> <!-- en col-md-12 -->
					<!-- LAP LAI -->
					<div class="col-md-12 col-sm-12 col-xs-12 repeat_wrapp">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<span>Lặp lại</span>
							<select name="evt_repeat" id="evt_repeat">
								<?php 
									if (isset($data_repeat_of_evt) && !empty($data_repeat_of_evt))
									{
										foreach ($data_repeat_of_evt as $item)
										{
											?>
												<option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
											<?php 
										}
									} else echo "not found";
								?>
							</select>
						</div> <!-- end col-md-6-->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="remindLoading" style="display: none;">
								Loading...
							</div>
							<div class="remind_wrapp">
								<div class="remindHtmlLoad">
									<span>Nhắc tôi trước</span>
									<select name="evt_remind" id="evt_remind">
										<?php 
											if (isset($data_remind_of_evt) && !empty($data_remind_of_evt))
											{
												foreach ($data_remind_of_evt as $item)
												{
													?>
													<option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
													<?php 
												}
											} else echo 'not found';
										?>
									</select>
								</div>
							</div>
						</div>
					</div><!-- end col-md-12-->
					<!-- NGAY TRONG TUAN (THU)-->
					<div class="col-md-12 col-sm-12 col-xs-12 day_of_week_wrapp">
						<div class="col-md-12 loading" style="display: none;">
							loading...
						</div>
						<div class="col-md-12 day_of_week_select">
						</div>
					</div>
					<!-- NHAC TOI TRUOC -->
					<div class="col-md-12 col-sm-12 col-xs-12 btn_wrapp">
						<input type="button" name="evtBtn" id="evtBtn" value="Tạo sự kiện">
					</div>
				</form>
			</div><!-- end main col-md-12-->
		</div> <!-- end row -->
		<?php 
	}
?>