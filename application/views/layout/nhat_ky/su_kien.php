<style type="text/css">
		.list::-webkit-scrollbar {
			width: 12px;
			background-color: rgb(88, 50, 130);
		}
		.list::-webkit-scrollbar-thumb {
	    	width: 12px;
	    	border-radius: 12px 12px;
	    	background-image: -webkit-linear-gradient(rgb(88, 50, 120), rgb(88, 50, 130));
		}
		.list::-webkit-scrollbar-track {
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		    border: 0.5px solid #fff;
		    background-color: #F5F5F5;
		}
		.list::-webkit-scrollbar-button {
		    background-color: #fff;
		}

		
</style>
<div class="col-md-4 col-sm-4">
					<div class="object">Sự kiện</div>
<?php
	if ($this->session->userdata('id') && !empty($this->session->userdata('id')))
	{
		$user = $this->session->userdata('id');
?>
					<div id="wrapp_sk_homnay">
				
						<div class="sk_hom_nay">
							<?php
							$ngay_hientai = date("d");
							$thang_hientai = date("m");
							$sk_homnay = $this->M_su_kien_table->ds_sk_hom_nay($ngay_hientai, $thang_hientai, $user);
							if ($sk_homnay != false)
							{
								foreach ($sk_homnay as $item)
								{
									?>
									<div class="panel panel-danger"> 
										<div class="panel-heading"> 
											<h3 class="panel-title">Hôm nay: <?php echo $item['ten_su_kien'] ?></h3> 
										</div> 
										<div class="panel-body"> 
										<p> <?php echo $item['doi_tuong'] ?></p>
										<div> <?php 
											if ($item['nam'] != '')
												echo $item['ngay'].'-'.$item['thang'].'-'.$item['nam'];
											else
												echo $item['ngay'].'-'.$item['thang'];

											 ?></div>

											 <div><i><?php echo $item['ghi_chu'] ?></i></div>
										</div> 
									</div>

									<?php
								}
							}

							?>
						</div>
					</div>	
					<div class="list" style="max-height: 600px;overflow: scroll">
					<?php
								$m = $thang_hientai; 
								for ($m; $m < 13; $m++) {
									if ($m == $thang_hientai)
									{
										$sk1 = $this->M_su_kien_table->sk_trong_thang_hien_tai($ngay_hientai,$m, $user);
										if ($sk1 != false)
										{
											?>
											<div class="title_thang">Tháng <?php echo $m;?></div>
											<div class="ds_sk_trong_thang">
										<?php
											foreach($sk1 as $item1)
											{
												?>
													<div class="sk_item">
														<div><span style="font-size: 9px" class="glyphicon glyphicon-asterisk"></span> <?php echo $item1['ten_su_kien'] ?></div>

														
														<?php
															if ($item1['doi_tuong'] !='')
																{ ?>
															<div>
															 <?php echo $item1['doi_tuong'] ?>
															</div>
															<?php
																}
															?>
														<div style="color: #010970; font-weight: bold"> <?php 
														if ($item1['nam'] != '')
															echo $item1['ngay'].'-'.$item1['thang'].'-'.$item1['nam'];
														else
															echo $item1['ngay'].'-'.$item1['thang'];

														 ?></div>

														 <div><i><?php echo $item1['ghi_chu'] ?></i></div>
													</div>		
												
												<?php
											}
											?>
											</div>
											<?php
										}
										$m++;
									}
									$sk = $this->M_su_kien_table->ds_sk_cac_thang($m,$user);
									if ($sk != false)
									{
										?>
										
											<div class="title_thang">Tháng <?php echo $m;?></div>
											<div class="ds_sk_trong_thang">
												<?php
												foreach ($sk as $item)
												{
												
													?>
													<div class="sk_item">
														<div><span style="font-size: 9px" class="glyphicon glyphicon-asterisk"></span> <?php echo $item['ten_su_kien'] ?></div>

														
														<?php
															if ($item['doi_tuong'] !='')
																{ ?>
															<div>
															 <?php echo $item['doi_tuong'] ?>
															</div>
															<?php
																}
															?>
														<div style="color: #010970; font-weight: bold"> <?php 
														if ($item['nam'] != '')
															echo $item['ngay'].'-'.$item['thang'].'-'.$item['nam'];
														else
															echo $item['ngay'].'-'.$item['thang'];

														 ?></div>

														 <div><i><?php echo $item['ghi_chu'] ?></i></div>
													</div>
													<?php
												}
												?>
											</div>
									
										<hr>
										<?php
									}
							}
					?>
					</div>
		<?php
		}
	?>
</div>
