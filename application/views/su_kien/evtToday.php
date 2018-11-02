<div class="row" style="margin: 0; padding: 0">
	<div class="col-md-8 col-sm-8 col-xs-12">
		<div class="evt-today">
			Hôm nay
		</div>
		<div class="list">
			<?php 
				if (isset($dataEvt))
				{
					$remind = $this->M_su_kien_table->getTable('remind_of_events');

					$remindAsname1 = array();
					$remindAsname2 = array();
					if (isset($remind) && !empty($remind))
					{
						foreach ($remind as $name)
						{
							$remindAsname1[$name['id']] = $name['name_as_inform'];
							$remindAsname2[$name['id']] = $name['name'];
						}
					}
					$repeat = $this->M_su_kien_table->getTable('repeat_of_events');
					if (isset($repeat) && !empty($repeat))
					{
						foreach ($repeat as $name)
						{
							$repeatAsname[$name['id']] = $name['name_as_inform'];
						}
					}
					$day_of_week = $this->M_su_kien_table->getTable('day_of_week');
					if (isset($day_of_week) && !empty($day_of_week))
					{
						$day = array();
						foreach ($day_of_week as $name)
						{
							$day[$name['id']] = $name['name'];
						}
					}
					foreach ($dataEvt as $key=>$item)
					{
						$key = $key+1;
						?>
							<div id="wrapp-item-evtToday" class="wrapp-item<?php echo $item['id']; ?>">
								<div class="row">
									<div class="col-md-12 loadingGif<?php echo $item['id'] ?>" style="display: none;">
										Đang xóa ... <img src="<?php echo base_url('public/icon/pacman.gif') ?>"> 
									</div>
								</div>
								<div class="row">
									<div class="col-md-11 col-sm-11 col-xs-10">
									<p><a title="<?php echo $item['evt_title'] ?>" alt="<?php echo $item['evt_title'] ?>" class="evtTitle<?php echo $item['id'] ?>" href="<?php echo site_url('su-kien/su-kien-cua-toi/review/'.$item['id']) ?>"><b><?php echo $key.'.'.$item['evt_title'] ?></b></a></p>
									
									</div>
								<div class="col-md-1 col-sm-1 col-xs-1 dropdow<?php echo $item['id']; ?>">
									<div class="dropdown">
									 
									    <span class="glyphicon glyphicon-option-vertical"></span>
									 
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									    <li><a href="#" evt-id="<?php echo $item['id'] ?>" class="deletePopup">Xóa</a></li>
									    <li><a href="<?php echo site_url('su-kien/su-kien-cua-toi/chinh-sua/'.$item['id']) ?>">Chỉnh sửa</a></li>
									  </ul>
									</div>
								</div>
								</div>
								
								
								
								
							<div class="row date<?php echo $item['id'] ?>">
								<div class="col-md-12">
									<p>
									<?php  
										echo $remindAsname1[$item['evt_remind']].', ';
										if ($item['year'] != 0)
											 echo $item['day'].'/'.$item['month'].'/'.$item['year']; 
										else 
											 echo $item['day'].'/'.$item['month'];
									?>
								</p>	
								
								<?php 
									if (in_array($item['evt_repeat'], array('1','10')))
									{
										?>
											<p style="color: #706E6E; font-style: italic; font-size: 14px;">
											<?php 
												
												if ($item['evt_repeat'] == 10)
													echo $repeatAsname[$item['evt_repeat']]." (Vào ".$day[$item['day_of_week']].")";
												else
													echo $repeatAsname[$item['evt_repeat']]; 
											?>	
											</p>
										<?php
									} else {
										?>
											<p style="color: #706E6E; font-style: italic; font-size: 14px;">Nhắc trước: <?php echo $remindAsname2[$item['evt_remind']] ?></p>
											<p style="color: #706E6E; font-style: italic; font-size: 14px;"><?php echo $repeatAsname[$item['evt_repeat']] ?></p>
										<?php
									}

								?>
								</div>
							</div>
								
								
							</div>
						<?php
					}
				}
			?>
		</div>

	</div>
	<div class="col-md-4 col-sm-4 col-xs-12">
		Sự kiện khác
	</div>
</div>

<div class="over">
	<div class="option">
		<div class="closeBtn"><span>X</span></div>
		<div class="row">
			<div class="col-md-12 questionText">
				Bạn có chắc chắn muốn xóa sự kiện này?
			</div>
			<div class="col-md-12 answerText">
				<button class="answerNo">Không</button><button class="answerYes">Có</button>
			</div>
		</div>
	</div>
</div>