<div class="col-md-4 col-sm-4" style="margin: 20px 0 0 0;">

				<?php
	if ($this->session->userdata('id'))
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
					<?php 
				}
				?>
</div>
