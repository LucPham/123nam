<div class="row" style="margin: 0; padding: 0">
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
<?php 
	if (isset($data_update) && !empty($data_update))
	{
?>	
</div>	
 		<!-- UPDATE FORM -->
		<div class="row" style="margin: 0; padding: 0">
			<!-- title -->
			<div class="col-md-12">
				<h3><span class="label label-primary">Sự kiện của tôi</span></h3>
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
							<input type="text" name="evt_title" id="evt_title" placeholder="Sự kiện" value="<?php echo $data_update['evt_title'] ?>"><span class="glyphicon glyphicon-asterisk" style="font-size: 9px;"></span>
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
						<input type="text" name="evt_object" id="evt_object" placeholder="Đối tượng" value="<?php if ($data_update['evt_object'] != '') echo $data_update['evt_object'] ?>">
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
										if ($d <10) 
										{
											?>
											<option value="<?php echo $d; ?>" <?php if ($data_update['day'] == $d) echo "selected='selected'" ?>><?php echo '0'.$d ?></option>
											<?php 
										} else {
											?>
											<option value="<?php echo $d; ?>" <?php if ($data_update['day'] == $d) echo "selected='selected'" ?>><?php echo $d ?></option>
											<?php
										}
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
											if ($m<10) {
												?>
												<option value="<?php echo $m; ?>" <?php if ($data_update['month'] == $m) echo "selected='selected'" ?>><?php echo '0'.$m ?></option>
											<?php 
											} else {
													?>
												<option value="<?php echo $m; ?>" <?php if ($data_update['month'] == $m) echo "selected='selected'" ?>><?php echo $m ?></option>
													<?php 
											}
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
								<select name="evt_year" id="evt_year">
								<option value="0">Chọn năm</option>
								<?php 
									$year = date("Y");
									for ($y = $year; $y>1930; $y--)
									{
										?>
											<option <?php if ($data_update['year'] != 0 && $data_update['year'] == $y) echo "selected='selected'" ?> value="<?php echo $y ?>"><?php echo $y ?></option>
										<?php 
									}
								?>
							</select>
							</div>
						</div>
					</div><!-- end col-md-12-->	
					<div class="col-md-12 col-sm-12 col-xs-12 wrapp_cke">
						<!--<script src="//cdn.ckeditor.com/4.6.1/basic/ckeditor.js"></script>-->
						<script src="<?php echo base_url('public/ckeditor_basic/ckeditor.js') ?>"></script>
						<textarea class="ckeditor" name="info_note" id="info_note" placeholder="Ghi chú"><?php if ($data_update['note_info']!='') echo $data_update['note_info'] ?></textarea>
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
												<option <?php if (isset($data_update['evt_repeat']) && $data_update['evt_repeat'] == $item['id']) echo "selected='selected'" ?> value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
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
									<?php 
										if (!isset($data_day_of_week))
										{
									?>
												<span>Nhắc tôi trước</span>
												<select name="evt_remind" id="evt_remind">
													<?php 
														if (isset($data_remind_of_evt) && !empty($data_remind_of_evt))
														{
															foreach ($data_remind_of_evt as $item)
															{
																?>
																<option <?php if(isset($data_update['evt_remind']) && $data_update['evt_remind'] == $item['id']) echo "selected='selected'" ?> value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
																<?php 
															}
														} else echo 'not found';
													?>
												</select>
									<?php 
										}
									?>
									
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
							<?php 
								if (isset($data_day_of_week))
								{
							?>
								<div class="htmlDay_of_weekLoad">
									<span>Vào</span> 
									<select name="day_of_week" id="day_of_week">
										<?php 
											foreach ($data_day_of_week as $item)
											{
												?>
														<option <?php if($data_update['day_of_week'] == $item['id']) echo "selected='selected'" ?> value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
												<?php 
											}
										?>
									</select>
								</div><!-- end .htmlDay_of_weekLoad-->
							<?php 
							}
						?>
						</div>
					</div>
					<!-- NHAC TOI TRUOC -->
					<div class="col-md-12 col-sm-12 col-xs-12 btn_wrapp">
						<input type="button" name="evtBtn" id="evtBtn" value="Lưu thay đổi">
					</div>
				</form>
			</div><!-- end main col-md-12-->
		</div> <!-- end row -->
		<?php 
	} else echo 'not found';
?>