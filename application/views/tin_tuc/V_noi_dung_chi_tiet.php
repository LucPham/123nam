<style type="text/css">
	.relate li a {
		color: #575252;
	}	
</style>
<div class="col-md-9 col-sm-12 col-xs-12 row_chitiet" id="ie-detail-wrap">

<?php 
	if (!isset($err))
	{
		if (isset($var_chi_tiet_tin))
		{
			
			?>
	<div class="row" id="ie-row1-detail"><!--tieu de + tom tat-->
		<div class="detail_title" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['tieu_de']; ?></div>	
		<div class="more" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['created']; ?></div>
		<div class="col-md-12" style="text-align: right; margin: 30px 0">
			<div class="fb-like" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
		</div>
		<div class="overview" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['tom_tat']; ?></div>
	</div>

	<div class="row"><!-- de xuat-->
		<div class="de_xuat" id="ie-dexuat">
			<ul class="relate">
				<?php
					if (isset($RelatedPost) && !empty($RelatedPost))
					{
						foreach ($RelatedPost as $relate) {
							?>
							
								<?php  
								if ($relate['typenews'] == 'photo') {
								?>
				 				<li><a  href="<?php echo site_url('tin-tuc/photo/'.$relate['url'].'/'.$relate['id']) ?>">
				 					<?php echo $relate['tieu_de'] ?>
				 				</a></li>
				 				<?php  
			 					} elseif ($relate['typenews'] == 'emegazine') {
			 						?>
									<li><a  href="<?php echo site_url('emagazine/'.$relate['url'].'/'.$relate['id']) ?>">
					 					<?php echo $relate['tieu_de'] ?>
					 				</a></li>
			 						<?php 
			 					} else {
			 						?>
									<li><a href="<?php echo site_url('tin-tuc/'.$relate['url'].'/'.$relate['id']) ?>">
				 					<?php echo $relate['tieu_de'] ?>
					 				</a></li>
			 						<?php 
			 					}
				 				?>
							<?php
						}
					}
				?> 
			</ul>

		</div>	

	</div>

	<div class="row"><!--noi dung-->
		<div class="detail_content">
			<div class="main_content" id="ie-main-content"><?php echo $var_chi_tiet_tin['noi_dung']; ?></div>
		</div>
	</div>
	<?php
		}
	} else
	{
		?>
		<?php
		}
?>


	<!--- SURVEY-->	
		<?php 
			if (isset($surveyCategory) && !empty($surveyCategory))
			{
				$this->load->view('tin_tuc/'.$surveyCategory);
			}
		?>


	
	<div class="row">
		<div id="keyword-wrapp">
			<div id="tags">Tags:</div>
			<div id="kw-content">
				<?php 
					if (isset($var_chi_tiet_tin)) {
						if (!empty($var_chi_tiet_tin['keyword'])) {
							echo $var_chi_tiet_tin['keyword'];
						}
					}
				?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="fb-like" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
		</div>
	</div><!-- END ROW FACEBOOK LIKE-->

	<!-- FACEBOOOK COMMENT-->
	<div class="row">
		<div class="col-md-12">
			<div class="fb-comments" data-numposts="5"></div>
		</div>
	</div>


</div> <!-- end Row_chitiet-->
