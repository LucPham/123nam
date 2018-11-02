<?php 
	if (isset($data_review) && !empty($data_review))
	{
		?>
				
				<div class="row" style="margin: 0; padding: 0">
					<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="title_review_wrapp">
											<div class="text_review_title">
												<?php echo $data_review['evt_title'] ?>
											</div>
										</div>
					</div>
				</div><!-- end row-->
				<div class="row" style="margin: 10px 0">
					<div style="float: right; margin: 0; padding-right: 30px;">
							
						<a href="<?php echo site_url('su-kien/su-kien-cua-toi/xoa/'.$data_review['id']) ?>"><button class="btn btn-danger">Xóa</button></a>

						<a href="<?php echo site_url('su-kien/su-kien-cua-toi/chinh-sua/'.$data_review['id']) ?>"><button class="btn btn-success">Chỉnh sửa</button></a>	
					</div>	
				</div> <!-- end row-->
				<div class="row" style="margin: 0; padding: 0">
					<div class="col-md-12 col-sm-12 col-xs-12 col_review_wrapp_1">
						<div class="col-md-4 col-sm-4 col-xs-5 review_date">
							<span>
								<?php
									if (!empty($data_review['year']))
										echo $data_review['day'].'-'.$data_review['month'].'-'.$data_review['year'].',';
									else
										echo $data_review['day'].'-'.$data_review['month'].',';

								?>
							</span>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-7 review_object">
							<span>
								<?php 
									if (!empty($data_review['evt_object']))
										echo $data_review['evt_object'];
								?>
							</span>
						</div>
					</div><!-- end col-md-12-->

					<div class="col-md-12 col-sm-12 col-xs-12 col_review_wrapp_2">
						<div class="review_noteinfo">
							<?php 
								if (!empty($data_review['note_info']))
									echo $data_review['note_info'];
							?>
						</div>
						<div class="review_repeat">
							<span>Lặp lại: </span>
							<?php
								$arr_repeat_name = array();
								if (isset($arr_repeat) && !empty($arr_repeat))
								{
									foreach ($arr_repeat as $val)
									{
										$arr_repeat_name[$val['id']] = $val['name'];
									}
								}  
								//var_dump($arr_repeat_name);
								$key = $data_review['evt_repeat'];
								echo $arr_repeat_name[$key];
							?>
						</div>
						<div class="review_remind">
							<span>Nhắc trước: </span>
							<?php 
								$arr_remind_name = array();
								if (isset($arr_remind) && !empty($arr_remind))
								{
									foreach ($arr_remind as $val)
									{
										$arr_remind_name[$val['id']] = $val['name'];
									}
								}  
								$key = $data_review['evt_remind'];
								echo $arr_remind_name[$key];
							?>
						</div>

					</div>
				</div> <!-- end row-->
		
		<?php 
	} else echo "not found";

?>
