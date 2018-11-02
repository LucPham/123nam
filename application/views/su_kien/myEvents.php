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
		//KIEM TRA VA DANG NHAP
		?>
				<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong><span class="glyphicon glyphicon-question-sign"></span></strong> Dường như bạn chưa đăng nhập, hãy đăng nhập để tạo sự kiện, lên lịch, nhắc thông báo và nhiều tiện ích khác. Nó rất nhanh chóng thôi!
			</div>


			<div class="row" style="margin: 20px 0; padding: 0">
			<div class="col-md-2 col-sm-2 hidden-xs">
				
			</div>
				<div class="col-md-8 col-sm-8 col-xs-11">
					<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
					
						<ul class="nav nav-tabs" id="myTabs" role="tablist"> 
							<li role="presentation" class="active"><a href="#resgister" id="resgister-tab" role="tab" data-toggle="tab" aria-controls="resgister" aria-expanded="true">Đăng nhập</a></li> 

							<li role="presentation"><a href="#login" role="tab" id="login-tab" data-toggle="tab" aria-controls="login">Đăng ký</a></li>

						</ul> 

					<div class="tab-content" id="myTabContent"> 
					<!-- REGISTER -->

					<div class="tab-pane fade in active" role="tabpanel" id="resgister" aria-labelledby="home-tab" style="margin: 15px 0; padding: 20px"> 
						  <form method="post" enctype="multipart/form-data">
				        	<input type="email" name="emalLogin" id="emalLogin" placeholder="Email" class="email_register_evt"> 
				        		<p class="EmailLoginErr" style="color: red; display: none">Vui lòng nhập email!</p>
				        		<br>
				        	<input type="password" name="passwordLogin" id="passwordLogin" placeholder="Mật khẩu" class="pass_register_evt">	
				        		<p class="PasswordLoginErr" style="color: red; display: none">Vui lòng nhập mật khẩu!</p>
				        		<br>
				        	
				        </form>
				        <div class="loginFeedback" style="color: red"></div>
					        <img id="reload" src="<?php echo base_url('public/icon/reload.gif') ?>" style="display: none;">
					        <br/>
					       <input type="checkbox" name="rememberMe" id="rememberMe" value="1"> Duy trì đăng nhập
				        	<br>
				        	<a href="<?php echo site_url('quen-mat-khau') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Quên mật khẩu?</a>
				        	<a href="<?php echo site_url('register') ?>" id="forgotPW" title="Quên mật khẩu?" alt="Quên mật khẩu?">Đăng ký</a> <input type="button" name="btnLogin" id="btnLogin" value="Đăng nhập" class="btn btn-success" style="float: right">
					</div> 
					<!-- LOGIN -->
					<div class="tab-pane fade" role="tabpanel" id="login" aria-labelledby="profile-tab"> 		
						<h3><a href="<?php echo site_url('register') ?>">Đăng ký</a></h3>
					</div> 


					</div> 
				</div>
				</div> <!-- END COL-MD-9 -->


			<div class="col-md-2 col-sm-2 hidden-xs">
				
			</div>
			</div><!-- END ROW -->
		<?php 
	} else {

?>

<div class="row" style="margin: 0; padding: 0">
	<div class="col-md-6 col-sm-6 col-xs-6 youhaveevt" style="margin: 20px 0; padding-left: 30px">
		<span> Bạn đang có: 
		<?php 
			if (isset($countEvent) && !empty($countEvent))
			{
				echo $countEvent['countEvent'];
			}
		?>
		sự kiện
		</span>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12 accountName">
	<span>
		Tài khoản 
		<?php 
			if (isset($hotenUser) && !empty($hotenUser))
			{
				echo '<b>'.$hotenUser['lastName'].' '.$hotenUser['firstName'].'</b>';
			}
		?>
		</span>
	</div>
</div><!--end row-->

<div class="row row_list" style="margin: 0; padding: 0;">
		<?php 
			$current_month = date("m");
			$count = $current_month;
			$inTab = 0;
			for ($i =$current_month; $i <=12; $i++)
			{
				$data = $this->M_su_kien_table->get_event_user_month($userid,$i);
				$count = $i;
				$inTab++;
				if (isset($data) && !empty($data))
				{
				?>
				<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo 'tag'.$i ?>" aria-expanded="true" aria-controls="collapseOne">
				         <b><?php echo 'Tháng '.$i ?></b>
				        </a>
				      </h4>
				    </div>
				    <div id="<?php echo 'tag'.$i ?>" class="panel-collapse collapse <?php if ($inTab<=2) echo 'in'?>" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				       <?php  
				       	foreach ($data as $key=>$item)
				       	{
				       		?>

				       		<table class="table table-striped">
								<tr class="<?php if ($item['remain'] == 0) echo 'danger'; else echo 'info' ?>">
									<!-- Event checkbox-->
									<td class="col-md-1 col-sm-1 col-xs-1">
										<input type="checkbox" name="delete" id="delete" value="<?php echo $item['id'] ?>"> 
									</td>
									<!-- Event date-->
									<td class="col-md-3 col-sm-3 col-xs-3">
										<span><?php if ($item['year']!=0) echo $item['day'].'-'.$item['month'].'-'.$item['year']; else echo $item['day'].'-'.$item['month']; ?></span>
										<span><?php 
															if ($item['remain'] == 0)
															{
																?>
																<span style="color: #FF0000; font-weight: bold;">(Hôm nay)</span>
																<?php
															} else {
																?>
																<span style="font-size: 11px; color: #15B500; font-style: initial;">
																	(<?php echo $item['remain'] ?> ngày tới)
																</span>
																<?php 
															}

														?></span>
									</td>
									<!-- Event Name-->
									<td> 

										<a class="myEvtName" href="<?php echo site_url('su-kien/su-kien-cua-toi/review/'.$item['id']) ?>"><?php echo $item['evt_title'] ?></a>
									</td>
								</tr>
							</table>
				       		<?php 
				       	}
				       ?>
				      </div>
				    </div>
				  </div>
					</div>
				</div>	
				<?php 
				}
			}
			if ($current_month > 1 && $count == 12)
			{
				for ($j = 1; $j < $current_month; $j++)
				{
					$data2 = $this->M_su_kien_table->get_event_user_month($userid,$j);
					if (isset($data2) && !empty($data2))
					{
					?>
						<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo 'tag'.$j ?>" aria-expanded="true" aria-controls="collapseOne">
				         <b><?php echo 'Tháng '.$j ?></b>
				        </a>
				      </h4>
				    </div>
				    <div id="<?php echo 'tag'.$j ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				       <?php  
				       	foreach ($data2 as $key=>$item)
				       	{
				       		?>
								<table class="table table-striped">
								<tr class="<?php if ($item['remain'] == 0) echo 'danger'; else echo 'info' ?>">
									<!-- Event checkbox-->
									<td class="col-md-1 col-sm-1 col-xs-1">
										<input type="checkbox" name="delete" id="delete" value="<?php echo $item['id'] ?>"> 
									</td>
									<!-- Event date-->
									<td class="col-md-3 col-sm-3 col-xs-3">
										<span><?php if ($item['year']!=0) echo $item['day'].'-'.$item['month'].'-'.$item['year']; else echo $item['day'].'-'.$item['month']; ?></span>
										<span><?php 
															if ($item['remain'] == 0)
															{
																?>
																<span style="color: #FF0000; font-weight: bold;">(Hôm nay)</span>
																<?php
															} else {
																?>
																<span style="font-size: 11px; color: #15B500; font-style: initial;">
																	(<?php echo $item['remain'] ?> ngày tới)
																</span>
																<?php 
															}

														?></span>
									</td>
									<!-- Event Name-->
									<td> 

										<a class="myEvtName" href="<?php echo site_url('su-kien/su-kien-cua-toi/review/'.$item['id']) ?>"><?php echo $item['evt_title'] ?></a>
									</td>
								</tr>
							</table>
				       		<?php 
				       	}
				       ?>
				      </div>
				    </div>
				  </div>
					</div>
				</div>	
					<?php 
					}
				}
			}
			
		?>
</div> <!--end row-->
<?php 
}

?>



<div class="dialogBeforeSendWrapp">
	<div class="popupErr" style="display: none;">
		<button class="btn btn-success cancel" title="Hủy" alt="Hủy">X</button>
		<h4>Hãy chọn sự kiện cần xóa</h4>
	</div>
	<div class="popupDelete" style="display: none;">
		<div class="verifyDelete">
			
			<button class="btn btn-success cancel" title="Hủy" alt="Hủy">X</button>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h4>Bạn có chắc chắn xóa những sự kiện này?</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-6" style="z-index: 900">
					<button class="btn btn-default cancel" title="Không" alt="Không">Không</button>
				</div>
				<div class="col-md-5">
					<button class="btn btn-default deleteEvt" title="Xóa" alt="Xóa">Xóa</button>
				</div>
			</div>

		</div>
		<div class="imgLoading" style="display: none">
			Đang xóa ...
			<img src="<?php echo base_url('public/icon/reload.gif') ?>">
		</div>
	</div>
</div>

