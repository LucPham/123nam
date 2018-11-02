<div class="row" style="padding: 0">
<!--question-->
	<div class="col-md-12 question_result_box">
		<span><?php echo $surveyData['question'] ?></span>
	</div>
<!--end question -->

<!--date-->
	<div class="col-md-12" style="margin: 0; padding: 0">
		<!-- Date Created -->
		<div class="col-md-6 date_updated_result_box">
			<span><?php echo $surveyData['updated'] ?></span>
		</div>
		<!-- Current Day-->
		<div class="col-md-6 date_current_result_box">
			<span><?php echo date("d-m-Y") ?></span>
		</div>
	</div>
<!-- end date-->

</div>
<div class="row" style="margin-top: 20px">
	<div class="col-md-12 sumvote_box">
		 <?php
			if (isset($sumvote) && !empty($sumvote))
			$sum = ($sumvote['sumvote'])*1;
		 ?>
		 <span class="sumvote"><img src="<?php echo base_url('public/icon/sumvote.png') ?>" title="Tổng số người tham gia" alt="Tổng số người tham gia"> <?php echo $sum; ?></span>
	</div>
</div>	
<div class="row" style="margin: 5px 0 0 0; padding:0">
<?php 
	$this->load->model('quan_tri/M_tin_tuc_table');
	if (isset($surveyAnswers) && !empty($surveyAnswers))
	{
		foreach ($surveyAnswers as $key => $value) {
			//$numAnswer = $this->M_tin_tuc_table->getResult_id($value['id']);
			if ($value['result']>0)
			{
				$numthis = ($value['result'])*1;
				$percent = number_format(($numthis/$sum)*100,1);
			} else 
			{
				$numthis = 0;
				$percent = 0;
			}
			?>

				<div class="col-md-12" style="margin: 17px 0; padding: 0">
					<div class="col-md-11 col-sm-11 col-xs-10">
						<div class="progress" style="margin: 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="<?php echo "width: ".$percent."%" ?>">
						    <?php echo $percent.'%'; ?>
						  </div>
						</div>
					</div>
					<div class="col-md-1 col-sm-1 col-xs-1" style="margin: 0;">
						<span><?php echo $numthis ?></span>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<span><?php echo $value['answers'] ?></span>
					</div>
					
				</div>
			<?php
		}
	} else echo "Not found";
?>
 	
</div>	